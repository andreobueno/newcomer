<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="styles/style.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            
            <div id="logout">
                <a href="includes/logout.php">LOGOUT</a>
            </div>
            <p align="left">Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <br />
        <p align="center"><img src="images/newComer_big_logo.png" width="700px" height="180px"></p>
        <br />
            <div id="navcontainer">
                <ul>
                    <li><a href="questions.php">Questions</a></li>
                    <li><a href="answers.php">Answers</a></li>
                    <li><a href="#">Cheese</a></li>
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruit</a></li>
                    
        
                </ul>
            </div>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>