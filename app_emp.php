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

    <head>
        <meta charset="utf-8">
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

       


        <div class="content">
            <div class="ranking">
                <h2 class="ranking-title">application recievd</h2>
                <table class="table-ranking">
                    <tr>
                        <th class="table-ranking-head">company Name</th>
                        <th class="table-ranking-head">emp id</th>
                        <th class="table-ranking-head">Studennt id</th>
                        <th class="table-ranking-head">Studennt infp</th>
                        <th class="table-ranking-head">apply by</th>

                    </tr>
			</table>
                    <?php

include("db_conection.php");

$id = $_SESSION['username'];

$q="SELECT e.com_name,e.dob,e.stu_info, e.id_stu,p.id_emp FROM internship_reg e JOIN internship_post p WHERE p.id_emp='$id' AND p.com_name=e.com_name";
$w=mysqli_query($con,$q);
    // output data of each row
if(!$w){
	
		die("Connection failed:" . $con->connect_error);
		
}

    while($row = mysqli_fetch_array($w)) {
        echo '<tr class="table-ranking-content">
        		<td>'. $row["com_name"].'</td>
        		<td>'. $row["id_emp"].'</td>
        		<td>'. $row["id_stu"].'</td>
        		<td>'. $row["stu_info"].'</td>
        		<td>'. $row["dob"].'</td> 
        	</tr>';
    }

?>
 <form action="dashboard_emp_post.php">
            <div class="input-group" style="float:right;">
                <button type="submit" class="btn" name="reg_user">register new</button>
            </div>
        </form>

    </body>

    </html>
