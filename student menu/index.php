<?php
include_once"S_ajax.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student_login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body bgcolor="lightgray">
<h3 style="color: red; font-family: all;">School Management System</h3>

<div class="boarder" >
	
	<form>
		<h2 class="text">LOGIN</h2><br>
		
		<div><input type="text" name="email" id="email" placeholder="Email" value="" required></div><br>
		<div ><input type="password" name="password" id="password" placeholder="password" value="" required></div><br>
			<div id="demo" style="color:red;"></div>
		<hr class="hr">

		<div ><input class="button" type="submit" name="submit" value="Login" id="Login"></div>
	</form>

</div>


</body>
</html>