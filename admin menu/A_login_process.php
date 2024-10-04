<?php
include 'db.php';
session_start();

    $Email=$_POST['email'];
    $Password=$_POST['password'];
    if($Email!='' && $Password!='')
    {
        $sql=mysqli_query($conn,"SELECT * FROM admin where email='$Email' and A_password='$Password'");
        $row  = mysqli_fetch_array($sql);
        if($row)
        {
            $_SESSION['A_email']= $Email;
            echo "Success";
         
        }
        else
        { 
            echo "Invalid Email ID/Password";
        }
    }else
    {
        echo '<script>alert("EMPTY FIELD")</script>';
       
    }  

?>
