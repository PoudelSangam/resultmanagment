<?php
function subject_mark($sub,$name,$class,$roll,$conn,$Term,$Year)
{

    $result=mysqli_query($conn,"SELECT *  FROM $sub WHERE Names='$name' and Class='$class' and Roll_Number='$roll' and Term='$Term' and Years='$Year'");
    
    
    
    while($row=$result->fetch_assoc())
{
    $marks=$row['Mark'];
    return $marks;
}

}

function subject_th_mark($sub,$name,$class,$roll,$conn,$Term,$Year)
{
    

    $result=mysqli_query($conn,"SELECT * FROM $sub WHERE Names='$name' and Class='$class' and Roll_Number='$roll' and Term='$Term' and Years='$Year'");
    
    while($rows=$result->fetch_assoc())
{
    $marks=$rows['Th_Mark'];
    return $marks;
}
}

function subject_pr_mark($sub,$name,$class,$roll,$conn,$Term,$Year)
{
    
    $result=mysqli_query($conn,"SELECT *  FROM $sub WHERE Names='$name' and Class='$class' and Roll_Number='$roll' and Term='$Term' and Years='$Year'");
    while($rows=$result->fetch_assoc())
{
    $marks=$rows['Pr_Mark'];
    return $marks;
}
}

function totalgrade($a,$b,$c,$d,$e,$f)
{
	
	$Tgrade=((float)$a+(float)$b+(float)$c+(float)$d+(float)$e+(float)$f)/6;
	$tgrade = number_format($Tgrade, 2);
	return $tgrade;
}


function check($result)
{
	if ($result>=90 and $result<=100)
	 {
	 $grade=4;
	 return $grade;
	 }
	 elseif ($result>=80 and $result<=89)
	  {
	 	 $grade=3.6;
	  return $grade;
	  }
	   elseif ($result>=70 and $result<=79)
	  {
	 	 $grade=3.2;
	  return $grade;
	  }
	   elseif ($result>=60 and $result<=69)
	  {
	 	 $grade=2.8;
	  return $grade;
	  }
	   elseif ($result>=50 and $result<=59)
	  {
	 	 $grade=2.4;
	  return $grade;
	  }
	   elseif ($result>=40 and $result<=49)
	  {
	 	 $grade=2.0;
	  return $grade;
	  }
	   elseif ($result>=30 and $result<=39)
	  {
	 	 $grade=1.6;
	  return $grade;
	  }
	   elseif ($result>=20 and $result<=29)
	  {
	 	 $grade=1.2;
	  return $grade;
	  }
	   elseif ($result>=0 and $result<=19)
	  {
	 	 $grade=0.8;
	  return $grade;
	  }
	  else
	  {

	  }

}


function sum($a,$b)
{
	$sum=$a+$b;
	return $sum;
}

function grade_100($result)
{
	if ($result>=90 and $result<=100)
	 {
	 $grade='A+';
	 return $grade;
	 }
	 elseif ($result>=80 and $result<=89)
	  {
	 	 $grade='A';
	  return $grade;
	  }
	   elseif ($result>=70 and $result<=79)
	  {
	 	 $grade='B+';
	  return $grade;
	  }
	   elseif ($result>=60 and $result<=69)
	  {
	 	 $grade='B';
	  return $grade;
	  }
	   elseif ($result>=50 and $result<=59)
	  {
	 	 $grade='C+';
	  return $grade;
	  }
	   elseif ($result>=40 and $result<=49)
	  {
	 	 $grade='C';
	  return $grade;
	  }
	   elseif ($result>=30 and $result<=39)
	  {
	 	 $grade='D+';
	  return $grade;
	  }
	   elseif ($result>=20 and $result<=29)
	  {
	 	 $grade='D';
	  return $grade;
	  }
	   elseif ($result>=0 and $result<=19)
	  {
	 	 $grade='E';
	  return $grade;
	  }
	  else
	  {

	  }

}

function grade_75($result)
{
	if ($result>=67.5 and $result<=75)
	 {
	 $grade='A+';
	 return $grade;
	 }
	 elseif ($result>=60 and $result<=67)
	  {
	 	 $grade='A';
	  return $grade;
	  }
	   elseif ($result>=52.5 and $result<=59.5)
	  {
	 	 $grade='B+';
	  return $grade;
	  }
	   elseif ($result>=45 and $result<=52)
	  {
	 	 $grade='B';
	  return $grade;
	  }
	   elseif ($result>=37.5 and $result<=44.5)
	  {
	 	 $grade='C+';
	  return $grade;
	  }
	   elseif ($result>=30 and $result<=37)
	  {
	 	 $grade='C';
	  return $grade;
	  }
	   elseif ($result>=22.5 and $result<=29.5)
	  {
	 	 $grade='D+';
	  return $grade;
	  }
	   elseif ($result>=15 and $result<=22)
	  {
	 	 $grade='D';
	  return $grade;
	  }
	   elseif ($result>=0 and $result<=14)
	  {
	 	 $grade='E';
	  return $grade;
	  }
	  else
	  {

	  }

}

function grade_25($result)
{
	if ($result>=22.5 and $result<=25)
	 {
	 $grade='A+';
	 return $grade;
	 }
	 elseif ($result>=20 and $result<=22)
	  {
	 	 $grade='A';
	  return $grade;
	  }
	   elseif ($result>=17.5 and $result<=19.5)
	  {
	 	 $grade='B+';
	  return $grade;
	  }
	   elseif ($result>=15 and $result<=17)
	  {
	 	 $grade='B';
	  return $grade;
	  }
	   elseif ($result>=12.5 and $result<=15)
	  {
	 	 $grade='C+';
	  return $grade;
	  }
	   elseif ($result>=10 and $result<=12)
	  {
	 	 $grade='C';
	  return $grade;
	  }
	   elseif ($result>=7.5 and $result<=9.5)
	  {
	 	 $grade='D+';
	  return $grade;
	  }
	   elseif ($result>=5 and $result<=7)
	  {
	 	 $grade='D';
	  return $grade;
	  }
	   elseif ($result>=0 and $result<=4.5)
	  {
	 	 $grade='E';
	  return $grade;
	  }
	  else
	  {

	  }

}
function grade_50($result)
{
	if ($result>=45 and $result<=50)
	 {
	 $grade='A+';
	 return $grade;
	 }
	 elseif ($result>=40 and $result<=44.5)
	  {
	 	 $grade='A';
	  return $grade;
	  }
	   elseif ($result>=35 and $result<=39.5)
	  {
	 	 $grade='B+';
	  return $grade;
	  }
	   elseif ($result>=30 and $result<=34.5)
	  {
	 	 $grade='B';
	  return $grade;
	  }
	   elseif ($result>=25 and $result<=29.5)
	  {
	 	 $grade='C+';
	  return $grade;
	  }
	   elseif ($result>=20 and $result<=24.9)
	  {
	 	 $grade='C';
	  return $grade;
	  }
	   elseif ($result>=10 and $result<=19.5)
	  {
	 	 $grade='D+';
	  return $grade;
	  }
	   elseif ($result>=5 and $result<=9.5)
	  {
	 	 $grade='D';
	  return $grade;
	  }
	   elseif ($result>=0 and $result<=4.5)
	  {
	 	 $grade='E';
	  return $grade;
	  }
	  else
	  {

	  }

}
?>