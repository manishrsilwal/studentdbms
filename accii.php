<?php
include("loggedin.php");
include ("loginaccadmin.php");
include_once('control.php');
?>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
<link id="theme-style" rel="stylesheet" href="css/style.css">

<script src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script  type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<style>
    @font-face{
    	font-family: "Analecta";
    	src: url(font/Analecta.otf) format("truetype");
    }

    table, th, td {
     border: 1px solid black;
     text-align: center;
     padding: 5px;
	}
</style>
	<title>Account Status of Grade II</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<a href="accountview.php" class="btn btn-primary" role="button" target="_top">Class Menu</a>

<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top">Logout</a>

<div class="container">
<h2 style="text-align: center;"><font size="16">A</font>ccount <font size="16">S</font>tatus <font size="16">O</font>f <font size="16">G</font>rade <font size="16">II</font></h2>

<?php
$qry="SELECT * FROM studentinfo INNER JOIN payment_status ON studentinfo.student_id = payment_status.student_id WHERE studentinfo.adgrade=2 ";


$result = mysqli_query($db,$qry);


if ($result->num_rows> 0) {
     // output data of each row
         echo "<center><table><tr><th>Student ID</th><th>Name</th><th>Paid Fee</th><th>Paid Date</th><th>Due Left</th></tr>";
     while($row =  $result->fetch_assoc()) {
         echo "<tr><td>". $row["student_id"]. "</td><td>" .$row["fname"]. " " . $row["mname"]. " " . $row["lname"] . "</td><td>"."Rs. ".$row["paid"]. "</td><td>".$row["paid_date"]. "</td><td>"."Rs. ".$row["dueleft"]."</td></tr>";
     }
        echo "</table></center>";
} else {
     echo "0 results";
}
?>
