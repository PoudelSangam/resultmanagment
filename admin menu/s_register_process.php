
<?php
include("db.php");
if (isset($_POST['submit'])) 
{


	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$phonenumber=$_POST['phonenumber'];
	$email=$_POST['email'];
	$class=$_POST['Class'];
	$roll =$_POST['roll'];


	$sql=mysqli_query($conn,"SELECT * FROM sregister where Semail='$email'");

    function StudentDetail($conn,$class)
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$roll=$_POST['roll'];

		$sql="INSERT INTO $class(First_Name,Last_Name,Roll_Number)
        	 VALUES ('$firstname','$lastname','$roll')";
			   $row=mysqli_query($conn,$sql);
			   
			   if($row)
			   {
				   echo "1";
				   
			   }
			   else
			   {
				   echo "error into class";
			   }
	   
			 

	}

	 function submit($conn)
	 {
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$phonenumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		$class=$_POST['Class'];
		$roll=$_POST['roll'];

		$sql="INSERT INTO sregister (Susername,Spassword,Sfirstname,Slastname,Sphonenumber,Semail,Sclass,Sroll)
		VALUES('$username','$password','$firstname','$lastname','$phonenumber','$email','$class','$roll')";
        $row=mysqli_query($conn,$sql);
	   
		//    if($row)
		//    {
		// 	   echo "1";
			   
		//    }

	 }
       

	if(empty($username)||empty($password)||empty($firstname)||empty($lastname)||empty($phonenumber)||empty($email)||empty($class)||empty($roll))
	{
		$Error="Empety field";
    echo $Error;
   }
   else if(mysqli_fetch_array($sql))
   {
	   $Error="Email already exist";
	   echo $Error;

   }
   elseif($class=='01' or $class=='1')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class' ");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class one";
				echo $Error;
			}
			else
			{
			    $class="class_one";

				submit($conn);
			    StudentDetail($conn,$class);


			}
			

		}
		elseif($class=='02' or $class=='2')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class'");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class two";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_two";
				StudentDetail($conn,$class);


			}
			

		}
		elseif($class=='03' or $class=='3')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class' ");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class three";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_three";
				StudentDetail($conn,$class);


			}
			

		}

		elseif($class=='04' or $class=='4')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class' ");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class four";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_four";
				StudentDetail($conn,$class);


			}
			

		}

		elseif($class=='05' or $class=='5')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class' ");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class five";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_five";
				StudentDetail($conn,$class);


			}
			

		}
		elseif($class=='06' or $class=='6')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class' ");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class six";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_six";
				StudentDetail($conn,$class);


			}
			

		}
	

		elseif($class=='07' or $class=='7')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class' ");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class seven";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_seven";
				StudentDetail($conn,$class);


			}
			

		}
		elseif($class=='08' or $class=='8')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class' ");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class eight";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_eight";
				StudentDetail($conn,$class);


			}
			

		}
		elseif($class=='09' or $class=='9')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class' ");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class nine";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_nine";
				StudentDetail($conn,$class);


			}
			

		}
		elseif($class=='10')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class'");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class ten";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_nine";
				StudentDetail($conn,$class);


			}
			

		}

		elseif($class=='11')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll' and Sclass='$class' ");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class eleven";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_eleven";
				StudentDetail($conn,$class);


			}
			

		}
		elseif($class=='12')	
		{
			$sql=mysqli_query($conn,"SELECT * FROM sregister where Sroll='$roll'  and Sclass='$class'");
            $row  = mysqli_fetch_array($sql);
			if($row)
			{
				$Error="Roll Number already exist in class twevel";
				echo $Error;
			}
			else
			{

				submit($conn);
				$class="class_twevel";
				StudentDetail($conn,$class);


			}
			

		}


	
   else
   {

   }
   		
	

}

?>
