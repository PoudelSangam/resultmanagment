<!DOCTYPE html>
<html>
<head>
	<title>teacher_login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body bgcolor="lightgray">
<h3 style="color: red; font-family: all;">School Management System</h3>

<div class="boarder" >
	
	<form  method="POST" action="T_login_process.php">
		<h2 class="text">LOGIN</h2><br>
		
		<div><input type="text" name="email" placeholder="Email" value="" required></div><br>
		<div ><input type="password" name="password" placeholder="password" value="" required>
			<div id="demo"></div></div><br>
		<hr class="hr">

		<div ><input class="button" type="submit" name="submit" value="Login"></div>
	</form>

</div>
</body>
</html>