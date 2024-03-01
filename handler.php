GNU nano 5.4                                           handler.php *                                                  <!DOCTYPE html>
<html>
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>
  <body style="background-color:rgb(212, 255, 212);">
    <?php
      $firstname = "";
      if ( isset( $_POST['firstname'] ) ){
        $firstname = $_POST['firstname'];
      }
      $lastname = "";
      if ( isset( $_POST['lastname'] ) ){
        $lastname = $_POST['lastname'];
      }
      $email = "";
      if ( isset( $_POST['email'] ) ){
        $email = $_POST['email'];
      }
      echo "<h3>Welcome ".$firstname." ".$lastname."!</h3>\n";
      echo "<h5>Your email is ".$email.".</h>\n";
    ?>
    <h5> If this is correct, </h5>
    <!-- Accent-colored flat button -->
    <a href="index3.html">
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Continue to next page
      </button>
    </a>
  </body>
</html>
