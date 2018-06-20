<?php

$server="localhost";
$user="root";
$pass="";
$con=mysqli_connect($server,$user,$pass);
if(!$con){
	
		die("Connection failed:" . $con->connect_error);
		
}

$check=mysqli_select_db($con,"assignment");
if(!$check){
	die("Connection failed: " . $check->connect_error);
			
}
$mode = NULL;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$mode=$_POST["login"];
	$name=$_POST["username"];
	$passw=$_POST["password"];
	$dob=$_POST["DOB"];
	$mode=test_input($mode);
	$name=test_input($name);
	$passw=test_input($passw);
	
}


function test_input($str){
	$str=trim($str);
	$str=stripslashes($str);
	$str=htmlspecialchars($str);
	return $str;
}

if($mode == "STUDENT")
{	

	$count=0;
	$q="SELECT * from student where pass_stu='$passw' AND id_stu='$name' AND dob='$dob'";
	$w=mysqli_query($con,$q);

	while($row=mysqli_fetch_row($w))
{
	$count++;
  	header('Location: dasboard_stu.html');
}
	if($count==0)
	{
		 echo "<script>";
		 echo "alert('INVALID CREDENTIALS');";
		 echo "window.location.href = 'index.html'";
		 echo "</script>";
		 
		 
	}
}




if($mode=="EMPLOYER")
{
	$count=0;
	$q="SELECT * from employer where password_emp='$passw' AND id_emp='$name'";
	$w=mysqli_query($con,$q);
	while($row=mysqli_fetch_row($w))
{
	$count++;
  header('Location: dashboard_emp.html');
}
if($count==0)
	{
		echo "<script>";
		 echo "alert('INVALID CREDENTIALS');";
		 echo "window.location.href = 'index.html'";
		 echo "</script>";
		 
	}
}


?>