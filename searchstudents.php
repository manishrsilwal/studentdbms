<?php
include("loggedin.php");
include ("loginadmin.php");
include_once('control.php');
?>

<!DOCTYPE html>
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

	input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    padding: 12px 20px 12px 10px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
	}

	input[type=text]:focus {
	    width: 100%;
	}
</style>
	<title>Search Students</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<a href="adminhome.php" class="btn btn-primary" role="button">Admin Panel</a>
<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top">Logout</a>


<div class="container">
<h3 style="text-align: center; margin-bottom: 30px;">Search Students:</h3>

<form action="" method="post">  
<h4>Search using First or Last Name:</h4><input type="text" name="term" placeholder="Search..."><br>  
</form>


<div id="result" style="margin-top: 40px;">
<?php
if (!empty($_REQUEST['term'])) {

$term = $_REQUEST['term'];     

$qry = "SELECT fname, mname, lname, gender, adgrade, rollno, address_per_street, address_per_ward, address_per_vdcmun, address_per_district, address_per_zone, address_per_country FROM studentinfo WHERE fname LIKE '%".$term."%' OR lname LIKE '%".$term."%'"; 
$result = $db-> query($qry); 

if ($result->num_rows > 0) {
     // output data of each row
         echo "<center><table><tr><th>Name</th><th>Gender</th><th>Grade</th><th>Roll Number</th><th>Address</th></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>". $row["fname"]. " " . $row["mname"]. " " . $row["lname"] . "</td><td>" .$row["gender"]. "</td><td>" .$row["adgrade"]."</td><td>".$row["rollno"]."</td><td>".$row["address_per_street"]."-".$row["address_per_ward"].", ".$row["address_per_vdcmun"].", ".$row["address_per_district"]." , ".$row["address_per_zone"]." , ".$row["address_per_country"]."</td></tr>";
     }
        echo "</table></center>";
} else {
     echo "No results";
}}  
?>
</div>