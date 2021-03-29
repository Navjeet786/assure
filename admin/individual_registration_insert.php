<?php

include "lib/dbcon.php";

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$apply = $_POST['apply'];
$bvn = $_POST['bvn'];
$passport = $_POST['pp'];
$gender = $_POST['gender'];
$phone = $_POST['phn'];
$address = $_POST['address'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$qli = $_POST['edu'];
$work_exp = $_POST['exp'];



$data = "insert into individual_register_profile(username,apply_for,bvn,passport,gender,phone,address,country,state,city,qualification,work_exp)values('$username','$apply','$bvn','$passport','$gender','$phone','$address','$country','$state','$city','$qli','$work_exp')";

$query = mysqli_query($con,$data);

if ($query) {
	echo "<script>alert('data inserted')</script>";
}else{
	echo "<script>alert('data not inserted')</script>";
}
header('location:add-new-workers.php');

$dataa = "insert into signup(username,first_name,last_name,email,password)values('$username','$fn','$ln','email','password')";

$queryy = mysqli_query($con,$dataa);
?>


<!-- $m_id=$_GET['id'];
		 $query="Select * from task_reply JOIN user ON user.user_id =task_reply.reply_by where m_id=$m_id"; -->