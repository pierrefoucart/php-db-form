<?php

require_once '../config.php';

$error = isset($_GET['error']) && ! empty($_GET['error']) ? $_GET['error'] : null;

// connect to mysql database
try {
  $dns = 'mysql:host=' . HOST . ';dbname=' . DB;
  $pdo = new PDO($dns, USER, PASS);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo '<p style="color:red">mysql connection failed: ' . $e->getMessage() . '</p>';
  echo '<p>try to refresh</p>';
}

// select data from database
$stmt = $pdo->prepare('SELECT * from `members-coffee` ORDER BY created_at DESC');
$stmt->execute();

$members = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Coffee Members List</title>

  <style>
    .DBForm,
    .Fields {
      border: 2px solid #222;
      border-radius: 2px;
    }

    .DBForm {
      padding: 1rem;
    }
    .DBForm .input {
      width: 222px;
    }

    .Error {
      color: tomato;
      margin-top: 0.6rem;
    }

    .Fields .field {
      border-bottom: 1px solid #222;
      padding: 1rem;
    }
  </style>
</head>
<body>

  <h2>Coffee Members List</h2>
  <div class="Fields">
    <?php

    $esth = $pdo->prepare('SELECT count(*) as total from `members-coffee`');
    $esth->execute();
    $member_count = $esth->fetchColumn();
    echo "Members count: ".$member_count;


      foreach ($members as $key => $member) {
        ?><div class="field"><?php
          $created_date = date('d.m.Y', $member['created_at']);
          echo $created_date . ' – ' . $member['email'];
        ?></div><?php
      }
    ?>
  </div>

</body>
</html>
