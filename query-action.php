<?php
	include 'lib/main.php';
	$db = new Main;

	if (isset($_POST['action'])) {
	 	if ($_POST['action'] == 'worker-signup') {
	 		$fname = mysqli_real_escape_string($db->link, $_POST['fn']);
           	$lname = mysqli_real_escape_string($db->link, $_POST['ln']);
            $pass  = mysqli_real_escape_string($db->link, $_POST['pwd']);
            $email = mysqli_real_escape_string($db->link, $_POST['em']);

            date_default_timezone_set('Asia/Kolkata');
            $date = date("Y-m-d H:i:s");

            $token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
            $token = str_shuffle($token);
            $token = substr($token, 0,10);

             $qry = "SELECT * FROM `signup` WHERE email = '".$email."'";
             $run = $db->select($qry);
             	if ($run->num_rows > 0) {
             		echo '<p class="alert alert-danger" style="padding:8px;">User Already Exist</p>';
             	} 
             	else {
             		$pwd = password_hash($pass, PASSWORD_BCRYPT);
             		$query = "INSERT INTO `signup`(first_name,last_name,email,password,token,status,add_date)
             		VALUES('".$fname."','".$lname."','".$email."','".$pwd."','".$token."','Inactive','".$date."')";
             			if ($db->insert($query)) {
             				$lid = $db->link->insert_id;
	                		$uid = $lname.$lid;
	                		$db->update("UPDATE `signup` SET username = '".strtolower($uid)."' WHERE id = '".$lid."'");

	                		// Mail Script
	                        $toEmail = $email;
	                        $subject = 'Email Verification For New User '.$fname.' '.$lname;
	                        $body    = '<h3>Assure</h3>
	                        			<p>Email verification Request</p>
	                                    <p>Name</h4><p>'.$fname.' '.$lname.'</p>
	                                    <p>Activate Your Email Click Verification Link </p>
	                           
	                                    <a href="http://test-demo.in/assure/worker-confirm.php?email='.$email.'&&token='.$token.'">Click here to verify your Email</a>';
	                          
	                        $headers = "MIME-Version: 1.0" ."\r\n";
	                        $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
	                        $headers .= "From: " .'Assure'. "<".'mozammil@accurate-web.com'.">". "\r\n";  
	                            if (mail($toEmail, $subject, $body, $headers)) {
	                           
	                              echo '<p class="alert alert-success" style="padding:8px;">Account Created Successfully | Please Verify Your Email, Verification Link Sent In Your Registered Email Address</p>';
	                             
	                          
	                            } else {
	                              
	                              echo '<p class="alert alert-danger" style="padding:8px;">Something Went Wrong Try Later</p>';
	                              
	                             }

             			} 
             			else {
             				echo '<p class="alert alert-danger" style="padding:8px;">Something Goes Wrong Try Later</p>';
             			}
             			

             	}
             	

	 	}
	 	#end worker-signup

	 	if ($_REQUEST['action'] == 'login') {
		 	$user = mysqli_real_escape_string($db->link, $_REQUEST['user']);
		 	$password = mysqli_real_escape_string($db->link, $_REQUEST['password']);
		 	
		 	$sql = "SELECT * FROM `signup` WHERE username = '$user' OR email = '$user'";
		 	$run = $db->select($sql);
		 		if ($run->num_rows > 0) {
		 			while ($row = $run->fetch_array()) {
		 				if (password_verify($password, $row['password'])) {
		 					if ($row['role'] == 'Individual') {
		 						$_SESSION['username'] = $user;
		 						echo 'success';
		 					} 
		 					else {
		 						$_SESSION['username'] = $user;
		 						echo 'success2';
		 					}
		 					
		 				} 
		 				else {
		 					echo '<p class="alert alert-danger">Password Not Matched</p>';
		 				}	
		 			}
		 		} 
		 		else {
		 			echo '<p class="alert alert-danger">Invalid Username or Password</p>';
		 		}
		 		
		 }

		 if ($_REQUEST['action'] == 'update-profile') {
		 	
		 	$first_name       = mysqli_real_escape_string($db->link, $_REQUEST['first_name']);
		 	$last_name        = mysqli_real_escape_string($db->link, $_REQUEST['last_name']);
	      	$email       	  = mysqli_real_escape_string($db->link, $_REQUEST['email']);
	       
	        $job_role      	  = mysqli_real_escape_string($db->link, $_REQUEST['job_role']);
	        $bvn              = mysqli_real_escape_string($db->link, $_REQUEST['bvn']);
	        $pp               = mysqli_real_escape_string($db->link, $_REQUEST['pp']);
	        $gender           = mysqli_real_escape_string($db->link, $_REQUEST['gender']);
	        $phn        	  = mysqli_real_escape_string($db->link, $_REQUEST['phn']);
	        $address          = mysqli_real_escape_string($db->link, $_REQUEST['address']);
	        $country          = mysqli_real_escape_string($db->link, $_REQUEST['country']);
	        $state            = mysqli_real_escape_string($db->link, $_REQUEST['state']);
	        $city             = mysqli_real_escape_string($db->link, $_REQUEST['city']);
	        $edu              = mysqli_real_escape_string($db->link, $_REQUEST['edu']);
	        $exp              = mysqli_real_escape_string($db->link, $_REQUEST['exp']);
	        $user             = mysqli_real_escape_string($db->link, $_REQUEST['user']);

	        $sql = "UPDATE `signup` SET first_name = '$first_name', last_name = '$last_name', email = '$email' WHERE username = '$user'";

	        	if ($db->update($sql)) {
	        		 $db->update("UPDATE `individual_register_profile` SET `apply_for` = '$job_role',`bvn` = '$bvn',`passport` = '$pp',`gender` = '$gender',`phone` = '$phn',`address` = '$address',`country` = '$country',`state` = '$state',`city` = '$city',`qualification` = '$edu',`work_exp` = '$exp' WHERE username = '".$user."'");
	        		$_SESSION['msg_scs'] = 'Data Updated.....';
	        		header('Location: user-dashboard.php');
	        		//echo 'Data Updated.....';
	        	} 
	        	else {
	        		$_SESSION['msg_err'] = 'Something Went Wrong.....';
	        		header('Location: user-dashboard.php');
	        		//echo 'Something Went Wrong.....';
	        	}
	        	

		 }
		 









	 }



 ?>