<div style="margin-top: 4%;">
	 <table id="student">
        	<tr>
        		<th>Student Name</th>
        		<th style="margin-left: 20px;">Student Phonenumber</th>
        		<th>Email</th>
        		<th>Roll_Number</th>
        		<th>status</th>
        		
        	</tr>
        	<?php
        		include_once 'db.php';
                $class=$_POST['class'];

        		$sql = "SELECT Sfirstname, Slastname, Sphonenumber, Semail, Sroll, Sclass FROM sregister where Sclass='$class'";
        		$result= $conn-> query($sql);

        		if($result->num_rows>0)
        		{
        			while ($row =  $result->fetch_assoc()) {
		        		$data= "<tr>
				        		<td>".$row["Sfirstname"]."&nbsp;".$row["Slastname"]."</td>
				        		<td >".$row["Sphonenumber"]."</td>
				        		<td>".$row["Semail"]."</td>
				        		<td>".$row["Sroll"]."</td>
				        		<td><button>verify</button>&nbsp;&nbsp;&nbsp;<button>unverify</button></td>
				        		
		        			</tr>";
		        			echo $data;
        			}
        		}
                else{
                    $data="No Record Found";
                }

                    $data.="</table>";


        		$conn->close();

        	?>      

</div>