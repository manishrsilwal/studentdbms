<?php
include("loggedin.php");
include ("loginaccadmin.php");
include_once('control.php');?>

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
	<title>Account View</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<a href="accounthome.php" class="btn btn-primary" role="button" target="_top">Account Admin Panel</a>

<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top">Logout</a>

<div class="container">
<h2 style="text-align: center;"><font size="16">A</font>ccount <font size="16">S</font>tatus <font size="16">O</font>f <font size="16">S</font>tudents</h2>
    <h3 style="margin-top: 25px;">Select the grade to view the infromation:</h3>

<div class="row">
  <div class="col-lg-3">
  <font size="72"><a href="accnursery.php">Nursery</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="acclkg.php">LKG</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="accukg.php">UKG</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="acci.php">I</a></font>
  </div>

  <div class="col-lg-3">
  <font size="72"><a href="accii.php">II</a></font>
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

</div>