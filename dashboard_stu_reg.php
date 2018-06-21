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


?>

<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>


  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="assets/style.css" />
  <title></title>
</head>
<body>

<div class="row">
  <header class="main-header">
    
    <h1 style="color: white">Internshala</h1>
    <div style="float: right; margin-right: 80px;" >

<form action="logout.php">
      <button type="submit" class="btn btn-primary btn-danger" style="text-align:center;" name="reg_user" >Logout</button>
    
</form>
</div>
    <h1 style="float:right; margin-right:20px">HEY, 
  <?php
include("db_conection.php");
echo $_SESSION['username'];
?></h1>
  
</header>
</div>
<div class="container">
<div class="row">
        <div class="col-sm-3 "></div>
        <div class="col-sm-6">
            <center>
        
    </center>
            <br>
            

           <form method="POST" action="intern_register.php" style=" padding:30px; margin-top: 20px; margin-bottom: 50px; border-radius: 15px; background: grey;">
           	  
                

<div class="input-group">
  	  <label>Internship Id</label>
  	  <input type="text" name="name" placeholder="ID" required>
  	</div>
  	<div class="input-group ">
  	  <label>Company Name</label>
  	  <input type="text" name="comp" placeholder="Name" required>
  	</div>
  	<div class="input-group">
  		<label>Apply By</label>
                        <input type="text"  name="DOB" placeholder="YYYY-MM-DD" value="" required>
                    </div>
                    <div class="input-group ">
  	  <label>Your Information</label>
  	  <input type="text" name="info" placeholder="Info" required>
  	</div>
  	<br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user" ">Register</button>
  	</div>
</form>




</body>
</html>


