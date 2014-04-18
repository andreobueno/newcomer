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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="styles/style_register.css" />

        <script>
            $(document).ready(function(){

                $("#student_div").hide();
                $("#worker_div").hide();


                $( "#btnRegister" ).click(function() {
                    var email = $.trim($("input[name='email']").val());
                    var year_of_birth = $.trim($("input[name='year_of_birth']").val());

                    alert('email: ' + email + 'year of birth: ' + year_of_birth);
                    //regformhash();
                    //regformhash(form, email, password, conf)
                });

                $( "#occupation" ).change( occup_function );


            });

            function occup_function(){
                var occup_val = $(" #occupation " ).val();
                if(occup_val == 'student')
                {
                    $(" #worker_div ").hide();
                    $(" #student_div ").show();
                }
                else if(occup_val == "worker")
                {
                    $(" #student_div ").hide();
                    $(" #worker_div ").show();
                }
                else {
                    $(" #student_div ").hide();
                    $(" #worker_div ").hide();
                }
            }


        </script>

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

                Name to display: <br />
                <input type="text" name="name_to_display" id="name_to_display" /><br />

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
                <input type="number" name="year_of_birth" id="year_of_birth" min="1920" max="2008">
                <div id="pass">- Example: 1992, 1989, etc.</div>

                Country you are from: 
                    <select id="country">
                        <option value="choose">Select your country...</option>
                        <option value="canada">Canada</option>
                        <option value="brazil">Brazil</option>
                        <option value="other">Other</option>
                    </select>

                Neighorhood you live at: 
                    <select id="neighborhood">
                        <option value="choose">Select your Neighborhood...</option>
                        <option value="kitslano">Kitslano</option>
                        <option value="Downtown">Downtown</option>
                    </select>

                Occupation:
                <select id="occupation">
                    <option value="choose">Select your occupation...</option>
                    <option value="student">Student</option>
                    <option value="worker">Worker</option>
                    <option value="nonworker">Non Worker</option>
                </select>

                <div id="student_div">
                    University: <br />
                    <input type="text" name="university" id="university" /><br />

                    Degree: 
                        <select id="degree">
                            <option value="choose">Select your degree...</option>
                            <option value="undergraduate">Undergraduate Student</option>
                            <option value="master">Master Student</option>
                            <option value="phd">PhD Student</option>
                            <option value="posdoc">Postdoctoral Fellow</option>
                        </select>

                    Course: <br />
                    <input type="text" name="course" id="course" /><br />
                    
                    Year of ingress: <br />
                    <input type="number" name="year_of_ingress" id="year_of_ingress" min="2000">
                    <div id="pass">- Example: 2012, 2014, etc.</div>
                </div>


                <div id="worker_div">
                Workeplace:
                Job Position:
                </div>

                    


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
                       id="btnRegister" 
                        /> 
            </form>
            <p>Return to the <a href="login.php">login page</a>.</p>
        </div>
    </body>
</html>