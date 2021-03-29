

<?php
include "lib/dbcon.php";
// print_r($_FILES['image']);
$id = $_POST['id'];
$a = $_POST['category'];

//print_r($_FILES['images']);


$data="UPDATE category set category_name='$a' where id=$id";
$result=mysqli_query($con,$data);
if($result){
	echo "<script> alert('data inserted')</script>";
}
else {
	echo "<script> alert('data not inserted')</script>";
}
header('location:workers-cotegories.php');
?>
