<div style="margin-top: 4%;">
	 <table id="student">
        	<tr>
        		<th>Student Name</th>
        		<th style="margin-left: 20px;">Student Phonenumber</th>
        		<th>Email</th>
        		<th>Class</th>
        		<th>Roll_Number</th>
        		
        	</tr>
        	<?php
        	
        	
        	
        		include_once 'db.php';
                $class=$_POST['class'];

        		$sql = "SELECT Sfirstname, Slastname, Sphonenumber, Semail, Sclass, Sroll FROM sregister where Sclass='$class'";
        		$result= $conn-> query($sql);

        		if($result->num_rows>0)
        		{
        			while ($row =  $result->fetch_assoc()) {
		        		$data= "<tr>
				        		<td>".$row["Sfirstname"]."&nbsp;".$row["Slastname"]."</td>
				        		<td >".$row["Sphonenumber"]."</td>
				        		<td>".$row["Semail"]."</td>
				        		<td>".$row["Sclass"]."</td>
				        		<td>".$row["Sroll"]."</td>
		        			</tr>";
		        			echo $data;
		        			
        			}
        		}
                else{
                    $data="No Record Found";
                }

               

        		$conn->close();

        	?>   
        	</table>

</div>