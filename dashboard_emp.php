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
    
    <h1 style="color: white">Internshala</h1>
    <div style="float: right; margin-right: 80px;" >

<form action="logout.php">
      <button type="submit" class="btn btn-primary btn-danger" style="text-align:center; border-right: 300px; " name="reg_user" >Logout</button>
    
</form>
</div>
    <h1 style="float:right; margin-right:20px">HEY, 
  <?php
include("db_conection.php");
echo $_SESSION['username'];
?></h1>
  

</header>
</div>

<form action="dashboard_emp_post.php"  >

      <button type="submit" class="btn"  name="reg_user" >Register New</button>

</form>

<form action="app_emp.php">

      <button type="submit" class="btn" name="reg_user" >View Recieved Application</button>

</form>

<div class="content">
    <div class="ranking">
        <h2 class="ranking-title">Intership's Posted</h2>
        <table class="table-ranking">
            <tr>
                <th class="table-ranking-head">Company Name</th>
                <th class="table-ranking-head">Your Id</th>
                <th class="table-ranking-head">Descriptiom</th>
                <th class="table-ranking-head">Apply By</th>

            </tr>
<?php


include("db_conection.php");

$id = $_SESSION['username'];

$q="SELECT * from internship_post where id_emp='$id'";
$w=mysqli_query($con,$q);
if ($w->num_rows > 0) {
    // output data of each row
    while($row = $w->fetch_assoc()) {
        echo '<tr class="table-ranking-content">
        		<td>'. $row["com_name"].'</td>
        		<td>'. $row["id_emp"].'</td>
        		<td>'. $row["description"].'</td>
        		<td>'. $row["apply_by"].'</td> 
        	</tr>';
    }
} 
?>



</body></html>

