<?php
include("loggedin.php");
include ("loginexamadmin.php");
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
	<title>Term for Marksheet</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<a href="examhome.php" class="btn btn-primary" role="button" target="_top">Exam Admin Panel</a>

<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top">Logout</a>

<div class="container">
<h2 style="text-align: center;"><font size="16">E</font>xam <font size="16">M</font>ark <font size="16">S</font>heet</h2>
    <h3 style="margin-top: 25px;">Select the terminal examination:</h3>

<div class="row">
  <div class="col-lg-4">
  <font size="72"><a href="marksheeti.php">First Term</a></font>
  </div>

  <div class="col-lg-4">
  <font size="72"><a href="#">Second Term</a></font>
  </div>

  <div class="col-lg-4">
  <font size="72"><a href="#">Third Term</a></font>
  </div>
</div>

</div>