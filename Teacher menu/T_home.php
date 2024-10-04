<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>home</title>
  <link rel="stylesheet" type="text/css" href="css/homepage.css">
</head>
<body>
<div class="navigation">
  <ul>
	<li class="active"><a href="T_home.php">HOME</a></li>
	<li><a href="entery marks.php">ENTERY MARKS</a></li>
	<li><a href="studentdetail.php">STUDENT DETAIL</a></li>
	<li ><a href="verify.php">STUDENT VERIFY</a></li>
  <li style="float:right" ><a  href="logout.php">LOGOUT</a></li>
  </ul>
  
 <P> hello <?php echo $_SESSION['T_email']; ?></P> 
</div>
</body>
</html>