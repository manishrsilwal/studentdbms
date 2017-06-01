<?php
  include("loggedin.php");
  include ("loginaccadmin.php");

include_once('control.php');
 
 if ($_SERVER['REQUEST_METHOD'] == "POST")
 {	
 	$student_id = $_POST['student_id'];
	$paid = $_POST['paid'];
    $paid_date = $_POST['paid_date'];
    $dueleft = $_POST['dueleft'];

$qry="INSERT INTO `payment_status` (`student_id`, `paid`, `paid_date`, `dueleft`) VALUES ('$student_id', '$paid', 'paid_date','dueleft') ON DUPLICATE KEY UPDATE paid = VALUES(paid), paid_date = VALUES(paid_date), dueleft = VALUES(dueleft)";

if(mysqli_query($db,$qry)){
		echo 'Data Inserted Successfully. Go Back to <a href="accounthome.php">Account Admin Panel</a>';
	}else{
		echo 'Data Not inserted. Go Back to <a href="accounthome.php">Account Admin Panel</a>';
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
	<title>Update Account Status</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>
<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top" style="margin-top: 10px;">Logout</a>
<a href="accounthome.php" class="btn btn-primary pull-left" role="button"  target="_top">Account Admin Panel</a>

<div class="container" style="margin-top: 75px">

<h2 align="center"><font size="16">U</font>pdate <font size="16">S</font>tudent <font size="16">A</font>ccount</h2>

<div class="well" style="margin-top: 50px;">
<div class="top" align="center"><h3>Form to Update Account Status</h3><h5 style="color: red;"><i>(You cannot leave * marked fileds empty)</i></h5></div>
<form action="#" method="POST">
<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
         <label for="student_id"><h5>Registration Number:*</h5></label>
         <input id="student_id" class="form-control" type="text" name="student_id" placeholder="Registration Number" class="validate" required>
        </div>
    </div>

    <div class="col-lg-6">
		<div class="form-group">
         <label for="paid"><h5>Amount Paid:*</h5></label>
         <input id="paid" class="form-control" type="number" name="paid" placeholder="Paid Amount" class="validate" required>
        </div>
    </div>

    <div class="col-lg-6">
		<div class="form-group">
         <label for="paid_date"><h5>Paid Date:*</h5></label>
         <input id="paid_date" class="form-control" type="date" name="paid_date" placeholder="Paid Date" class="validate" required>
        </div>
    </div>

    <div class="col-lg-6">
		<div class="form-group">
         <label for="dueleft"><h5>Left Dues:*</h5></label>
         <input id="dueleft" class="form-control" type="number" name="dueleft" placeholder="Left Dues" class="validate">
        </div>
    </div>
</div>
	<button type="submit" class="center-block btn btn-primary right" value="SUBMIT">Update</button>   
</form>
</div>
</div>