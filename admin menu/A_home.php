<?php
	include_once("session.php");
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
	<li class="active"><a href="A_home.php">HOME</a></li>
	<li><a href="entery marks.php">ENTERY MARKS</a></li>
	<li><a href="student registation.php">STUDENT REGISTATION</a></li>
	<li><a href="teacher registation.php">TEACHER REGISTATION</a></li>
  <li style="float:right" ><a  href="logout.php">LOGOUT</a></li>
  </ul>
</div>
<div  style="padding:20px;margin-top:30px;">
	<h1>THIS IS HOME PAGE.</h1>
		<p>Hey, <?php echo $_SESSION["A_email"];?>!</p>
        <p>You are now user dashboard page.</p>
</div>
</body>
</html>
