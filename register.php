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




if ($_SERVER["REQUEST_METHOD"]=="POST")

 {
  // receive all input values from the form
 	$mode=$_POST["login"];
  $username =  $_POST['username'];
  $name = $_POST['name'];
  $Dob = $_POST['DOB'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

 
  if ($password_1 != $password_2) {
	echo "<script>";
		 echo "alert('Password Do Not Match');";
		 echo "window.location.href = 'index.html'";
		 echo "</script>";
  }
}


if($mode == "STUDENT")
{

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $query = mysqli_query($con,"SELECT id_stu FROM student WHERE id_stu='$username' ");
  if (mysqli_num_rows($query) != 0)
  {
      echo "<script>";
		 echo "alert('USERNAME Already Exist');";
		 echo "window.location.href = 'index.html'";
		 echo "</script>";
      
  
  }
  else
  {

	$password = md5($password_1); //encrypt the password before saving in the database

  	$query = "INSERT INTO student (name_stu, pass_stu, id_stu, dob) 
  			  VALUES ('$name', '$password', '$username','$Dob')";
  	mysqli_query($con, $query);
 
  	header('location: dasboard_stu.html');

}
}

if($mode == "EMPLOYER")
{

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $query = mysqli_query($con,"SELECT id_emp FROM employer WHERE id_emp='$username' ");
  if (mysqli_num_rows($query) != 0)
  {
      echo "<script>";
		 echo "alert('USERNAME Already Exist');";
		 echo "window.location.href = 'index.html'";
		 echo "</script>";
      
  
  }
  else
  {

	$password = md5($password_1); //encrypt the password before saving in the database

  	$query = "INSERT INTO employer (name, password_emp, id_emp) 
  			  VALUES ('$name', '$password', '$username')";
  	mysqli_query($con, $query);
 
  	header('location: dasboard_stu.html');

}
}



?>
