<?php

$server="us-cdbr-iron-east-04.cleardb.net";
$user="bb1b721b07451c";
$pass="d3441686";
$con=mysqli_connect($server,$user,$pass);
if(!$con){
	
		die("Connection failed:" . $con->connect_error);
		
}

$db=mysqli_select_db($con,"heroku_0b7857f57f33cec");
if(!$db){
	die("Connection failed: " . $db->connect_error);
			
}

?>
