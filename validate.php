<?php

session_start();
include("db_conection.php");
$mode = NULL;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$mode=$_POST["login"];
	$name=$_POST["username"];
	$passw=$_POST["password"];
	$dob=$_POST["DOB"];
	
}




if($mode == "STUDENT")
{	
	
	$count=0;
	$q="SELECT * FROM student WHERE pass_stu='$passw' AND id_stu='$name' AND dob='$dob'";
	$w=mysqli_query($con,$q);

	while($row=mysqli_fetch_row($w))
{
	$count++;


	$_SESSION['username']=$name;
	$_SESSION['mode']=$mode;
  	header('Location: dashboard_stu.php');
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
	$q="SELECT * FROM employer WHERE password_emp='$passw' AND id_emp='$name'";
	$w=mysqli_query($con,$q);
	while($row=mysqli_fetch_row($w))
{
	$count++;
	

	$_SESSION['username']=$name;
	$_SESSION['mode']=$mode;
  header('Location: dashboard_emp.php');
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