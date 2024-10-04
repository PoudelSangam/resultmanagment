<?php
	include_once("session.php");
	include_once("Result_Ajax.php");
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RESULT</title>
  <link rel="stylesheet" type="text/css" href="css/homepage.css">
  <link rel="stylesheet" type="text/css" href="css/years.css">

</head>
<body>
<div class="navigation">
  <ul>
	<li ><a href="S_home.php">HOME</a></li>
	<li class="active"><a href="marksheet.php">2079</a></li>
	<li ><a href="marksheet.php">2080</a></li>
	<li ><a href="marksheet.php">2081</a></li>
	<li ><a href="marksheet.php">2082</a></li>

  <li style="float:right" ><a href="logout.php">LOGOUT</a></li>
  </ul>
</div>


<div style="display:none">
<select id="Year">
	<option value="2079"></option>
</select>
</div>

<section>
<div class="row">
  <div class="column">
	  <center><div><button id="Login_1" class="button">1'st Term</button></div></center>
	  <div id="Term_1" ></div>
  </div>

  <div class="column">
	<center><div><button id="Login_2" class="button" >2'nd Term</button></div></center>
	<div id="Term_2" ></div>
  </div>

  <div class="column">
	  <center><div><button id="Login_3" class="button">3'rd Term</button></div></center>
	  <div id="Term_3" ></div>
  </div>


</div>
</section>

</body>
</html>
