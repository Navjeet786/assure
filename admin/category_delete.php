<?php

include "lib/dbcon.php";
$id = $_GET['id'];
$a = "DELETE from category where id=$id";
$query = mysqli_query($con,$a);
header('location:workers-cotegories.php');
?>