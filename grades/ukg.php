<?php
include("../loggedin.php");
include ("../loginadmin.php");
include_once('../control.php');
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
<link id="theme-style" rel="stylesheet" href="../css/style.css">

<script src="../bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script  type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<style>
    @font-face{
    	font-family: "Analecta";
    	src: url(../font/Analecta.otf) format("truetype");
    }

    table, th, td {
     border: 1px solid black;
     text-align: center;
     padding: 5px;
	}
</style>
	<title>Grade UKG</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<a href="../home.php" class="btn btn-primary" role="button">Grade List</a>
<a href="../logout.php" class="btn btn-primary pull-right" role="button"  target="_top">Logout</a>


<div class="container">
<h3 style="text-align: center; margin-bottom: 30px;">Showing all Students of UKG:</h3>
<?php
$qry="SELECT * FROM studentinfo INNER JOIN parents ON studentinfo.student_id = parents.student_id WHERE studentinfo.adgrade='UKG'";
$result = $db->query($qry);


if ($result->num_rows > 0) {
     // output data of each row
	      echo "<center><table><tr><th>Name</th><th>Gender</th><th>Roll Number</th><th>Address</th><th>Parents'/Guardians' Name</th><th>Contact Number</th></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>". $row["fname"]. " " . $row["mname"]. " " . $row["lname"] . "</td><td>" .$row["gender"]."</td><td>".$row["rollno"]."</td><td>".$row["address_per_street"]."-".$row["address_per_ward"].", ".$row["address_per_vdcmun"].", ".$row["address_per_district"]." , ".$row["address_per_zone"]." , ".$row["address_per_country"]."</td><td>". $row["gfname"]. " " . $row["gmname"]. " " . $row["glname"] . "</td><td>" .$row["phnum"]."</td></tr>";
     }
     	echo "</table></center>";
} else {
     echo "0 results";
}
?>
</body>
</html>