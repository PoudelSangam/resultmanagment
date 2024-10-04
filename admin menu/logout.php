<?php
    session_start();
    session_destroy();
    unset($_SESSION["A_email"]);
    header("Location:index.php");
 ?>
