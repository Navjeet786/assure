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
                <div class="col-lg-4">
                    <div class="listing-section-right">
                        <h3 class="title"> <i class="flaticon-filter"></i> Filters</h3>
                        <div class="listing-right-form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <i class='flaticon-filter'></i>
                                            <select class="form-control">
                                                <option>All Listing Type</option>
                                                <option>Restaurants</option>
                                                <option>Events</option>
                                                <option>Hotels</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <i class='flaticon-loupe'></i>
                                            <input type="text" class="form-control" placeholder="What Are Searching*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <i class='flaticon-menu'></i>
                                            <input type="text" class="form-control" placeholder="All Cities">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <i class='flaticon-list'></i>
                                            <select class="form-control">
                                                <option>All Category</option>
                                                <option>Restaurants</option>
                                                <option>Events</option>
                                                <option>Hotels</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <i class="flaticon-calendar"></i>
                                            <input type="text" class="form-control" placeholder="Date & Time">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="facilities-list">
                            <h3 class="facilities-title"> Facilities</h3>
                            <ul>
                                <li>
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Air Conditioned
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Non-smoking
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Elevator building
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Free Parking
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Pet Friendly
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Free WiFi
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <button type="submit" class="default-btn border-radius">
                                Search Result
                                <i class='bx bx-plus'></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="listing-widget-into">
                        <div class="col-md-12">
                            <h4 class="text-center" style="font-weight: 400;">Please complete your profile</h4>
                            <p class="text-center text-danger">Please select account type</p>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="place-list-item">
                                    <div class="images">
                                        <a href="#" class="images-list">
                                            <img src="assets/img/img11.jpg" alt="Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="individual-registration.php?username=<?php echo $ses_var;?>">
                                            <h3>Individual registration</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="place-list-item">
                                    <div class="images">
                                        <a href="#" class="images-list">
                                            <img src="assets/img/img12.jpg" alt="Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="company-registration.php?username=<?php echo $ses_var;?>">
                                            <h3>Registering as a company</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($_SESSION['confirm'])): ?>
    <!---- Start Modal ---->
      <div class="modal fade" id="myModal-1">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <p class="modal-title">Email verified successfully | Please complete your profile  </p>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
               <p class="text-success" style="font-weight: 500;"><i class="fa fa-check-circle-o" style="font-size: 23px;"></i> <?= $_SESSION['confirm']; ?></p>
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
<?php unset($_SESSION['confirm']) ?>
<?php endif ?>

<?php include 'inc/footer.php'; ?>