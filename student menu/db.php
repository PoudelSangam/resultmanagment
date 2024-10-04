<?php

$databaseHost = 'localhost';
$databaseName = 'resultmanagement'; 
$databaseUsername = 'root'; 
$databasePassword = '';  

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, "$databaseName");
 if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
   
   
	 
?>