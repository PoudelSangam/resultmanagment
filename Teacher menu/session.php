<?php
    session_start();
    if(!isset($_SESSION["T_email"])) {
        header("Location:index.php");
        exit();
    }
?>
