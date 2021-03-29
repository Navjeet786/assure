<?php
    include 'lib/main.php';
    $db = new Main;

    if (isset($_SESSION['username'])) {
        $ses_var = $_SESSION['username'];
        $ses_qry = "SELECT * FROM `signup` WHERE username = '".$ses_var."' OR email = '".$ses_var."'";
        $ses_run = $db->select($ses_qry);
        $ses_row = $ses_run->fetch_array();
    }
    else{
        header("location: ./");
    }

?>
<!doctype html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/fonts/flaticon.css">

    <link rel="stylesheet" href="assets/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <title>Assure - Proffessional Home Service Provider</title>
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="admin/assets/img/a-logo.png">
</head>

<body>
<?php include 'inc/header.php'; ?>

    <div class="inner-banner inner-bg3">
        <div class="container">
            <div class="inner-banner-title text-center">
                <h3><?= $ses_row['first_name'].' '.$ses_row['last_name'];?></h3>
            </div>
            <div class="banner-list">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <ul class="list">
                            <li>
                                <a href="./">Home</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                            <li>Dashboard</li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                            <li><?= $ses_row['first_name'].' '.$ses_row['last_name'];?></li>
                            
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="listing-widget-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="blog-widget">
                        <div class="blog-widget">
                           <h3 class="title">Dashboard</h3>
                           <div class="widget_categories">
                              <ul>
                                 <li class="active">
                                    <a href="#" class="active">Profile </a>
                                 </li>
                                 <li>
                                    <a href="#">Change Password </a>
                                 </li>
                                 <li>
                                    <a href="#">Job Order </a>
                                 </li>
                                 <li>
                                    <a href="#">Payment </a>
                                 </li>
                                 <li>
                                    <a href="#">My Guarantor</a>
                                 </li>
                                 <li>
                                    <a href="logout.php">Logout </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                </div>
            </div>
                <div class="col-lg-9">
                    <div class="listing-widget-into">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="place-list-item">

                                    <div class="content contact-form">
                                        <form method="post" id="user-profile" action="query-action.php">
                                            <h3 style="font-weight: 400;">Basic Information</h3>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> First Name</label>
                                                        <input type="text" name="first_name" id="first_name" class="form-control" value="<?= $ses_row['first_name'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Last Name</label>
                                                        <input type="text" name="last_name" id="last_name" class="form-control" value="<?= $ses_row['last_name'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Email</label>
                                                        <input type="text" name="email" id="email" class="form-control" value="<?= $ses_row['email'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h3 style="font-weight: 400;">Additional Information</h3>
                                                </div>

                                                <?php
                                                    $sql = "SELECT * FROM `individual_register_profile` WHERE username = '".$ses_row['username']."'";
                                                    $run = $db->select($sql);
                                                    $row = $run->fetch_array(); 
                                                 ?>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Job Role</label>
                                                        <input type="text" name="job_role" id="job_role" class="form-control" value="<?= $row['apply_for'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> BVN</label>
                                                        <input type="text" name="bvn" id="bvn" class="form-control" value="<?= $row['bvn'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Passport</label>
                                                        <input type="text" name="pp" id="pp" class="form-control" value="<?= $row['passport'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Gender</label>
                                                        <input type="text" name="gender" id="gender" class="form-control" value="<?= $row['gender'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Phone</label>
                                                        <input type="text" name="phn" id="phn" class="form-control" value="<?= $row['phone'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h3 style="font-weight: 400;">Address/Qualification/Experience - Information</h3>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Address</label>
                                                        <input type="text" name="address" id="address" class="form-control" value="<?= $row['address'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> City</label>
                                                        <input type="text" name="city" id="city" class="form-control" value="<?= $row['city'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> State</label>
                                                        <input type="text" name="state" id="state" class="form-control" value="<?= $row['state'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Country</label>
                                                        <input type="text" name="country" id="country" class="form-control" value="<?= $row['country'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Qualification</label>
                                                        <input type="text" name="edu" id="edu" class="form-control" value="<?= $row['qualification'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Experience</label>
                                                        <input type="text" name="exp" id="exp" class="form-control" value="<?= $row['work_exp'];?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="action" id="action" value="update-profile">
                                            <input type="hidden" name="user" id="user" value="<?= $ses_row['username'];?>">
                                             <button type="submit" name="login" id="login" class="default-btn  user-all-btn">
                                                    Update 
                                             </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                           


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($_SESSION['msg_scs'])): ?>
    <!---- Start Modal ---->
      <div class="modal fade" id="myModal-1">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Profile Updation Info</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
               <h4 class="alert alert-success" style="font-weight: 500;"><i class="fa fa-check-circle-o" style="font-size: 23px;"></i> <?= $_SESSION['msg_scs']; ?></h4>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    <!----End Start Modal---->
   <script>
    $(document).ready(function(){
        $(window).on('load',function(){
            $('#myModal-1').modal('show');
        });
    });
</script>
<?php unset($_SESSION['msg_scs']) ?>
<?php endif ?>

<?php if (isset($_SESSION['msg_err'])): ?>
    <!---- Start Modal ---->
      <div class="modal fade" id="myModal-1">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Profile Updation Info</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
               <h4 class="alert alert-danger" style="font-weight: 500;"><i class="fa fa-times" style="font-size: 23px;"></i> <?= $_SESSION['msg_err']; ?></h4>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    <!----End Start Modal---->
   <script>
    $(document).ready(function(){
        $(window).on('load',function(){
            $('#myModal-1').modal('show');
        });
    });
</script>
<?php unset($_SESSION['msg_err']) ?>
<?php endif ?>

<?php include 'inc/footer.php'; ?>