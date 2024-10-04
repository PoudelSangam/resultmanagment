<?php
	include("A_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>subjects</title>
	<link rel="stylesheet" type="text/css" href="subject.css"> 
	<script src="subjectvalid.js"></script>
</head>

<body bgcolor="lightgray">
	
		<div>
			<ul>
				<li class="nav" ><a href="home.php">HOME</a></li>
				<li class="active"><a href="C:\wamp64\www\Result\marks registation\Subject.php">ENTERY MARKS</a></li>
				<li><a href="studentdetail.php">STUDENT DETAIL</a></li>
			</ul>
		</div>
	<div>
		<div>
		<h2><center>Fill the Marks of all subject</center></h2>
	    </div>
	    <div>
	    	<form name="Form" onsubmit="return validateForm();" action="insert.php" method="POST">
	    	<div  class="column">
			<label >CLASS</label>
			<select name="class">
				<option value="1" >1</option>
				<option value="2" >2</option>
				<option value="3" >3</option>
				<option value="4" >4</option>
				<option value="5" >5</option>
				<option value="6" >6</option>
				<option value="7" >7</option>
				<option value="8" >8</option>
				<option value="9" >9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
			</div>
			<div class="column">
			<label>YEAR</label>
			<select name="year">
			    <option value="2078" >2078</option>
				<option value="2079">2079</option>
				<option value="2080">2080</option>
				<option value="2081">2081</option>
				<option value="2082">2082</option>
				<option value="2083">2083</option>
				<option value="2084">2084</option>
				<option value="2085">2085</option>
				<option value="2086">2086</option>
				<option value="2087">2087</option>
				<option value="2088">2088</option>
				<option value="2089">2089</option>
            </select>
			</div>
			<div class="column">
			<label>TERM</label>
			<select name="year">
			    <option value="first"  >First</option>
				<option value="second" >Second</option>
				<option value="third" >Third</option>
            </select>
			</div>


	    </div>
	
		
			<div class="form2">
					<div class="text">
							<h3><label>Student Name:</label>
							<input type="text" name="id"  maxlength="50" width="20">
							</h3>
					<div id="nameErr" class="error"></div></div>
						<hr>

				<h3><div style="background-color: lightgray">
					<UL>
						<li>Subjects</li>
						<li>TH</li>
						<li style="margin-left: 47px;">PR</li>
					</UL>
					</div>
				</h3><br>

				<div class="margin" >

					<div>Math<input class="m" type="text" name="Math" maxlength="3" size="3" value=""></div>
					<div id="mathErr" class="error"></div><br>

                    <div>Nepali<input class="n" type="text" name="Nepali" maxlength="3" size="3" value=""></div>
                    <div id="nepaliErr" class="error"></div><br>

					<div>PHYSIC
					 <input class="p" type="text" name="PHYSIC_th" maxlength="2" size="3" value="" >
					
					 <input type="text" name="PHYSIC_pr" maxlength="2" size="3" style="margin-left: 10px" value="" >
					  <div id="physics_thErr" class="error"></div>
					 <div id="physics_prErr" class="error"></div>
					</div><br>

					<div>Chemistry
                     <input class="c" type="text" name="Chemistry_th" maxlength="2" size="3" value="" >
                     <input type="text" name="Chemistry_pr" maxlength="2" size="3" style="margin-left: 10px" value="">
                     <div id="chemistry_thErr" class="error"></div>
                     <div id="chemistry_prErr" class="error"></div>
                    </div><br>

					<div>WDD 
						<input class="w" type="text" name="WDD_th" maxlength="2" size="3" value=""> 
						<input type="text" name="WDD_pr" maxlength="2" size="3" style="margin-left: 10px" value="">
					    <div id="wdd_thErr" class="error"></div>
					    <div id="wdd_prErr" class="error"></div>	
					</div><br>

					<div>DCCNs
						<input class="d" type="text" name="DCCN_th" maxlength="2" size="3" value="">
					    <input type="text" name="DCCN_pr" maxlength="2" size="3" style="margin-left: 10px"  value="">
					    <div id="dccn_thErr" class="error"></div>
					    <div id="dccn_prErr" class="error"></div>
	     			</div><br>	   
				</div>
				
				  <input type="submit" name="submit" value="submit">
			</form>
				
			</div>	
		</div>			
	

</body>
</html>