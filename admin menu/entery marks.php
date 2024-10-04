<?php
  include("A_session.php");
  include("subject_valid_ajax.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>entery marks</title>
  <link rel="stylesheet" type="text/css" href="css/homepage.css">
  <link rel="stylesheet" type="text/css" href="css/subject.css">
  <link rel="stylesheet" type="text/css" href="css/Errormsg.css">
  <!-- <script src="subjectvalid.js"></script> -->
</head>
<body>

<div class="navigation">
  <ul>
	<li ><a href="A_home.php">HOME</a></li>
  <li class="active"><a href="entery marks.php">ENTERY MARKS</a></li>
  <li><a href="student registation.php">STUDENT REGISTATION</a></li>
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

  <div>

    <div style="margin-top: 5%;">
    <h2><center>Fill the Marks of all subject</center></h2>
    </div>

      <div>
        <form name="Form">
        <div  class="column">
      <label ><b>CLASS</b></label>
      <select name="class" id="classes">
        <option value="1" >1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
      </div>
      <div class="column">
      <label><b>YEAR</b></label>
      <select name="year" id="Years">
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
      <label><b>TERM</b></label>
      <select name="term" id="terms">
          <option value="1" >First</option>
        <option value="2">Second</option>
        <option value="3">Third</option>
            </select>
      </div>


      </div>
  
    
      <div class="form2" id="form">

          <div class="text">
              <h3><label>Student Name:</label>
              <input type="text" name="id" id="name" maxlength="50" width="20"></h3>
              <div id="nameErr" style="color: red; font-size: 15px;"></div>
              <h3>
              <label>Roll Number:</label>
              <input type="text" name="RollNumber" id="Rollnumber"  maxlength="3" width="20" size="4" style="margin-left: 15px" >
              </h3>
              <div id="RollnumberErr" style="color: red; font-size: 15px;"></div>
              </div>
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

          <div>Math<input class="m" type="text" name="Math" id="Math" maxlength="3" size="3" value=""></div>
          <div id="mathErr" style="color: red; font-size: 15px;"></div><br>

                    <div>Nepali<input class="n" type="text" name="Nepali" id="Nepali" maxlength="3" size="3" value=""></div>
                    <div id="nepaliErr" style="color: red; font-size: 15px;"></div><br>

          <div>PHYSIC
           <input class="p" type="text" name="PHYSIC_th" id="PHYSIC_th" maxlength="2" size="3" value="" >
          
           <input type="text" name="PHYSIC_pr" id="PHYSIC_pr" maxlength="2" size="3" style="margin-left: 10px" value="" >
            <div id="physics_thErr" style="color: red; font-size: 15px;"></div>
           <div id="physics_prErr" style="color: red; font-size: 15px;"></div>
          </div><br>

          <div>Chemistry
                     <input class="c" type="text" name="Chemistry_th" id="Chemistry_th" maxlength="2" size="3" value="" >
                     <input type="text" name="Chemistry_pr" id="Chemistry_pr" maxlength="2" size="3" style="margin-left: 10px" value="">
                     <div id="chemistry_thErr" style="color: red; font-size: 15px;"></div>
                     <div id="chemistry_prErr" style="color: red; font-size: 15px;"></div>
                    </div><br>

          <div>WDD 
            <input class="w" type="text" name="WDD_th" id="WDD_th" maxlength="2" size="3" value=""> 
            <input type="text" name="WDD_pr" id="WDD_pr" maxlength="2" size="3" style="margin-left: 10px" value="">
              <div id="wdd_thErr" style="color: red; font-size: 15px;"></div>
              <div id="wdd_prErr" style="color: red; font-size: 15px;"></div>  
          </div><br>

          <div>DCCN
            <input class="d" type="text" name="DCCN_th" id="DCCN_th" maxlength="2" size="3" value="">
              <input type="text" name="DCCN_pr" id="DCCN_pr" maxlength="2" size="3" style="margin-left: 10px"  value="">
              <div id="dccn_thErr" style="color: red; font-size: 15px;"></div>
              <div id="dccn_prErr" style="color: red; font-size: 15px;"></div>
            </div><br>     
        </div>
        
          <input type="submit"  value="submit" id="Login">
      </form>
        
      </div>  
    </div>  
</body>
</html>