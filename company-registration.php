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


    <div class="listing-widget-section pt-100 pb-70">
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
                                        <?php if (isset($_SESSION['cmp_reg_scs'])): ?>
                                            <p class="alert alert-success">
                                                <?= $_SESSION['cmp_reg_scs'];?>
                                            </p>
                                        <?php endif ?>
                                        <?php unset($_SESSION['cmp_reg_scs']); ?>

                                        <?php if (isset($_SESSION['cmp_reg_err'])): ?>
                                            <p class="alert alert-danger">
                                                <?= $_SESSION['cmp_reg_err'];?>
                                            </p>
                                        <?php endif ?>
                                        <?php unset($_SESSION['cmp_reg_err']); ?>

                                        <?php if (isset($_SESSION['ucd_err'])): ?>
                                            <p class="alert alert-danger">
                                                <?= $_SESSION['ucd_err'];?>
                                            </p>
                                        <?php endif ?>
                                        <?php unset($_SESSION['ucd_err']); ?>

                                        <?php if (isset($_SESSION['cl_err'])): ?>
                                            <p class="alert alert-danger">
                                                <?= $_SESSION['cl_err'];?>
                                            </p>
                                        <?php endif ?>
                                        <?php unset($_SESSION['cl_err']); ?>


                                        <form method="post" action="company-registration-query.php" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6" style="margin-bottom: 15px;">
                                                    <div class="form-group">
                                                        <?php
                                                        $qry = "SELECT * FROM `worker-category` ORDER BY id DESC";
                                                        $run = $db->select($qry);
                                                        $rows = array();
                                                        while($row = $run->fetch_array()){
                                                            $rows[] = $row;
                                                        }
                                                        ?>
                                                        <label>Company Register For <sup class="text-danger">*</sup></label>
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
                                                        <label>Company Name <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="cn" id="cn" class="form-control" placeholder="Company Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Company Contact Person <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="ccp" id="ccp" class="form-control" placeholder="Company Contact Person" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Personal Number <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="pn" id="pn" class="form-control" placeholder="Personal Number" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Company Phone Number <sup class="text-danger">*</sup></label>
                                                        <input type="text" name="cpn" id="cpn" class="form-control" placeholder="Company Phone Number" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Upload CAC Document <sup class="text-danger">*</sup></label>
                                                        <input type="file" name="ucd" id="ucd" class="form-control" placeholder="Upload CAC Document" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Address <sup class="text-danger">*</sup></label>
                                                        <textarea name="address" id="address" cols="10" rows="3" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Company Website </label>
                                                        <input type="text" name="cw" id="cw" class="form-control" placeholder="http://example.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Company Logo </label>
                                                        <input type="file" name="cl" id="cl" class="form-control" placeholder="Company Logo">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <script src="//cdn.ckeditor.com/4.16.0/basic/ckeditor.js"></script>
                                                        <label>About Company <sup class="text-danger">*</sup></label>
                                                        <textarea name="ac" id="ac" cols="15" rows="5"></textarea>
                                                        <script>
                                                            CKEDITOR.replace( 'ac' );
                                                        </script>
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