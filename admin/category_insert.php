

<?php
include "lib/dbcon.php";
// print_r($_FILES['image']);
$a = $_POST['title'];
//print_r($_FILES['images']);

$filename=$_FILES['images']['name'];
$tempname=$_FILES['images']['tmp_name'];
$file="post-upload/" .$filename;
// print_r($file);
move_uploaded_file($tempname,$file);

$data="insert into category(category_name,image)value('$a','$file')";
$result=mysqli_query($con,$data);
if($result){
	echo "<script> alert('data inserted')</script>";
}
else {
	echo "<script> alert('data not inserted')</script>";
}
header('location:workers-cotegories.php');
?>
