<?php
  include("loggedin.php");
  include ("loginadmin.php");

include_once('control.php');
 
 if ($_SERVER['REQUEST_METHOD'] == "POST")
 {	
 	$username = $_POST['username'];
	$password = $_POST['password'];

$qry="INSERT INTO `login` (`username`, `password`, `role`) VALUES ('$username', '$password', 'examadmin')";

if(mysqli_query($db,$qry)){
		echo 'Data Inserted Successfully. Go Back to <a href="adminhome.php">Admin Panel</a>';
	}else{
		echo 'Data Not inserted. Go Back to <a href="adminhome.php">Admin Panel</a>';
	}
}
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
</style>
	<title>Student Information System::Register New Exam Admin</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>
<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top" style="margin-top: 10px;">Logout</a>
<a href="adminhome.php" class="btn btn-primary pull-left" role="button"  target="_top">Admin Panel</a>

<div class="container" style="margin-top: 75px">

<h2 align="center"><font size="16">R</font>egister <font size="16">N</font>ew <font size="16">A</font>dministrator</h2>

<div class="well" style="margin-top: 50px;">
<div class="top" align="center"><h3>Add New Exam Administrator</h3><h5 style="color: red;"><i>(You cannot leave * marked fileds empty)</i></h5></div>
<form action="#" method="POST">
<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
         <label for="username"><h5>Exam Admin's Username:*</h5></label>
         <input id="username" class="form-control" type="text" name="username" placeholder="User Name" class="validate" required>
        </div>
    </div>

    <div class="col-lg-6">
		<div class="form-group">
         <label for="password"><h5>Desired Password:*</h5></label>
         <input id="password" class="form-control" type="password" name="password" placeholder="User Name" class="validate" required>
        </div>
	</div>
	</div>
	<button type="submit" class="center-block btn btn-primary right" value="SUBMIT">Register</button>   
</form>
</div>