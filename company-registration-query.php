<?php
    include 'lib/main.php';
    $db = new Main;
    if (isset($_REQUEST['reg'])){
        $user       = mysqli_real_escape_string($db->link, $_REQUEST['username']);
        $apply      = mysqli_real_escape_string($db->link, $_REQUEST['apply']);
        $cn         = mysqli_real_escape_string($db->link, $_REQUEST['cn']);
        $ccp        = mysqli_real_escape_string($db->link, $_REQUEST['ccp']);
        $pn         = mysqli_real_escape_string($db->link, $_REQUEST['pn']);
        $cpn        = mysqli_real_escape_string($db->link, $_REQUEST['cpn']);
        $address    = mysqli_real_escape_string($db->link, $_REQUEST['address']);
        $cw         = mysqli_real_escape_string($db->link, $_REQUEST['cw']);
        $ac         = mysqli_real_escape_string($db->link, $_REQUEST['ac']);


        $extension = explode(".", $_FILES['ucd']['name']);
        $tmp = end($extension);
        $allowed_type = array("jpg", "jpeg", "png", "gif","pdf","docx");
        if(in_array($tmp, $allowed_type))
        {
            $new_name = rand() . "." . $tmp;
            $path = "file-upload/" . $new_name;
            move_uploaded_file($_FILES['ucd']['tmp_name'], $path);
            

        }
        else{
            $_SESSION['ucd_err'] = 'Sorry, only JPG, JPEG, PNG, GIF, PDF, DOCX files are allowed.';
            header('location: company-registration.php#listing');

        }

        $extension1 = explode(".", $_FILES['cl']['name']);
        $tmp1 = end($extension1);
        $allowed_type1 = array("jpg", "jpeg", "png", "gif","pdf","docx");
        if(in_array($tmp1, $allowed_type1))
        {
            $new_name1 = rand() . "." . $tmp1;
            $path1 = "file-upload/" . $new_name1;
            echo $path;
            move_uploaded_file($_FILES['cl']['tmp_name'], $path1);

        }
        else{
            $_SESSION['cl_err'] = 'Sorry, only JPG, JPEG, PNG, GIF, PDF, DOCX files are allowed.';
            header('location: company-registration.php#listing');

        }
        
        




       echo  $qry = "INSERT INTO `company_register_profile`(username,company_register_for,company_name,company_contact_person,personal_number,company_phone_number,cac_file,address,company_website,company_logo,
about_company)VALUES('$user','$apply','$cn','$ccp','$pn','$cpn','$path','$address','$cw','$path1','$ac')";
        if($db->insert($qry)){
            $db->update("UPDATE `signup` SET role = 'Company' WHERE username = '$user'");
            
            header('location: company-registration.php');
            $_SESSION['cmp_reg_scs'] = 'Your company has been registered';
        }
        else{
            header('location: company-registration.php');
            $_SESSION['cmp_reg_err'] = 'Something went wrong try later';
        }







    }
