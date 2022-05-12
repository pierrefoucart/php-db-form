<?
$error = isset($_GET['error']) && ! empty($_GET['error']) ? $_GET['error'] : null;
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="referrer" content="origin-when-cross-origin" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PM Coffee Chat - Connect with your peers monthly</title>
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preload" href="https://wrap.so/fonts/moranga.ttf" as="font" crossorigin="">
    <style media="screen">
      body, .button{font-family: 'Lato', sans-serif; color: #02055C;}
      .signup-form{background-color: #DEDFFF}
      .button{color: #fff; background-color: #8F23C1;}
      @font-face{
        font-family:Moranga;
        src:url('https://wrap.so/fonts/moranga.ttf');
        font-style:normal;
        font-weight:600;
        font-display:swap;
        }
      .footer, .hero {background-color: #0a047a; color:#F3F3F8;}
      .footer, .hero .title,.hero .subtitle, footer strong{color:#F3F3F8;}
      .title{font-family:Moranga;}
      .signup-form .title{color:#02055C;}
    </style>
    <script>
      function validateForm() {
        let x = document.forms["Registration"]["email"].value;
        if (x == "") {
          alert("Email must be filled out");
          return false;
        }
      }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MMRK0RD15R"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-MMRK0RD15R');
    </script>
  </head>
<body>
  <p class="success">
  </p>
<section>
  <div class="container">
    <div class="hero-body column is-two-thirds">
      <p class="title test is-1"><a href="index.php"><img src="PMCoffeeChat_Logo_Dark.png" alt="Connecting Product Managers around the world" width="200"></a></p>
    </div>
  </div>
</section>

<section class="section signup-form">
  <div class="container">
    <div class="columns is-centered">
      <div class="box content column is-half ">
        <p><strong>You have successfully registered for PM Coffee Chat.</strong> You will receive the invite to your first coffee chat at the beginning of next month.<br>
        Looking forward to connecting you with a fantastic PM soon!</p>
        <p>Pierre @PMCoffeeChat</p>
        <p><a href="index.php">> Go back to the homepage</a></p>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="content has-text-centered">
    <strong>PM Coffee Chat</strong> is made by <a href="https://linkedin.com/in/pierrefoucart">Pierre Foucart</a> in Vancouver, BC.
    <p><script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Support PMCoffeChat', '#4A62C4', 'O5O4CJXU6');kofiwidget2.draw();</script></p>
<!--a href='https://www.freepik.com/vectors/videoconference'>Videoconference vector created by freepik - www.freepik.com</a-->  </div>
</footer>

</div>

</body>
</html>
