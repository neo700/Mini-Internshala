<?php

session_start();
include("db_conection.php");


if ($_SERVER["REQUEST_METHOD"]=="POST")

 {
  // receive all input values from the form
  $name = $_POST['name'];
  $description = $_POST['description'];
  $Dob = $_POST['DOB'];
 
}




$id=$_SESSION['username'];




  	$query = "INSERT INTO internship_post (com_name, id_emp, description, apply_by) 
  			  VALUES ('$name', '$id', '$description','$Dob')";
  	mysqli_query($con, $query);
  	header('location: dashboard_emp.php');





?>