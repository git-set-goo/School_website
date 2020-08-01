<?php

$con=mysqli_connect('127.0.0.1','root','');
if (!$con){
	echo 'notconnected to server';
	
}
if (!mysqli_select_db($con,'school')){
	echo 'database not selected';
	
}
$studentname = $_POST['studentname'];
$fathername = $_POST['fathername'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$paddress = $_POST['paddress'];
$personaladdress = $_POST['personaladdress'];
$pincode = $_POST['pincode'];
$emailid = $_POST['emailid'];
$mobileno = $_POST['mobileno'];	

$sql = "INSERT INTO nursery(studentname,fathername,dob,gender,paddress,personaladdress,pincode,emailid,mobileno) VALUES ('$studentname','$fathername','$dob','$gender','$paddress','$personaladdress','$pincode','$emailid','$mobileno')";
if (!mysqli_query($con,$sql)){
	echo 'NOT INSERTED';
}else{
	$message = "Form submitted	";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=index.html");



?>