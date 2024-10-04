
<?php
include_once "db.php";
if (isset($_POST['submit'])) 
{

$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];

$sql=mysqli_query($conn,"SELECT * FROM tregister where Temail='$email'");

	if(empty($username)||empty($password)||empty($firstname)||empty($lastname)||empty($phonenumber)||empty($email))
	{
    echo "empty field";
   }
   else if(mysqli_fetch_array($sql))
   {
	   $Error="Email already exist";
	   echo $Error;

   }
	
   else
   {
   			$sql="INSERT INTO tregister(Tusername,Tpassword,Tfirstname,Tlastname,Tphonenumber,Temail)
         VALUES ('$username','$password','$firstname','$lastname','$phonenumber','$email')";
   
			
				if( mysqli_query($conn,$sql))
				{
					echo "1";
					
				}
				else{
					echo "Error" . $sql . "<br>" . mysqli_error($conn);
				}

      mysqli_close($conn);


   }
	
	
	
	
  
 
	
 
 

}

?>
