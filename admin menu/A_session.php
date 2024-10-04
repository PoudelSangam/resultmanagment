 <?php
    session_start();
    if(!isset($_SESSION["A_email"])) {
        header("Location: A_login.php");
        exit();
    }
?> 
