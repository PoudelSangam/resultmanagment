<?php
	include("A_session.php");
	include_once "student_ajax.php";
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Registation</title>
  <link rel="stylesheet" type="text/css" href="css/homepage.css">
  <link rel="stylesheet" type="text/css" href="css/register.css">
  <link rel="stylesheet" type="text/css" href="css/Errormsg.css">
  <!-- <script src="s_register_valid.js"></script> -->
</head>
<body style="height:0px">
	
<div class="navigation">
  <ul>
	<li ><a href="A_home.php">HOME</a></li>
  	<li ><a href="entery marks.php">ENTERY MARKS</a></li>
  	<li class="active"><a href="student registation.php">STUDENT REGISTATION</a></li>
  	<li><a href="teacher registation.php">TEACHER REGISTATION</a></li>
  	<li style="float:right" ><a  href="logout.php">LOGOUT</a></li>
	</ul>
</div>

<section>
<div class="row">
  <div class="column">
  </div>

  <div class="column">
  </div>

  <div class="column">
  </div>

  <div class="column">
        <div class="success" id="Success"></div>
	    <div class="error" id="Error"></div>
  </div>
</div>
</section>

<div style="margin-top: 80px;">
 
	<form name="Form" id="form">
		<h2 class="text">REGISTER</h2><br>
		
		<div><input  type="text" id="username" name="username" placeholder="Username" ></div>
		<div style="color: red; font-size: 15px;"  id="usernameErr"></div><br>

		<div ><input  type="password" id="password" name="password" placeholder="Password" ></div>
		<div style="color: red; font-size: 15px;" id="passwordErr"></div><br>

		<div><input  type="text" id="firstname" name="firstname" placeholder="FirstName" ></div>
		<div style="color: red; font-size: 15px;" id="firstnameErr"></div><br>

		<div><input  type="text" id="lastname" name="lastname" placeholder="LastName" ></div>
		<div style="color: red; font-size: 15px;" id="lastnameErr"></div><br>

		<div><input  type="text" id="phonenumber" name="phonenumber" placeholder="PhoneNumber" ></div>
		<div style="color: red; font-size: 15px;" id="phonenumberErr"></div><br>

		<div><input  type="email" id="email" name="email" placeholder="Email" ></div>
		<div style="color: red; font-size: 15px;" id="emailErr"></div><br>

		<div><input  type="text" id="Class" name="Class" placeholder="Class" ></div>
		<div style="color: red; font-size: 15px;" id="ClassErr"></div><br>

		<div><input  type="text" id="roll" name="roll" placeholder="ROLL NUMBER" ></div>
		<div style="color: red; font-size: 15px;" id="rollErr"></div><br>

		<hr class="hr">

		<div>
			<input class="button" type="submit" name="submit" value="register" id="Login">
	
	</form>
</div>
</body>
</html>