<?php
	include 'lib/main.php';
	$db = new Main;

		if (isset($_POST['action'])) {
		 	# Post Title
		 		// Add Post
		    	if ($_POST['action'] == 'add-location') {
		    		$lt = mysqli_real_escape_string($db->link, $_POST['lt']);
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
						           $path = "../file-upload/" . $new_name; 
						           $path1 = "file-upload/" . $new_name;  
						           if(move_uploaded_file($_FILES['lf']['tmp_name'], $path))  
						           {  

						           	 $pqry = "INSERT INTO `worker-category`(category_name,image)
						           		VALUES('".$lt."','".$path1."')";
						           			if ($db->insert($pqry)) {
						           				echo 'Category Added';
						           			} 
						           			else {
						           				echo 'Something Goes Wrong Try Later';
						           			}
						           			
						            	
						           }  
						      }  
						      else  
						      {  
						           echo 'Invalid File Format';  
						      }  
						 }  
						 else  
						 {  
						      echo 'Please Select File"';  
						 }


		    	}
		 	# End Post Title	
		 } 
 ?>