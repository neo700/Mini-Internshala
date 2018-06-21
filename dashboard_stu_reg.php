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
    
	  <h1>Internshala</h1>
	  <h2 style="text-align: right; margin-right:5px;">HEY, 
  <?php
include("db_conection.php");
echo $_SESSION['username'];
?></h2>
  </div>
</header>
<div class="row">
        <div class="col-sm-3 "></div>
        <div class="col-sm-6" >
            <center>
        
    </center>
            <br>
            

           
            

           <form method="POST" action="intern_register.php" style=" padding:30px; margin-top: 200px; border-radius: 15px; background: grey;">
           	  
                
<center><h2>FORM</h2></center>
		   <div>
  	  <!-- <label></label> -->
  	  <input type="text" class="gap form-control" name="name" placeholder="Internship ID" required>
  	</div>
<div >
  	  
  	  <input type="text" class="gap form-control" name="comp" placeholder="Company Name" required>
  	</div>
  	<div>
  	  <!-- <label></label> -->
  	  <input type="text" class="gap form-control" name="description" placeholder="Job Description" required>
  	</div>
  	<div>
  		<!-- <label>Apply By</label> -->
                        <input type="text" class="gap form-control"  name="DOB" placeholder="APPLY BY:YYYY-MM-DD" value="" required>
                    </div>
  	
  	<div >
  	  <button class="gap form-control" type="submit" class="btn" name="reg_user" ">Register</button>
  	</div>
</form>


<form action="logout.php">
<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user" >Logout</button>
  	</div>
</form>
<div class="col-sm-3 "></div>
</body>
</html>


