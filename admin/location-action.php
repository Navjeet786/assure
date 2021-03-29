<?php
	include 'lib/main.php';
	$db = new Main;

		if (isset($_POST['action'])) {
		 	# Post Title
		 		// Add Post
		    	if ($_POST['action'] == 'add-location') {
		    		$lt = mysqli_real_escape_string($db->link, $_POST['lt']);
		    		$body = mysqli_real_escape_string($db->link, $_POST['loc']);
		    		$user = mysqli_real_escape_string($db->link, $_POST['user']);
		    		date_default_timezone_set('Asia/Kolkata');
		            $date = date("Y-m-d");

		            if($_FILES['lf']['name'] != '')  
			 			{  
						      //$extension = end(explode(".", $_FILES['files']['name'])); 
						      $extension = explode(".", $_FILES['lf']['name']);
						      $temp = end($extension); 
						      $allowed_type = array("jpg", "jpeg", "png", "gif", "JPG", "JPEG", "PNG", "GIF");  
						      if(in_array($temp, $allowed_type))  
						      {  
						           $new_name = rand() . "." . $temp;  
						           $path = "post-upload/" . $new_name;  
						           if(move_uploaded_file($_FILES['lf']['tmp_name'], $path))  
						           {  

						           	 $pqry = "INSERT INTO `location`(title, address, image, locate_by, add_date)
						           		VALUES('".$lt."', '".$body."', '".$path."', '".$user."', '".$date."')";
						           			if ($db->insert($pqry)) {
						           				echo 'Location Added';
						           			} 
						           			else {
						           				echo 'Something Goes Wrong Try Later';
						           			}
						           			
						            	
						           }  
						      }  
						      else  
						      {  
						           echo '<script>alert("Invalid File Format")</script>';  
						      }  
						 }  
						 else  
						 {  
						      echo '<script>alert("Please Select File")</script>';  
						 }


		    	}
		 	# End Post Title	
		 } 
 ?>