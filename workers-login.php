<?php
    include 'lib/main.php';
    $db = new Main;

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
    <title>Assure - Proffessional Home Service Provider</title>

    <link rel="icon" type="image/png" href="assets/img/a-logo.png">
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
</head>

<body>

    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>

    <div class="user-area">
        <div class="container-fluid m-0">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-6  p-0">
                    <div class="user-img">
                        <img src="assets/img/login-img.jpg" alt="Images">
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6">
                    <div class="user-section text-center">
                        <div class="user-content">
                            <img src="assets/img/logo/a-logo.png" alt="logo" style="width:220px; height: 100px; object-fit: contain;">
                            <h2>Welcome <b>To Assure</b></h2>
                        </div>
                        <div class="tab user-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <ul class="tabs">
                                        <li>
                                            <a href="#"> <i class="flaticon-contact"></i> Login</a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="flaticon-verify"></i> Register</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="col-md-12 log-result"></div>
                                    <div class="tab_content current active">
                                        <div class="tabs_item current">
                                            <div class="user-all-form">
                                                <div class="contact-form">
                                                    <form id="contactForm1" method="post">
                                                        <div class="row">
                                                            <div class="col-lg-12 ">
                                                                <div class="form-group">
                                                                    <i class='bx bx-user'></i>
                                                                    <input type="text" name="user" id="user" class="form-control" data-error="Please enter your Username or Email" placeholder="Username or Email">
                                                                    <span id="err" class="text-danger"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <i class='bx bx-lock-alt'></i>
                                                                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                                                                    <span id="err1" class="text-danger"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 text-center">
                                                                <input type="hidden" name="action" id="action" value="login">
                                                                <button type="submit" name="login" id="login" class="default-btn  user-all-btn">
                                                                    Login
                                                                </button>
                                                            </div>
                                                            <div class="col-lg-6 col-sm-6 form-condition">
                                                                <!--div class="agree-label">
                                                                    <input type="checkbox" id="chb1">
                                                                    <label for="chb1">
                                                                        Remember Me
                                                                    </label>
                                                                </div-->
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-6 col-sm-6">
                                                                <a class="forget" href="#">Forgot my password?</a>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <script>
                                                        $(document).ready(function(){
                                                            $('#contactForm1').on('submit', function(e){
                                                                e.preventDefault();
                                                                var user = $('#user');
                                                                var password = $('#password');
                                                                var action = $('#login');
                                                                    if (user.val() == '') {
                                                                        user.css('border', '1px solid red');
                                                                        $('#err').html('Required Username or Email');
                                                                        return false;
                                                                    }
                                                                    else if (password.val() == '') {
                                                                        password.css('border', '1px solid red');
                                                                        $('#err1').html('Required Password');
                                                                        return false;

                                                                    } 
                                                                    else {
                                                                        //return true
                                                                        //alert("Looks Good")
                                                                        $.ajax({
                                                                            url:'query-action.php',
                                                                            type:'POST',
                                                                            data:$('#contactForm1').serialize(),
                                                                            beforeSend:function(){
                                                                                $('#login').html('Connecting Please Wait..........');
                                                                            },
                                                                            success:function(data){
                                                                                if (data == 'success') {
                                                                                    window.location.replace("user-dashboard.php");
                                                                                }
                                                                                else if(data == 'success2'){
                                                                                    window.location.replace("company-dashboard.php");
                                                                                } 
                                                                                else {
                                                                                   $('#contactForm1')[0].reset();
                                                                                   $('#login').html('Login');
                                                                                   $('.log-result').html(data);
                                                                                }
                                                                                
                                                                            }
                                                                        });
                                                                    }
                                                            });
                                                        });
                                                    </script>

                                                    <div class="social-option">
                                                        <h3>Or Login With</h3>
                                                        <ul>
                                                            <li><a href="#">Facebook</a></li>
                                                            <li><a href="#">Twitter</a></li>
                                                            <li><a href="#">Linkedin</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs_item">
                                            <div class="user-all-form">
                                            	
                                                <div class="contact-form">
                                                	<div class="result"></div>
                                                    <form id="contactForms" method="post">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <i class='bx bx-user'></i>
                                                                    <input type="text" name="fn" id="fn" class="form-control" placeholder="First Name">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <i class='bx bx-user'></i>
                                                                    <input type="text" name="ln" id="ln" class="form-control" placeholder="Last Name">
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <i class='flaticon-email-2'></i>
                                                                    <input type="email" name="em" id="em" class="form-control" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <i class='bx bx-lock-alt'></i>
                                                                    <input class="form-control" type="password" name="pwd" id="pwd" placeholder="Password">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 text-center">
                                                            	<input type="hidden" name="action" id="action" value="worker-signup">
                                                                <button type="submit" name="rg" id="rg" class="default-btn  user-all-btn">
                                                                    Register
                                                                </button>
                                                            </div>
                                                            <div class="col-12">
                                                                <p class="account-desc">
                                                                    Already have an account?
                                                                    <a href="#">Login</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="social-option">
                                                        <h3>Or Register With</h3>
                                                        <ul>
                                                            <li><a href="#">Facebook</a></li>
                                                            <li><a href="#">Twitter</a></li>
                                                            <li><a href="#">Linkdin</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <script>
                                                	$(document).ready(function(){
                                                		$('#contactForms').on('submit', function(e){
                                                			e.preventDefault();
                                                			var fn = $('#fn');
                                                			var ln = $('#ln');
                                                			var em = $('#em');
                                                			var pwd = $('#pwd');
                                                			var action = $('#action');

                                                				if (fn.val() == '') {
                                                					fn.css('border', '1px solid red');
                                                					alert("Required First Name");
                                                				}
                                                				else if (ln.val() == '') {
                                                					ln.css('border', '1px solid red');
                                                					alert("Required Last Name");
                                                				}
                                                				else if (em.val() == '') {
                                                					em.css('border', '1px solid red');
                                                					alert("Required Email");
                                                				}
                                                				else if (pwd.val() == '') {
                                                					pwd.css('border', '1px solid red');
                                                					alert("Required Password");
                                                				}
                                                				else{
                                                					//alert("LOOKS GGOD");
                                                					$.ajax({
                                                						url:'query-action.php',
                                                						type:'POST',
                                                						data:$('#contactForms').serialize(),
                                                						beforeSend:function(){
                                                							$('#rg').html('Connecting Please Wait.........');
                                                						},
                                                						success:function(data){
                                                							$('#contactForms')[0].reset();
                                                							$('#rg').html('Register');
                                                							$('.result').html(data);
                                                						}
                                                					});
                                                				}

                                                		});
                                                	});
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php if (isset($_SESSION['confirm_error'])): ?>
    <!---- Start Modal ---->
      <div class="modal fade" id="myModal-2">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Something went wrong try again later</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
               <h4 class="text-danger" style="font-weight: 500;"><i class="fa fa-times" style="font-size: 23px;"></i> <?= $_SESSION['confirm_error']; ?></h4>
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
                $('#myModal-2').modal('show');
            });
        });
    </script>
    <?php unset($_SESSION['confirm_error']) ?>
<?php endif ?>

    

    <script src="assets/js/popper.min.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>

    <script src="assets/js/bootstrap.min.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>

    <script src="assets/js/owl.carousel.min.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>

    <script src="assets/js/jquery.magnific-popup.min.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>

    <script src="assets/js/wow.min.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>

    <script src="assets/js/meanmenu.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>

    <script src="assets/js/jquery.nice-select.min.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>

    <script src="assets/js/form-validator.min.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>

    <script src="assets/js/contact-form-script.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>

    <script src="assets/js/custom.js" type="da7bd379cbb37e12c80bfc2b-text/javascript"></script>
    <script src="http://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="da7bd379cbb37e12c80bfc2b-|49" defer=""></script>
</body>

</html>