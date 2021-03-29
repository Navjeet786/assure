<?php
  include 'lib/main.php';
  $db = new Main;
    $msg_err = '';
    if (isset($_POST['login'])) {
        $user = mysqli_real_escape_string($db->link, $_POST['user']);
        $pwd = mysqli_real_escape_string($db->link, $_POST['password']);

        $qry = "SELECT * FROM `admin-login` WHERE username = '".$user."' OR email = '".$user."'";
        $run = $db->select($qry);
            if ($run->num_rows > 0) {
                while ($row = $run->fetch_array()) {
                    if (password_verify($pwd, $row['password'])) {
                        $_SESSION['username'] = $user;
                        header("location: dashboard.php");
                    } 
                    else {
                        $msg_err = '<p class="alert alert-danger" style="padding:8px;">Password Incorrect</p>';
                    }
                    
                }
            } 
            else 
            {
               $msg_err = '<p class="alert alert-danger" style="padding:8px;">Invalid User</p>';
            }
            
    }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login | Assure - Admin</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/a-logo.png' />

  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
</head>

<body class="background-image-body">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand login-brand-color">
            	<img alt="image" src="assets/img/a-logo.png" style="width: 300px; height: 55px; object-fit: contain;" />
            </div>
            <div class="card card-auth">
              <div class="card-header card-header-auth">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <?php if (isset($msg_err)): ?>
                    <?php echo $msg_err; ?>
                <?php endif ?>
                <form method="post" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="user">Username or Email</label>
                    <input id="user" type="text" class="form-control" name="user" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="#" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button name="login" id="login" type="submit" class="btn btn-lg btn-block btn-auth-color" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <script>
                  $(document).ready(function(){
                      $('#login').on('click', function(){
                          var user = $('#user');
                          var pass = $('#password');
                            if (user.val() == '') {
                                user.css('border', '1px solid red');
                                alert("Username or Email Required");
                                return false;
                            }
                            else if (pass.val() == '') {
                                pass.css('border', '1px solid red');
                                alert("Password Required");
                                return false;
                            }
                            else{
                              return true;
                            }

                      });
                  });
                </script>
                <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="register.php">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  
</body>

</html>