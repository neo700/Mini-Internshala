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
	  <h1 style="text-align: right; margin-right:5px;">HEY, 
  <?php
include("db_conection.php");
echo $_SESSION['username'];
?></h1>
  </div>
</header>

<br><br>
<br><br>

<div class="content" >
    <div class="ranking">
	    <center>
        <h2 class="ranking-title">Intership applied</h2>
        <table class="table-ranking">
            <tr>
            	<th class="table-ranking-head">Internship id</th>
                <th class="table-ranking-head">company Name</th>
                <th class="table-ranking-head">dob</th>
                <th class="table-ranking-head">info</th>
            </tr>
	</table>
	    </center>
<?php


include("db_conection.php");

$id=$_SESSION['username'];


$q="SELECT id,com_name, dob, id_stu, stu_info FROM internship_reg WHERE id_stu='$id'";
$w=mysqli_query($con,$q);
if ($w->num_rows > 0) {
    // output data of each row
    while($row = $w->fetch_assoc()) {
        echo '<tr class="table-ranking-content">
        		<td>'. $row["id"].'</td>
        		<td>'. $row["com_name"].'</td>
        		<td>'. $row["dob"].'</td>
        		<td>'. $row["stu_info"].'</td>
        	</tr>';
    }
}

?>
		<br>
	    <div class="input-group" style=" float: right;">
<form action="dashboard_stu_reg.php">

  	  <button type="submit" class="btn" name="reg_user" >register new</button>
  	
</form>
<br>    
</div>
	    <div style="margin: auto; float: right;" >

<form action="logout.php">
  	  <button type="submit" class="btn btn-primary btn-danger" style="text-align: right;" name="reg_user" >Logout</button>
  	
</form>
</div>
</body></html>

