<?php
session_start();
include("db_conection.php");
if($_SESSION['mode']=="EMPLOYER")
{
    echo "<script>";
		 echo "alert('PAGE NOT ALLOWED    LOGIN AGAIN');";
		 


		  echo "window.location.href = 'login.html'";
    echo "</script>";

}

if ($_SERVER["REQUEST_METHOD"]=="POST")

 {
  // receive all input values from the form
  $name = $_POST['name'];
  $comp = $_POST['comp'];
  $info= $_POST['info'];
  $Dob = $_POST['DOB'];
 
}
$id=$_SESSION['username'];

$q="SELECT * FROM internship_reg WHERE id_stu='$id'";

$w=mysqli_query($con,$q);
$count=0;
	while($row=mysqli_fetch_row($w))
{
	$count++;
  	
}
if($count>=1)
	{
		 echo "<script>";
		 echo "alert('ALREADY APPLIED');";
		 echo "window.location.href = 'dashboard_stu.php'";
		 echo "</script>";
		 
		 
	}
else
{
	$q="SELECT * FROM internship_post WHERE id='$name' AND com_name='$comp' AND apply_by='$Dob'";
	$w=mysqli_query($con,$q);
	$count1=0;
	while($row=mysqli_fetch_row($w))
	{
		$count1++;
	}
	if($count1==0)
	{
		 echo "<script>";
		 echo "alert('CHECK THE INTERSHIP ID AGAIN');";
		 echo "window.location.href = 'dashboard_stu.php'";
		 echo "</script>";
	}
	else
	{
		
	
  	$query = "INSERT INTO internship_reg (id,com_name, dob, id_stu, stu_info) 
  			  VALUES ('$name', '$comp', '$Dob','$id', '$info')";
  	mysqli_query($con, $query);

  	
  	header('location: dashboard_stu.php');
}

}


?>