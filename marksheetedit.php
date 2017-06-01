<?php
  include("loggedin.php");
  include ("loginexamadmin.php");

include_once('control.php');
 
 if ($_SERVER['REQUEST_METHOD'] == "POST")
 {  
    $student_id = $_POST['student_id'];

    $English = $_POST['English'];
    $Nepali = $_POST['Nepali'];
    $Science = $_POST['Science'];
    $Math = $_POST['Math'];
    $Social = $_POST['Social'];
    $Computer = $_POST['Computer'];
    
$qry="INSERT INTO `marks1` (`student_id`, `English`, `Nepali`, `Science`, `Math`, `Social`, `Computer`) VALUES ('$student_id', '$English', '$Nepali', '$Science', '$Math', '$Social', '$Computer')";


if(mysqli_query($db,$qry)){
        echo 'Data Inserted Successfully. Go Back to <a href="examhome.php">Exam Admin Panel</a>';
    }else{
        echo 'Data Not inserted. Go Back to <a href="examhome.php">Exam Admin Panel</a>';
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

    table, th, td {
     border: 1px solid black;
     text-align: center;
     padding: 5px;
	}
</style>
	<title>Add a Marksheet</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<a href="examhome.php" class="btn btn-primary" role="button" target="_top">Exam Admin Panel</a>

<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top">Logout</a>

<div class="container">
<h2 style="text-align: center;"><font size="16">E</font>xam <font size="16">M</font>ark <font size="16">S</font>heet</h2>

<div class="well" style="margin-top: 50px;">
<div class="top" align="center"><h3>Marksheet Addition</h3><h5 style="color: red;"><i>(You cannot leave * marked fileds empty)</i></h5></div>
<form action="#" method="POST">
<div class="row">
        <div class="col-lg-12">
        <div class="form-group">
         <label for="student_id"><h5>Registration Number:*</h5></label>
         <input id="student_id" class="form-control" type="text" name="student_id" placeholder="Registration Number" class="validate" required>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="form-group">
         <label for="English"><h5>English:*</h5></label>
         <input id="English" class="form-control" type="number" name="English" placeholder="English" class="validate" required>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="form-group">
         <label for="Nepali"><h5>Nepali:*</h5></label>
         <input id="Nepali" class="form-control" type="number" name="Nepali" placeholder="Nepali" class="validate" required>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="form-group">
         <label for="Science"><h5>Science:*</h5></label>
         <input id="Science" class="form-control" type="number" name="Science" placeholder="Science" class="validate" required>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="form-group">
         <label for="Math"><h5>Mathematics:*</h5></label>
         <input id="Math" class="form-control" type="number" name="Math" placeholder="Mathematics" class="validate" required>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="form-group">
         <label for="Social"><h5>Social Studies:</h5></label>
         <input id="Social" class="form-control" type="number" name="Social" placeholder="Social" class="validate">
        </div>
        </div>

        <div class="col-lg-4">
        <div class="form-group">
         <label for="Computer"><h5>Computer Science:</h5></label>
         <input id="Computer" class="form-control" type="number" name="Computer" placeholder="Computer" class="validate">
        </div>
        </div>
</div>
<button type="submit" class="center-block btn btn-primary right" value="SUBMIT">Submit Marks</button>   
</form>
    
</div>