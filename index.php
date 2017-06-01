<?php
  if(isset($_SESSION['username'])){
   redirect();
  }
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
	<title>Welcome to Student Information System</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<div class="container" style="margin-top: 100px">

<h2 align="center"><font size="16">W</font>elcome <font size="16">T</font>o <font size="16">S</font>tudent <font size="16">I</font>nformation <font size="16">S</font>ystem</h2>

<center>
<div class="well" style="width: 500px; margin-top: 75px; background: white; border-color: white" align="center">
    <div class="top">
        <h4>Select your Role:</h4>
    </div>
    <br>
    <div class="row">

    <div class="col-sm-4">
    <a href="admin.php" class="btn btn-primary" role="button">Administrator</a>
    </div> 

    <div class="col-sm-4">
    <a href="accountadmin.php" class="btn btn-primary" role="button">Account Admin</a>
    </div> 

    <div class="col-sm-4">
    <a href="examadmin.php" class="btn btn-primary" role="button">Exam Admin</a>   
    </div> 
    </div>
</div>
</center>
<h5 style="text-align: center; margin-top: 150px;">&copy Copyright 2017 | Pratit Raj Giri and Manish Raj Silwal</h5>
</div>

</body>
</html>