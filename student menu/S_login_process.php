<?php
include 'db.php';
 session_start();
if(isset($_POST['submit']))
{
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    if($Email!='' && $Password!='')
    {
        $sql=mysqli_query($conn,"SELECT * FROM sregister where Semail='$Email' and Spassword='$Password'");
        $row=mysqli_fetch_array($sql);
        if($row)
        {
           
            $_SESSION['S_email']= $Email;
            echo "Success";
        }
        else
        { 
           echo "Invalid Email ID/Password";
        }
    }
}
?>
