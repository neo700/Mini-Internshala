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

<header>
  <div class="row">
  <h2>Internshala     </h2>

<?php

include("db_conection.php");


echo $_SESSION['username'];

?>

</div>
</header>
<div class="row">
        <div class="col-sm-6 "></div>
        <div class="col-sm-4" style=" padding:20px; margin-top: 200px; border-radius: 10px;" >
            <center>
        
    </center>
            <br>
            

           <form method="POST" action="intern_post.php">
           	  
                

<div class="input-group">
  	  <label>Company Name</label>
  	  <input type="text" name="name" placeholder="Name" required>
  	</div>
  	<div class="input-group ">
  	  <label>Job Description</label>
  	  <input type="text" name="description" placeholder="Name" required>
  	</div>
  	<div class="input-group">
  		<label>Apply By</label>
                        <input type="text"  name="DOB" placeholder="YYYY-MM-DD" value="" required>
                    </div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user" ">Register</button>
  	</div>
</form>


<form action="logout.php">
<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user" >Logout</button>
  	</div>
</form>

</body>
</html>


