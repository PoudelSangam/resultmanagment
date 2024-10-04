<?php
    session_start();
    unset($_SESSION['S_email']);
    session_destroy();
    header("Location: index.php");
    exit();
 ?>
