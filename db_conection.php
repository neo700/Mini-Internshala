<?php

$server="localhost";
$user="root";
$pass="";
$con=mysqli_connect($server,$user,$pass);
if(!$con){
	
		die("Connection failed:" . $con->connect_error);
		
}

$db=mysqli_select_db($con,"assignment");
if(!$db){
	die("Connection failed: " . $db->connect_error);
			
}

?>