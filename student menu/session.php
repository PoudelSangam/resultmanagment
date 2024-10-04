<?php
    session_start();
    if(!isset($_SESSION["S_email"])) {
        session_destroy();
        header("Location: index.php");
        exit();
    }
   
?>
