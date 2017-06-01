<?php
include ("loginexamadmin.php");
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
	<title>Grade Selection for Marksheet</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<a href="termsel.php" class="btn btn-primary" role="button" target="_top">Term Selection</a>

<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top">Logout</a>

<div class="container">
<h2 style="text-align: center;"><font size="16">E</font>xam <font size="16">M</font>ark <font size="16">S</font>heet</h2>
    <h3 style="margin-top: 50px; text-align: center;">First Terminal Exam Performance in UKG Class:</h3>

<?php
include_once('control.php');

$qry="SELECT *,(marks1.English + marks1.Nepali + marks1.Science + marks1.Math) AS total FROM studentinfo INNER JOIN marks1 ON studentinfo.student_id = marks1.student_id WHERE studentinfo.adgrade='UKG'";


$result = mysqli_query($db,$qry);


if ($result->num_rows> 0) {
     // output data of each row
         echo "<center><table><tr><th>Student ID</th><th>Name</th><th>English</th><th>Nepali</th><th>Science</th><th>Mathematics</th><th>Total</th></tr>";
     while($row =  $result->fetch_assoc()) {
        echo "<tr><td>". $row["student_id"]. "</td><td>" .$row["fname"]. " " . $row["mname"]. " " . $row["lname"] . "</td><td>".$row["English"]. "</td><td>".$row["Nepali"]. "</td><td>".$row["Science"]. "</td><td>".$row["Math"]."</td><td>".$row['total']."</td></tr>";
     }
        echo "</table></center>";
} else {
     echo "0 results";
}
?>
</div>