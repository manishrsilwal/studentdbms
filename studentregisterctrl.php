<?php

include ('control.php');

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

$qry = "INSERT into student.studentinfo(student_id,fname,mname,lname,gender,doa,dobad,dobbs,email,adgrade,rollno, address_temp_street, address_temp_ward,address_temp_vdcmun,address_temp_district,address_temp_zone,address_temp_country,address_perm_street, address_perm_ward,address_perm_vdcmun,address_perm_district,address_perm_zone,address_perm_country) VALUES
 ('$student_id','$fname', '$mname','$lname','$gender','$doa','$dobad','$dobbs','$email','$adgrade', '$rollno','$address_temp_street', '$address_temp_ward', '$address_temp_vdcmun', '$address_temp_district', '$address_temp_zone', '$address_temp_country', '$address_per_street', '$address_per_ward', '$address_per_vdcmun', '$address_per_district', '$address_per_zone', '$address_per_country')";

$result= mysqli_query($db,$qry);


header("Location: studentregister.php");