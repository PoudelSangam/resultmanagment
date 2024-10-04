<?php
include_once "db.php";

	if (isset($_POST['submit']))
	 {
        $Names=$_POST['id'];
        $Maths=$_POST['math'];
        $Nepali=$_POST['Nepali'];
        $PHYSIC_th=$_POST['PHYSIC_th'];
        $PHYSIC_pr=$_POST['PHYSIC_pr'];
        $Chemistry_th=$_POST['Chemistry_th'];
        $Chemistry_pr=$_POST['Chemistry_pr'];
        $WDD_th=$_POST['WDD_th'];
        $WDD_pr=$_POST['WDD_pr'];
        $DCCN_th=$_POST['DCCN_th'];
        $DCCN_pr=$_POST['DCCN_pr'];
        $Class_A=$_POST['classes'];
        $years=$_POST['years'];
        $RollNumber=$_POST['RollNumber'];
        $term=$_POST['terms'];
        // echo $Class_A;
        

        $class_check=array("class_zero","class_one","class_two","class_three","class_four","class_five","class_six","class_seven","class_eight","class_nine","class_ten","class_eleven","class_twevel");
        
        for($r=0;$r<13;$r++)
        {
            
            if($Class_A== $r)
            {
                $class=$class_check[$r];
                // echo $class;
            }

        }
       
        
        $query="SELECT * FROM $class where First_Name='$Names' and Roll_Number='$RollNumber'";
        $sql=mysqli_query($conn,$query);
        $row  = mysqli_fetch_array($sql);

        $query1="SELECT * FROM math where Names='$Names' and Roll_Number='$RollNumber' and Term='$term' and Years='$years' and Class='$class'";
        $sql1=mysqli_query($conn,$query1);
        $row1  = mysqli_fetch_array($sql1);
         
   

        
        if(empty($Names)||empty($Maths)||empty($Nepali)||empty($PHYSIC_th)||empty($PHYSIC_pr)||empty($Chemistry_th)||empty($Chemistry_pr)||empty($WDD_th)||empty($WDD_pr)||empty($DCCN_th)||empty($DCCN_pr)||empty($Class_A)||empty($years)||empty($RollNumber)||empty($term))
	{
    echo "empty field";
    // echo $Names,$Maths,$Nepali,$PHYSIC_pr,$PHYSIC_th,$Chemistry_th,$Chemistry_pr,$WDD_th,$WDD_pr,$DCCN_pr,$DCCN_th;
   }
   elseif(!$row)
   {
       echo "doesn't found record ";
   
   }
   elseif($row1)
   {
    echo "record already inserted";

   }
   else
   {

   

        $sql_M="INSERT INTO math(Mark,Class,Names,Roll_Number,Term,Years)
        VALUES ('$Maths','$Class_A','$Names','$RollNumber','$term','$years')";

        $sql_n="INSERT INTO nepali(Mark,Class,Names,Roll_Number,Term,Years)
        VALUES ('$Nepali','$Class_A','$Names','$RollNumber','$term','$years')";

        $sql_p="INSERT INTO physic(Th_Mark,Pr_Mark,Class,Names,Roll_Number,Term,Years)
        VALUES ('$PHYSIC_th','$PHYSIC_pr','$Class_A','$Names','$RollNumber','$term','$years')";

        $sql_c="INSERT INTO chemistry(Th_Mark,Pr_Mark,Class,Names,Roll_Number,Term,Years)
        VALUES ('$Chemistry_th','$Chemistry_pr','$Class_A','$Names','$RollNumber','$term','$years')";

        $sql_d="INSERT INTO dccn(Th_Mark,Pr_Mark,Class,Names,Roll_Number,Term,Years)
        VALUES ('$DCCN_th','$DCCN_pr','$Class_A','$Names','$RollNumber','$term','$years')";

        $sql_w="INSERT INTO wdd(Th_Mark,Pr_Mark,Class,Names,Roll_Number,Term,Years)
        VALUES ('$WDD_th','$WDD_pr','$Class_A','$Names','$RollNumber','$term','$years')";

        $Arraysql=array($sql_M,$sql_n,$sql_p,$sql_c,$sql_d,$sql_w);

        for($n=0;$n<6;$n++)
        {
            if(mysqli_query($conn,$Arraysql[$n]))
			 {
				// echo "1";
				 
			 }
			 else{
				 echo "Error" . $n . "<br>" . mysqli_error($conn);
				
			 }

        }
        echo "1";
    }



mysqli_close($conn);


   }    
?>