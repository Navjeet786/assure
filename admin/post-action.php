<?php
	include 'lib/main.php';
	$db = new Main;

		if (isset($_POST['action'])) {
		 	# add Category
		 		if ($_POST['action'] == 'add-category') {
		 			$cate = mysqli_real_escape_string($db->link, $_POST['cate']);
		 			date_default_timezone_set('Asia/Kolkata');
                    $date = date("Y-m-d H:i:s");
                    # Check category
                    $qry = "SELECT * FROM `category` WHERE category_name = '".$cate."'";
                    $run = $db->select($qry);
                    	if ($run->num_rows > 0) {
                    		echo 'This Category Already Exist';
                    	} 
                    	else {
                    		$qry1 = "INSERT INTO `category`(category_name,add_date)VALUES('".$cate."', '".$date."')";
                    			if ($db->insert($qry1)) {
                    				echo 'Category Added';
                    			} 
                    			else {
                    				echo 'Something Went Wrong Try Again Later';
                    			}
                    			
                    	}
                    	

		 		}
		 	# End Add Category

		 	# Post Title
		 		// Add Post
		    	if ($_POST['action'] == 'add-post') {
		    		$pt = mysqli_real_escape_string($db->link, $_POST['pt']);
		    		$pc = mysqli_real_escape_string($db->link, $_POST['pc']);
		    		$body = mysqli_real_escape_string($db->link, $_POST['desc']);
		    		$user = mysqli_real_escape_string($db->link, $_POST['user']);
		    		date_default_timezone_set('Asia/Kolkata');
		            $date = date("Y-m-d");

		            if($_FILES['pf']['name'] != '')  
			 			{  
						      //$extension = end(explode(".", $_FILES['files']['name'])); 
						      $extension = explode(".", $_FILES['pf']['name']);
						      $temp = end($extension); 
						      $allowed_type = array("jpg", "jpeg", "png", "gif", "JPG", "JPEG", "PNG", "GIF");  
						      if(in_array($temp, $allowed_type))  
						      {  
						           $new_name = rand() . "." . $temp;  
						           $path = "post-upload/" . $new_name;  
						           if(move_uploaded_file($_FILES['pf']['tmp_name'], $path))  
						           {  

						           		$pqry = "INSERT INTO `post`(category_id, post_title, post_image, post_content, post_by, post_date)
						           		VALUES('".$pc."', '".$pt."', '".$path."', '".$body."', '".$user."', '".$date."')";
						           			if ($db->insert($pqry)) {
						           				echo 'Post Added';
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