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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preload" href="https://wrap.so/fonts/moranga.ttf" as="font" crossorigin="">
    <script src="modal.js"></script>
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
      .footer, .hero .title,.hero .subtitle, strong{color:#F3F3F8;}
      .title{font-family:Moranga;}
      .signup-form .title{color:#02055C;}
      .hero-body {padding-top: 1.5em;}
      .hero.is-medium .hero-body{padding-top: 4.5em;}      
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

  <section class="hero">
    <div class="container">
      <div class="hero-body columns is-centered">
        <img src="PMCoffeeChat_Logo.png" alt="Connecting Product Managers around the world" width="250">
      </div>
    </div>
  </section>

<section class="hero is-medium">
  <div class="container">
    <div class="columns is-vcentered is-centered">
      <div class="column is-one-quarter">
        <img src="humans.png" alt="A woman and a man talking over videoconference.">
      </div>
      <div class="hero-body column is-half">
        <p class="title test is-1">Find Product peers to exchange with</p>
        <p class="subtitle is-4">Every month we pair you with another Product Manager for a 30min virtual coffee chat.</p>
        <!--img src="humans.png" width="400px" alt="A woman and a man talking over videoconference"-->
      </div>
    </div>
  </div>
</section>

<section class="section signup-form">
  <div class="container">

    <div class="Error">
      <?php if ( ! is_null($error)) echo 'error: ' . $error; ?>
    </div>

      <div class="column is-half is-offset-one-quarter">
        <h2 class="title is-3">Join the conversation!</h2>
        <p>To ensure that other members have information to contact you and learn about you, all fields are mandatory.</p>
        <form method="post" action="action.php" class="DBForm" name="Registration" onsubmit="return validateForm()">

            <div class="field">
              <label class="label">Name</label>
              <div class="field-body">
                <div class="field">
                  <p class="control"><input class="input" type="text" name="firstname" placeholder="First name" required></p>
                </div>
                <div class="field">
                  <p class="control"><input class="input" type="text" name="lastname" placeholder="Last name" required></p>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Email address</label>
              <div class="control">
                <input class="input" type="email" name="email" value="" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Current job</label>
              <div class="field-body">
                <div class="field">
                  <p class="control"><input class="input" type="text" name="job_title" placeholder="Job title" required></p>
                </div>
                <div class="field">
                  <p class="control"><input class="input" type="text" name="company_name" placeholder="@Company" required></p>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">LinkedIn Profile URL</label>
              <div class="control">
                <input class="input" type="url" name="linkedin_profile" placeholder="https://www.linkedin.com/in/jankowalski/" required>
              </div>
            </div>

            <div class="field">
              <label class="label">How long have you been a PM for?</label>
              <div class="control">
                <label class="radio"><input type="radio" name="experience" value="1" required>
                  1-3 years</label>
                <label class="radio"><input type="radio" name="experience" value="3">
                  3-5 years</label>
                <label class="radio"><input type="radio" name="experience" value="5">
                  5-10 years</label>
                <label class="radio"><input type="radio" name="experience" value="10">
                  10+ years
                </label>
                <label class="radio"><input type="radio" name="experience" value="0">
                  I'm not a PM yet</label>
              </div>
            </div>

            <!--div class="field">
              <label class="label">Location</label>
              <div class="control">
                <input class="input" type="text" name="location" placeholder="City, State/Province/Country" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Timezone/GMT</label>
              <div class="control">
                <div class="select">
                  <select id="Timezone" name="timezone" required>
                    <option value="">Please select your timezone</option>
                    <option value="UTC">Universal Coordinated Time - GMT</option>
                    <option value="ECT">European Central Time - GMT+1:00</option>
                    <option value="EET">Eastern European Time - GMT+2:00</option>
                    <option value="EAT">Eastern African Time - GMT+3:00</option>
                    <option value="MET">Middle East Time - GMT+3:30</option>
                    <option value="NET">Near East Time - GMT+4:00</option>
                    <option value="PLT">Pakistan Lahore Time - GMT+5:00</option>
                    <option value="IST">India Standard Time - GMT+5:30</option>
                    <option value="BST">Bangladesh Standard Time - GMT+6:00</option>
                    <option value="VST">Vietnam Standard Time - GMT+7:00</option>
                    <option value="CTT">China Taiwan Time - GMT+8:00</option>
                    <option value="JST">Japan Standard Time - GMT+9:00</option>
                    <option value="ACT">Australia Central Time - GMT+9:30</option>
                    <option value="AET">Australia Eastern Time - GMT+10:00</option>
                    <option value="SST">Solomon Standard Time - GMT+11:00</option>
                    <option value="NST">New Zealand Standard Time - GMT+12:00</option>
                    <option value="MIT">Midway Islands Time - GMT-11:00</option>
                    <option value="HST">Hawaii Standard Time - GMT-10:00</option>
                    <option value="AST">Alaska Standard Time - GMT-9:00</option>
                    <option value="PST">Pacific Standard Time - GMT-8:00</option>
                    <option value="MST">Mountain Standard Time - GMT-7:00</option>
                    <option value="CST">Central Standard Time - GMT-6:00</option>
                    <option value="EST">Eastern Standard Time - GMT-5:00</option>
                    <option value="PRT">Puerto Rico/ US Virgin Islands Time - GMT-4:00</option>
                    <option value="AGT">Argentina Standard Time - GMT-3:00</option>
                    <option value="BET">Brazil Eastern Time - GMT-3:00</option>
                    <option value="CAT">Central African Time - GMT-1:00</td>
                  </select>
                </div>
              </div>
              <p class="help">To facilitate your calendar with matches</p>
            </div-->

            <div class="field">
              <div class="control">
                <button type="submit" name="action" value="add" class="button"><strong>Register for your first chat</strong></button>
              </div>
            </div>
        </form>


      </div>
  </div>
</section>

<footer class="footer">
  <div class="content has-text-centered">
    <strong>PM Coffee Chat</strong> is made by <a href="https://linkedin.com/in/pierrefoucart">Pierre Foucart</a> in Vancouver, BC.
    <p><script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Support PMCoffeChat', '#4A62C4', 'O5O4CJXU6');kofiwidget2.draw();</script></p>
<!--a href='https://www.freepik.com/vectors/videoconference'>Videoconference vector created by freepik - www.freepik.com</a-->  </div>
</footer>

<?php

$id = false;
if(null !==$_GET['action'] && $_GET['action']=='registered'){
  $id = $_GET['action'];

?>
    <div class="modal is-active">
      <div class="modal-background"></div>
      <div class="modal-content">
        <div class="box content">
        <p>You have successfully registered for PM Coffee Chat. You will receive the invite to your first coffee chat at the beginning of next month.<br>
        Looking forward to connecting you with a fantastic PM soon!</p>
        <p>-Pierre @PMCoffeeChat</p>
        </div>
      </div>
      <button class="modal-close is-large" aria-label="close"></button>
    </div>

<?php
}
?>

<!--button class="js-modal-trigger" data-target="modal-js-example">
  Open JS example modal
</button-->
</div>

</body>
</html>
