<?php
session_start();
include("db_conection.php");
if($_SESSION['mode']=="STUDENT")
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
  
 &nbsp<h2>Internshala</h2>

<?php

include("db_conection.php");

echo "Hello, ";
echo $_SESSION['username'];

?>

</div>
</header>
<div class="row">
        <div class="col-sm-3 "></div>
        <div class="col-sm-6"  >
            <center>
        
    </center>
            <br>
            

           <form method="POST" action="intern_post.php" style=" padding:30px; margin-top: 200px; border-radius: 15px; background: grey;">
           	  
                

<div class="gap form-control">
  	  
  	  <input type="text" name="name" placeholder="Company Name" required>
  	</div>
  	<div class="gap form-control">
  	  <!-- <label></label> -->
  	  <input type="text" name="description" placeholder="Job Description" required>
  	</div>
  	<div class="gap form-control">
  		<!-- <label>Apply By</label> -->
                        <input type="text"  name="DOB" placeholder="APPLY BY:YYYY-MM-DD" value="" required>
                    </div>
  	
  	<div class="gap form-control">
  	  <button type="submit" class="btn" name="reg_user" ">Register</button>
  	</div>
</form>


<form action="logout.php">
<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user" >Logout</button>
  	</div>
</form>
<div class="col-sm-3"></div>
</body>
</html>


