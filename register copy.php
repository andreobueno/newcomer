<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
        <link rel="stylesheet" href="styles/style_register.css" />
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <p align="center"><img src="images/newComer_big_logo.png" width="460px" height="130px"></p>
        <p align="center">Learn more about the UBC community. Ask whatever you want to know about your new life at Vancouver.</p>
        <br />
        
        <div id="register">
        <h1 align="center">Register</h1>
            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                    method="post" 
                    name="registration_form">

                E-mail: <br />
                <input type="email" name="email" id="email" />

                
                <div class="marginbottom">
                Gender: 
                    <input type="radio" name="gender" value="M"><label for="M">Male</label>
                    <input type="radio" name="gender" value="F"><label for="F">Female</label>
                    <input type="radio" name="gender" value="O"><label for="O">Other</label>
                    <br />
                </div>

                Year of birth: <br />
                <input type="number" name="year_of_birth" min="1920" max="2008">
                <div id="pass">- Example: 1992, 1989, etc.</div>

                Neighorhood: 
                    <select>
                      <option value="kitslano">Kitslano</option>
                      <option value="Downtown">Downtown</option>
                    </select>

                Password: <br />
                <input type="password"
                                 name="password" 
                                 id="password"/>
                <div id="pass">- Passwords must be at least 6 characters long</div>

                Confirm password: <br />
                <input type="password" 
                                         name="confirmpwd" 
                                         id="confirmpwd" />
                
                <p class="submit">
                <input type="button" 
                       value="Register" 
                       onclick="return regformhash(this.form,
                                       this.form.username,
                                       this.form.email,
                                       this.form.password,
                                       this.form.confirmpwd);" /> 
            </form>
            <p>Return to the <a href="login.php">login page</a>.</p>
        </div>
    </body>
</html>