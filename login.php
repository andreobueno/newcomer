<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="styles/style_login.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <div class="container">
          <div class="login">
            <h1>Login</h1>
            <form action="includes/process_login.php" method="post" name="login_form">
              <p><input type="text" name="email" value="" placeholder="Email"></p>
              <p><input type="password" name="password" value="" placeholder="Password" id="password"></p>
              <p class="submit"><input type="button" value="Login" onclick="formhash(this.form, this.form.password);"></p>
            </form>
          </div>
         
          <div class="login-help">
            <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
          </div>
        </div>

        <p align="center">If you don't have a login, please <a href="register.php">register</a></p>

        <p align="center">You are currently logged <?php echo $logged ?>.</p>
    </body>
</html>