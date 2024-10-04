<?php
	include("session.php");
?>
<html>
    <body>
<div  style="padding:20px;margin-top:30px;">
    	<?php  
	 $Result='<center><div><h2>Result</h2></div></center>
	<div>';

					include("db.php");

					$NAME=$_SESSION['S_email'];
					
					$Sdetail=mysqli_query($conn,"SELECT * FROM sregister WHERE Semail='$NAME'");
	
			while($rows=$Sdetail->fetch_assoc())
					{
			
			
			
   $Result.='Name: '. $rows['Sfirstname']." ".$rows['Slastname'].'<br>
			Class:'.$rows['Sclass'].'<br>
			Roll No:'.$rows['Sroll'].'<br>';
	?>
	</div>
    <?php
	include("function.php");
	$name= $rows['Sfirstname'];
	$class=$rows['Sclass'];
	$roll=$rows['Sroll'];
    $Term=$_POST['Term'];
    $Year=$_POST['Year'];
    
  
    
	$Nepali=subject_mark("nepali",$name,$class,$roll,$conn,$Term,$Year);
	$Maths=subject_mark("math",$name,$class,$roll,$conn,$Term,$Year);
	$PHYSIC_th=subject_th_mark("physic",$name,$class,$roll,$conn,$Term,$Year);
	$PHYSIC_pr=subject_pr_mark("physic",$name,$class,$roll,$conn,$Term,$Year);
	$Chemistry_th=subject_th_mark("chemistry",$name,$class,$roll,$conn,$Term,$Year);
	$Chemistry_pr=subject_pr_mark("chemistry",$name,$class,$roll,$conn,$Term,$Year);
	$WDD_th=subject_th_mark("wdd",$name,$class,$roll,$conn,$Term,$Year);
	$WDD_pr=subject_pr_mark("wdd",$name,$class,$roll,$conn,$Term,$Year);
	$DCCN_th=subject_th_mark("dccn",$name,$class,$roll,$conn,$Term,$Year);
	$DCCN_pr=subject_pr_mark("dccn",$name,$class,$roll,$conn,$Term,$Year);
	
    if(empty($Nepali) && empty($Maths) && empty($PHYSIC_th) && empty($PHYSIC_pr)&& empty($Chemistry_th) && empty($Chemistry_pr)&&empty($WDD_th)&&empty($WDD_pr)&&empty($DCCN_th)&&empty($DCCN_pr))
    {
       $Result='<style>
      .Error
      {
          text-align:center;
          font-size:20px;
          color:red;
      }
      </style>
       
       <p class="Error">Result Not published</p>';
       
       
       
     echo $Result;
       

    }
    else
    {
	

	
	

	$Result.='<table border="2px solid">';
	$Result.='<tr>
			<th rowspan="2">SN</th>
			<th rowspan="2">Subjects</th>
			<th colspan="3">Obtained Grade</th>
			<th rowspan="2">Grade Point</th>
		</tr>';
		$Result.='<tr>
			<th>TH</th>
			<th>PR</th>
			<th>Final</th>
		</tr>';
		$Result.='<tr>
			<td>1</td>
			<td>Nepali</th>
			<td>'.grade_100($Nepali).'</td>
			<td> </td>
			<td>'.grade_100($Nepali).' </td>
			<td>'.$N= check($Nepali).'</td>
		</tr>';
		$Result.='<tr>
			<td>2</td>
			<td>Math</th>
			<td> '.grade_100($Maths). '</td>
			<td>  </td>
			<td>'.grade_100($Maths). '</td>
			<td> '. $M=check($Maths).'</td>
		</tr>';
		$Result.='<tr>
			<td>3</td>
			<td>Physic</th>
			<td>'.grade_75($PHYSIC_th).' </td>
			<td>'.grade_25($PHYSIC_pr).'</td>
			<td>'. grade_100(sum($PHYSIC_pr,$PHYSIC_th)).'</td>
			<td>'.$P=check(sum($PHYSIC_pr,$PHYSIC_th)).'</td>
		</tr>';
		$Result.='<tr>
			<td>4</td>
			<td>Chemistry</th>
			<td>'.grade_75($Chemistry_th).' </td>
			<td>'.grade_25($Chemistry_pr).' </td>
			<td>'. grade_100(sum($Chemistry_pr,$Chemistry_th)).'</td>
		    <td>'.$C=check(sum($Chemistry_pr,$Chemistry_th)).'</td>
		</tr>';
		$Result.='<tr>
			<td>5</td>
			<td>WDD</th>
			<td>'. grade_50($WDD_th).'</td>
			<td>'.grade_50($WDD_pr).'</td>
			<td>'. grade_100(sum($WDD_pr,$WDD_th)).'</td>
			<td>'.$W=check(sum($WDD_pr,$WDD_th)).'</td>
		</tr>';
		$Result.='<tr>
			<td>6</td>
			<td>DCCN</th>
			<td>'. grade_50($DCCN_th).'</td>
			<td>'.grade_50($DCCN_pr).'</td>
			<td>'. grade_100(sum($DCCN_pr,$DCCN_th)).'</td>
			<td>'.$D=check(sum($DCCN_pr,$DCCN_th)).'</td>
		</tr>';
		
		$Result.='<tr >
			<td colspan="6">Grade Point Average(GPA):'.totalgrade($N,$M,$P,$C,$W,$D).'</td>
		</tr>';
	    $Result.='</table>';
		echo $Result;
		}
					} ?>
		
         
   
</div>
</body>
</html>
