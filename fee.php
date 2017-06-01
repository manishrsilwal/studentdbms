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
	<title>Fee Structure</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<a href="accounthome.php" class="btn btn-primary" role="button" target="_top">Account Admin Panel</a>

<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top">Logout</a>

<div class="container">
<h3 style="text-align: center; margin-bottom: 30px;">Monthly Fees of Classes</h3>
<?php
$qry="SELECT SN, gradename, feemonth FROM fee";
$result = $db->query($qry);


if ($result->num_rows > 0) {
     // output data of each row
         echo "<center><table><tr><th>S.N.</th><th>Grade</th><th>Monthly Fee</th></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>". $row["SN"]. "</td><td>" .$row["gradename"]."</td><td>"."Rs. ".$row["feemonth"]."</td></tr>";
     }
        echo "</table></center>";
} else {
     echo "0 results";
}
?>

    
</div>