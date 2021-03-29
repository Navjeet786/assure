<?php
	include 'lib/main.php';
	$db = new Main;
		if (isset($_POST['action'])) {
		 	if ($_POST['action'] == 'register-admin') {
		 		$fname = mysqli_real_escape_string($db->link, $_POST['frist_name']);
                $lname = mysqli_real_escape_string($db->link, $_POST['last_name']);
                $pass  = mysqli_real_escape_string($db->link, $_POST['password']);
                $email = mysqli_real_escape_string($db->link, $_POST['email']);
                date_default_timezone_set('Asia/Kolkata');
                $date = date("Y-m-d H:i:s");

                # check user
                $qry = "SELECT * FROM `admin` WHERE email = '".$email."'";
                $run = $db->select($qry);
	                if ($run->num_rows > 0) {
	                	echo '<p class="alert alert-danger" style="padding:8px;">User Already Exist</p>';
	                } 
	                else {
	                	$pwd = password_hash($pass, PASSWORD_BCRYPT);
	                	$query = "INSERT INTO `admin`(first_name,last_name,email,password,role,add_date)VALUES('".$fname."','".$lname."','".$email."','".$pwd."','Admin','".$date."')";
	                		if ($db->insert($query)) {
	                			$lid = $db->link->insert_id;
	                			$uid = $lname.$lid;
	                			$db->update("UPDATE `admin` SET username = '".strtolower($uid)."' WHERE id = '".$lid."'");
	                			$db->insert("INSERT INTO `admin-login`(username,email,password,role,add_date)VALUES('".strtolower($uid)."','".$email."','".$pwd."','Admin','".$date."')");
	                			echo '<p class="alert alert-success" style="padding:8px;">Data Added</p>';
	                		} 
	                		else {
	                			echo '<p class="alert alert-danger" style="padding:8px;">Something went wrong try later</p>';
	                		}
	                		
	                }
                
		 	}
		} 
 ?>