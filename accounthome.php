<?php
include("loggedin.php");
include ("loginaccadmin.php");
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
</style>
	<title>Student Information System::Account Admin Panel</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top">Logout</a>

<div class="container" style="margin-top: 100px">

<h2 align="center"><font size="16">W</font>elcome <font size="16">T</font>o <font size="16">A</font>ccount <font size="16">S</font>ection</h2>

<br><br><br>
<h3>What do you want to do?</h3>

<div class="row">
	<div class="col-md-4">
		<h4><a href="fee.php"><span class="glyphicon glyphicon-th-list" style="size: 12px"></span> View Monthly Fees</a></h4>
	</div>

	<div class="col-md-4">
		<h4><a href="accountupdate.php"><span class="glyphicon glyphicon-edit" style="size: 12px"></span> Update Account Status</a></h4>
	</div>

	<div class="col-md-4">
		<h4><a href="accountview.php"><span class="glyphicon glyphicon-th-list" style="size: 12px"></span> View Account Status</a></h4>
	</div>
</div>

</body>
</html>