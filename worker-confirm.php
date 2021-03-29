<?php
  include 'lib/main.php';
  include 'lib/functions.php';
  $db = new Main;
  function redirect() {
		header('location: ./');
		exit();
	}

	if (!isset($_REQUEST['email']) || !isset($_REQUEST['token'])) {
		echo redirect();
	} 
	else {
		

		$email = mysqli_real_escape_string($db->link,$_REQUEST['email']);
		$token = mysqli_real_escape_string($db->link,$_REQUEST['token']);

		$sql = "SELECT * FROM `signup` WHERE email = '".$email."' AND token = '".$token."'";
		$run = $db->select($sql);
		      if ($run->num_rows > 0) {
				echo $db->update("UPDATE `signup` SET status = 'Active', token = '1' WHERE email='$email'");
					$query = $db->update("SELECT * FROM `signup` WHERE email = '".$email."'");
					$row = $query->fetch_array();
					$user = $row['username'];


			   //send mail
			    $toEmail = $email;
                $subject = 'Thank You For Joining Us '.$row["first_name"].' '.$row["last_name"];
                $body    = '<h2>We Will Provide Your Username</h2>
                            <h4>Username: '.$row["username"].'</h4>
                            <h4>Password: '.'Applied Your Choosen Password'.'</h4>';

                // Email Headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                // Additional Headers
                $headers .= "From: " .'Assure'. "<".'mozammil@accurate-web.com'.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                  // Email Sent
                  $_SESSION["confirm"] =  'Your email has been verified | Username sent your email address';
                  $_SESSION['username'] = $user;
			      header('location: worker-dashboard.php');
			      
                } else {
                  // Failed
                  $_SESSION["confirm_error"] =  'Your email has been verified! You can login after 2 hour later !';
                  header('location: worker-login.php');
			      
                }



			
		} 
		else{
			echo redirect();
		}
	} 
	
	 
