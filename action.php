<?php

$post_action = isset($_POST['action']) && ! empty($_POST['action']) ? $_POST['action'] : null;

if ( ! is_null($post_action)) {
  switch ($post_action) {
    case 'add':
      $address = isset($_POST['email']) ? trim($_POST['email']) : '';
      $address = ! empty($address) ? $address : null;
      $linkedin_profile = $_POST['linkedin_profile'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $job_title = $_POST['job_title'];
      $company_name = $_POST['company_name'];
      $experience = $_POST['experience'];
      $location = $_POST['location'];
      $timezone = $_POST['timezone'];

      if ( ! is_null($address)) {
        save_member($address, $firstname, $lastname, $linkedin_profile, $job_title, $company_name, $experience, $location, $timezone);
      } else {
        show_index('invalid email address !');
      }
      break;
    default:
      show_index('unknown action');
      break;
  }
} else {
  show_index('no action triggered !');
}


/// functions

function save_member($address, $firstname, $lastname, $linkedin_profile, $job_title, $company_name, $experience, $location, $timezone) {
  require_once 'config.php';


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $time = time();
  $sql = "INSERT INTO `members-coffee` (`email`, `firstname`, `lastname`, `linkedin_profile`, `job_title`, `company_name`, experience, location, timezone, `created_at`)
  VALUES ('$address', '$firstname', '$lastname', '$linkedin_profile', '$job_title', '$company_name', '$experience', '$location', '$timezone', $time)";

  if (mysqli_query($conn, $sql)) {
      show_index();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  //if ($inserted) {
  //  show_index($sql);
//  } else {
//    show_index('something went wrong, please try again!');
//  }
  mysqli_close($conn);
}


function show_index($msg = null) {
  if ( is_null($msg)) {
    header('Location: registration_confirmation.php');
  } else {
    header('Location: index.php?error' . $msg);
  }
}


// future dev:
// prohibit dupplication
