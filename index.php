<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NewComer</title>
        <link rel="stylesheet" href="styles/style.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 

    </head>
    <body>
    	<?php
	        if (isset($_GET['error'])) {
	            echo '<p class="error">Error Logging In!</p>';
	        }
        ?>
        <p align="center"><img src="images/newComer_big_logo.png" width="460px" height="130px"></p>
        <p align="center">Learn more about the UBC community. Ask whatever you want to know about your new life at Vancouver.</p>
        <br />
        <div id="login">
	        <h1>Login</h1>
            <form action="includes/process_login.php" method="post" name="login_form">
              <p><input type="text" name="email" value="" placeholder="Email"></p>
              <p><input type="password" name="password" value="" placeholder="Password" id="password"></p>
              <p><input type="button" value="Login" onclick="formhash(this.form, this.form.password);"></p>
            </form>
            Forgot your password? <a href="#">Click here to reset it.</a>            
        </div>

        <p align="center"><a href="register.php">REGISTER</a></p>        

    </body>
</html>