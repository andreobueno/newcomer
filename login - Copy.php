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
        <!--<link rel="stylesheet" href="styles/main.css" />-->
        <link rel="stylesheet" href="includes/style_login.css" />
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
            <form method="post" action="">
              <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
              <p><input type="password" name="password" value="" placeholder="Password"></p>
              <p class="remember_me">
                <label>
                 <label>
                  <input type="checkbox" name="remember_me" id="remember_me">
                  Remember me on this computer
                </label>
                </label>
              </p>
              <p class="submit"><input type="submit" name="commit" value="Login"></p>
            </form>
          </div>
         
          <div class="login-help">
            <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
          </div>
        </div>

        <br />
        <p>------------</p>

        <form action="includes/process_login.php" method="post" name="login_form">                      
            Email: <input type="text" name="email" />
            Password: <input type="password" 
                             name="password" 
                             id="password"/>
            <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form>
        <p>If you don't have a login, please <a href="register.php">register</a></p>
        <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
        <p>You are currently logged <?php echo $logged ?>.</p>
    </body>
</html>