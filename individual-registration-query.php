<?php
    include 'lib/main.php';
    $db = new Main;
    if (isset($_REQUEST['reg'])){
        $user       = mysqli_real_escape_string($db->link, $_REQUEST['username']);
        $apply      = mysqli_real_escape_string($db->link, $_REQUEST['apply']);
        $bvn        = mysqli_real_escape_string($db->link, $_REQUEST['bvn']);
        $pp         = mysqli_real_escape_string($db->link, $_REQUEST['pp']);
        $gender     = mysqli_real_escape_string($db->link, $_REQUEST['gender']);
        $phn        = mysqli_real_escape_string($db->link, $_REQUEST['phn']);
        $address    = mysqli_real_escape_string($db->link, $_REQUEST['address']);
        $country    = mysqli_real_escape_string($db->link, $_REQUEST['country']);
        $state      = mysqli_real_escape_string($db->link, $_REQUEST['state']);
        $city       = mysqli_real_escape_string($db->link, $_REQUEST['city']);
        $qli        = mysqli_real_escape_string($db->link, $_REQUEST['qli']);
        $we         = mysqli_real_escape_string($db->link, $_REQUEST['we']);


        $gn_name = $_REQUEST['gn'];
        $gn_email = $_REQUEST['gn_email'];
        $gn_phn = $_REQUEST['gn_phn'];

       $qry = "INSERT INTO `individual_register_profile`
                (`username`,`apply_for`,`bvn`,`passport`,`gender`,`phone`,`address`,`country`,`state`,`city`,`qualification`,`work_exp`)
                 VALUES('$user','$apply','$bvn','$pp','$gender','$phn','$address','$country','$state','$city','$qli','$we')";
            if($db->insert($qry)){
                $db->update("UPDATE `signup` SET role = 'Individual' WHERE username = '$user'");
                $size_gn = sizeof($gn_name);
                for ($i=0; $i < $size_gn; $i++) {
                    $gn_nm = $gn_name[$i];
                    $gn_em = $gn_email[$i];
                    $gn_ph = $gn_phn[$i];
                    // Insert Query
                    if (strlen($gn_nm) > 0) {
                        $sqli = "INSERT INTO `individual_guarantor`(username,gn_name,gn_email,gn_phone)VALUES('".$user."','".$gn_nm."','".$gn_em."','".$gn_ph."')";
                        $sqli_run = $db->insert($sqli);
                    }
                }

                header('location: individual-registration.php#listing');
                $_SESSION['reg_scs'] = 'Your profile has been completed';
            }
            else{
                header('location: individual-registration.php#listing');
                $_SESSION['reg_err'] = 'Something went wrong try later';
            }







    }
