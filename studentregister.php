<?php
  include("loggedin.php");
  include ("loginadmin.php");

include_once('control.php');
 
 if ($_SERVER['REQUEST_METHOD'] == "POST")
 {	
 	$student_id = $_POST['student_id'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$doa = $_POST['doa'];
	$dobad = $_POST['dobad'];
	$dobbs = $_POST['dobbs'];
	$email = $_POST['email'];
	$adgrade = $_POST['adgrade'];
	$rollno = $_POST['rollno'];
	$address_temp_street = $_POST['address_temp_street'];
	$address_temp_ward = $_POST['address_temp_ward'];
	$address_temp_vdcmun = $_POST['address_temp_vdcmun'];
	$address_temp_district = $_POST['address_temp_district'];
	$address_temp_zone = $_POST['address_temp_zone'];
	$address_temp_country = $_POST['address_temp_country'];
	$address_per_street = $_POST['address_per_street'];
	$address_per_ward = $_POST['address_per_ward'];
	$address_per_vdcmun = $_POST['address_per_vdcmun'];
	$address_per_district = $_POST['address_per_district'];
	$address_per_zone = $_POST['address_per_zone'];
	$address_per_country = $_POST['address_per_country'];

	$gfname = $_POST['gfname'];
	$gmname = $_POST['gmname'];
	$glname = $_POST['glname'];
	$phnum = $_POST['phnum'];
	$relation = $_POST['relation'];

$qry1="INSERT INTO `studentinfo` (`student_id`, `fname`, `mname`, `lname`, `gender`, `dobad`, `dobbs`, `doa`, `email`, `adgrade`, `rollno`, `address_temp_street`, `address_temp_ward`, `address_temp_vdcmun`, `address_temp_district`, `address_temp_zone`, `address_temp_country`, `address_per_street`, `address_per_ward`, `address_per_vdcmun`, `address_per_district`, `address_per_zone`, `address_per_country`) VALUES ('$student_id', '$fname', '$mname', '$lname', '$gender', '$dobad', '$dobbs', '$doa', '$email', '$adgrade', '$rollno', '$address_temp_street', '$address_temp_ward', '$address_temp_vdcmun', '$address_temp_district', '$address_temp_zone', '$address_temp_country', '$address_per_street', '$address_per_ward', '$address_per_vdcmun', '$$address_per_district', '$address_per_zone', '$address_per_country')";

$qry2="INSERT INTO `parents` (`student_id`, `gfname`, `gmname`, `glname`, `relation`, `phnum`) VALUES ('$student_id', '$gfname', '$gmname', '$glname', '$relation', '$phnum')";


if(mysqli_query($db,$qry1)&&mysqli_query($db,$qry2)){
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
	<title>Student Information System::Register New Student</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>
<a href="logout.php" class="btn btn-primary pull-right" role="button"  target="_top" style="margin-top: 10px;">Logout</a>
<a href="adminhome.php" class="btn btn-primary pull-left" role="button"  target="_top">Admin Panel</a>

<div class="container" style="margin-top: 75px">

<h2 align="center"><font size="16">R</font>egister <font size="16">N</font>ew <font size="16">S</font>tudents</h2>

<div class="well" style="margin-top: 50px;">
<div class="top" align="center"><h3>Student's Registration</h3><h5 style="color: red;"><i>(You cannot leave * marked fileds empty)</i></h5></div>
<form action="#" method="POST">
<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
         <label for="student_id"><h5>Registration Number:*</h5></label>
         <input id="student_id" class="form-control" type="text" name="student_id" placeholder="Registration Number" class="validate" required>
        </div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
         <label for="fname"><h5>First Name:*</h5></label>
         <input id="fname" class="form-control" type="text" name="fname" placeholder="First Name" class="validate" required>
        </div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
         <label for="mname"><h5>Middle Name:</h5></label>
         <input id="mname" class="form-control" type="text" name="mname" placeholder="Middle Name" class="validate">
        </div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
         <label for="lname"><h5>Last Name:*</h5></label>
         <input id="lname" class="form-control" type="text" name="lname" placeholder="Last Name" class="validate" required>
        </div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
         <label for="gender"><h5>Gender(M/F):*</h5></label>
         <input id="gender" class="form-control" type="text" name="gender" placeholder="Gender" class="validate" required>
        </div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
         <label for="dobad"><h5>Date of Birth(AD):*</h5></label>
         <input id="dobad" class="form-control" type="date" name="dobad" placeholder="Date of Birth in AD" class="validate" required>
        </div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
         <label for="dobbs"><h5>Date of Birth(BS):</h5></label>
         <input id="dobbs" class="form-control" type="date" name="dobbs" placeholder="Date of Birth in BD" class="validate">
        </div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
         <label for="doa"><h5>Date of Admission(AD):*</h5></label>
         <input id="doa" class="form-control" type="date" name="doa" placeholder="Date of Admission in AD" class="validate" required>
        </div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
         <label for="email"><h5>Email Address: </h5></label>
         <input id="email" class="form-control" type="text" name="email" placeholder="E-mail Address" class="validate">
        </div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
         <label for="adgrade"><h5>Admitted to Grade(Nursery, LKG, UKG, 1-10):*</h5></label>
         <input id="adgrade" class="form-control" type="text" name="adgrade" placeholder="Grade of Admission" class="validate" required>
        </div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
         <label for="rollno"><h5>Class Roll Number:* </h5></label>
         <input id="rollno" class="form-control" type="text" name="rollno" placeholder="Roll Number" class="validate" required>
        </div>
	</div>

	<h4 style="padding: 10px;">Information of Temporary Address (<i>Skip this section if you don't have any</i>)</h4>
	<div class="col-lg-4">
		<div class="form-group">
         <label for="address_temp_street"><h5>Street:</h5></label>
         <input id="address_temp_street" class="form-control" type="text" name="address_temp_street" placeholder="Temporary Address Street" class="validate">
        </div>
    </div>

    <div class="col-lg-4">
		<div class="form-group">
         <label for="address_temp_ward"><h5>Ward:</h5></label>
         <input id="address_temp_ward" class="form-control" type="number" name="address_temp_ward" placeholder="Temporary Address Ward" class="validate">
        </div>
	</div>

	<div class="col-lg-4">
		<div class="form-group">
         <label for="address_temp_vdcmun"><h5>Name of VDC/Municipality:</h5></label>
         <input id="address_temp_vdcmun" class="form-control" type="text" name="address_temp_vdcmun" placeholder="Temporary Address VDC/Municipality" class="validate">
        </div>
	</div>

	<div class="col-lg-4">
		<div class="form-group">
         <label for="address_temp_district"><h5>District</h5></label>
         <input id="address_temp_district" class="form-control" type="text" name="address_temp_district" placeholder="Temporary Address District" class="validate">
        </div>
	</div>

	<div class="col-lg-4">
		<div class="form-group">
         <label for="address_temp_zone"><h5>Zone:</h5></label>
         <input id="address_temp_zone" class="form-control" type="text" name="address_temp_zone" placeholder="Temporary Address Zone" class="validate">
        </div>
	</div>

	<div class="col-lg-4">
		<div class="form-group">
         <label for="address_temp_country"><h5>Country:</h5></label>
         <input id="address_temp_country" class="form-control" type="text" name="address_temp_country" placeholder="Temporary Address Country" class="validate">
        </div>
	</div>

	<h4 style="padding: 10px;">Information of Permanent Address</h4>
	<div class="col-lg-4">
		<div class="form-group">
         <label for="address_per_street"><h5>Street:*</h5></label>
         <input id="address_per_street" class="form-control" type="text" name="address_per_street" placeholder="Permanent Address Street" class="validate">
        </div>
    </div>

    <div class="col-lg-4">
		<div class="form-group">
         <label for="address_per_ward"><h5>Ward:*</h5></label>
         <input id="address_per_ward" class="form-control" type="number" name="address_per_ward" placeholder="Permanent Address Ward" class="validate">
        </div>
	</div>

	<div class="col-lg-4">
		<div class="form-group">
         <label for="address_per_vdcmun"><h5>Name of VDC/Municipality:*</h5></label>
         <input id="address_per_vdcmun" class="form-control" type="text" name="address_per_vdcmun" placeholder="Permanent Address VDC/Municipality" class="validate">
        </div>
	</div>

	<div class="col-lg-4">
		<div class="form-group">
         <label for="address_per_district"><h5>District*</h5></label>
         <input id="address_per_district" class="form-control" type="text" name="address_per_district" placeholder="Permanent Address District" class="validate">
        </div>
	</div>

	<div class="col-lg-4">
		<div class="form-group">
         <label for="address_per_zone"><h5>Zone:*</h5></label>
         <input id="address_per_zone" class="form-control" type="text" name="address_per_zone" placeholder="Permanent Address Zone" class="validate">
        </div>
	</div>

	<div class="col-lg-4">
		<div class="form-group">
         <label for="address_per_country"><h5>Country:*</h5></label>
         <input id="address_per_country" class="form-control" type="text" name="address_per_country" placeholder="Permanent Address Country" class="validate">
        </div>
	</div>
</div>

<div class="well" style="margin-top: 50px;">
<div class="top" align="center"><h3>Guardian's Registration</h3><h5 style="color: red;"><i>(You cannot leave * marked fileds empty)</i></h5></div>
<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
         <label for="gfname"><h5>Guardian's First Name:*</h5></label>
         <input id="gfname" class="form-control" type="text" name="gfname" placeholder="First Name" class="validate" required>
    	</div>

    	<div class="form-group">
         <label for="gmname"><h5>Guardian's Middle Name:</h5></label>
         <input id="gmname" class="form-control" type="text" name="gmname" placeholder="Middle Name" class="validate">
    	</div>

    	<div class="form-group">
         <label for="glname"><h5>Guardian's Last Name:*</h5></label>
         <input id="glname" class="form-control" type="text" name="glname" placeholder="Last Name" class="validate" required>
    	</div>
    </div>

    <div class="col-lg-6">
    	<div class="form-group">
         <label for="relation"><h5>Relation to Student:*</h5></label>
         <input id="relation" class="form-control" type="text" name="relation" placeholder="Relation to Student" class="validate" required>
    	</div>
    </div>

    <div class="col-lg-6">

    	<div class="form-group">
         <label for="phnum"><h5>Emergency Mobile Number:*</h5></label>
         <input id="phnum" class="form-control" type="text" name="phnum" placeholder="Mobile Number" class="validate" required>
    	</div>
    </div>
	</div>
</div>

<button type="submit" class="center-block btn btn-primary right" value="SUBMIT">Register</button>   
</form>
</div>
</body>
</html>
