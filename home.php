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
</style>
	<title>Grade List</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>
<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top">Logout</a>

<a href="adminhome.php" class="btn btn-primary pull-left" role="button"  target="_top">Admin Panel</a>


<div class="container" style="margin-top: 100px">
<h2><font size="16">S</font>tudent <font size="16">I</font>nformation <font size="16">S</font>ystem</h2>
<br>
<h3>Select the grade to view the infromation:</h3>

<div class="row">
  <div class="col-lg-3">
  <font size="72"><a href="./grades/nursery.php">Nursery</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="./grades/lkg.php">LKG</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="./grades/ukg.php">UKG</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="./grades/i.php">I</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="./grades/ii.php">II</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="#">III</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="#">IV</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="#">V</a></font>
  </div>
</div>

<div class="row">
  	<div class="col-lg-3">
	<font size="72"><a href="#">VI</a></font>
	</div>

  	<div class="col-lg-3">
	<font size="72"><a href="#">VII</a></font>
	</div>

  	<div class="col-lg-3">
	<font size="72"><a href="#">VIII</a></font>
  	</div>

  	<div class="col-lg-3">
	<font size="72"><a href="#">IX</a></font>
  	</div>

  	<div class="col-lg-3">
	<font size="72"><a href="#">X</a></font>
	</div>
</div>

</body>
</html>