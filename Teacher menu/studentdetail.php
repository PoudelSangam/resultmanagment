<?php
include("session.php");
include("studentdetails_ajax.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>student detail</title>
  <link rel="stylesheet" type="text/css" href="css/homepage.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/years.css">

</head>
<body>
<div class="navigation">  
<ul>
	<li ><a href="T_home.php">HOME</a></li>
	<li><a href="entery marks.php">ENTERY MARKS</a></li>
	<li class="active"><a href="studentdetail.php">STUDENT DETAIL</a></li>
	<li ><a href="verify.php">STUDENT VERIFY</a></li>
  <li style="float:right"><a href="logout.php">LOGOUT</a></li>
</ul>
</div>
<section>
    <div class=row>
        <div class="colum">
            <button id="1">Class One</button>
        </div>
        <div class="colum">
            <button id="2">Class Two</button>
        </div>
        <div class="colum">
            <button id="3">Class Three</button>
        </div>
        <div class="colum">
            <button id="4">Class Four</button>
        </div>
        <div class="colum">
            <button id="5">Class Five</button>
        </div>
        <div class="colum">
            <button id="6">Class Six</button>
        </div>
        <div class="colum">
            <button id="7">Class Seven</button>
        </div>
        <div class="colum">
            <button id="8">Class Eight</button>
        </div>
        <div class="colum">
            <button id="9">Class Nine</button>
        </div>
        <div class="colum">
            <button id="10">Class Ten</button>
        </div>
        <div class="colum">
            <button id="11">Class Eleven</button>
        </div>
        <div class="colum">
            <button id="12">Class Twevel</button>
        </div>
    
</div>

</section>

<div id="showdata"><div>

</body>
</html>