<?php
include "lib/dbcon.php";
session_start();
if(isset($_REQUEST['update'])){
$id = $_POST['id'];
$a = $_POST['category'];

if(strlen($_FILES['image']['name']) > 0){
	$data = "select * from category where id=$id" ;
$query = mysqli_query($con,$data);
$row = mysqli_fetch_array($query);
if($row['image']){
 	unlink($row['image']);
	$filename=$_FILES['image']['name'];
}
$tempname=$_FILES['image']['tmp_name'];
$file="post-upload/" .$filename;
// print_r($file);
move_uploaded_file($tempname,$file);
  $sqldata = "UPDATE category SET category_name='$a',image='$file' where id=$id";
  $sqlquery = mysqli_query($con,$sqldata);

  $_SESSION['a'] = "<script>alert('image updated')</script>";
 header('location:workers-cotegories.php');


}
else{
 $sqldataa = "UPDATE category SET category_name='$a' where id=$id";
 $sqlqueryy = mysqli_query($con,$sqldataa);
 
 
header('location:workers-cotegories.php');

}

}





?>