<?php
    include 'lib/main.php';
    $db = new Main;

    if (isset($_SESSION['username'])) {
        $ses_var = $_SESSION['username'];
        $ses_qry = "SELECT * FROM `signup` WHERE username = '".$ses_var."'";
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
    </head>

<body>
<?php include 'inc/header.php'; ?>

    <div class="inner-banner inner-bg3">
        <div class="container">
            <div class="inner-banner-title text-center">
                <h3>Ridgi Fitness Club</h3>
                <p>News pariatur. Excepteur sint occaecat iat nulla pariatur.Excepteur </p>
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

                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <p><a href="#">&nbsp;</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="listing-widget-section pt-100 pb-70" id="listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="listing-widget-into">
                        <div class="col-md-12">
                            <h4 class="text-center" style="font-weight: 400;">Please complete your profile</h4>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-2">
                                <div class="place-list-item">
                                    <div class="col-md-10" style="margin: 0 auto;">
                                        <?php if (isset($_SESSION['reg_scs'])): ?>
                                            <p class="alert alert-success">
                                                <?= $_SESSION['reg_scs'];?>
                                            </p>
                                        <?php endif ?>
                                        <?php unset($_SESSION['reg_scs']); ?>
                                        <?php if (isset($_SESSION['reg_err'])): ?>
                                            <p class="alert alert-danger">
                                                <?= $_SESSION['reg_err'];?>
                                            </p>
                                        <?php endif ?>
                                        <?php unset($_SESSION['reg_err']); ?>
                                        <form method="post" action="individual-registration-query.php">
                         <div class="row">
                    <div class="col-md-12" style="margin-bottom: 15px;">
                           <div class="form-group">
                       <?php
          $qry = "SELECT * FROM `worker-category` ORDER BY id DESC";
         $run = $db->select($qry);
        $rows = array();
         while($row = $run->fetch_array()){
          $rows[] = $row;
            }
        ?>
          <label>Apply For <sup class="text-danger">*</sup></label>
         <select name="apply" id="apply" class="form-control" required>
        <option value="">Select Services</option>
      <?php foreach ($rows as $row):?>
     <option value="<?= $row['category_name'];?>"><?= $row['category_name'];?></option>
      <?php endforeach;?>
         </select>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Bvn <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="bvn" id="bvn" class="form-control" placeholder="BVN" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Passport <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="pp" id="pp" class="form-control" placeholder="Passport" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Gender <sup class="text-danger">*</sup></label>
                                                        <select name="gender" id="gender" class="form-control" required>
                                                            <option value="">Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Phone <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="phn" id="phn" class="form-control" placeholder="Phone" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Address <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Country <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="country" id="country" class="form-control" placeholder="Country" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>State <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="state" id="state" class="form-control" placeholder="State" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>City <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="city" id="city" class="form-control" placeholder="City" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Qualification <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="qli" id="qli" class="form-control" placeholder="Qualification" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Work Experience <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="we" id="we" class="form-control" placeholder="Work Experience" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <p>Add Your Guarantors</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Guarantor name <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="gn[]" id="gn" class="form-control" placeholder="Guarantor name" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Guarantor email <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="gn_email[]" id="country" class="form-control" placeholder="Guarantor email" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Guarantor Phone <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="gn_phn[]" id="country" class="form-control" placeholder="Guarantor Phone" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Guarantor name2 </label>
                                                        <input type="text" name="gn[]" name="gn2" id="gn" class="form-control" placeholder="Guarantor name" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Guarantor email2 </label>
                                                        <input type="text" name="gn_email[]" name="gn_email2" id="country" class="form-control" placeholder="Guarantor email" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Guarantor Phone2 </label>
                                                        <input type="text" name="gn_phn[]" name="gn_phn2" id="country" class="form-control" placeholder="Guarantor Phone" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="hidden" name="username" id="username" value="<?= $ses_var;?>">
                                                    <button type="submit" name="reg" id="reg" class="btn btn-primary btn-lg">Submit</button>
                                                </div>

                                            </div>
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


<?php include 'inc/footer.php'; ?>