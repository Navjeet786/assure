<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register | Assure - Admin</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
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
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand login-brand-color">
            	<img alt="image" src="assets/img/a-logo.png" style="width: 300px; height: 55px; object-fit: contain;" />
            </div>
            <div class="card card-auth">
              <div class="card-header card-header-auth">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <div class="col-md-12 result"></div>
                <form method="post" id="register-form">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <input type="hidden" name="action" id="action" value="register-admin">
                    <button name="register" id="" type="submit" class="btn btn-auth-color btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>

                <script type="text/javascript">
                  $(document).ready(function(){
                    $('#register-form').on('submit', function(e){
                        e.preventDefault();
                        var fname = $('#frist_name');
                        var lname = $('#last_name');
                        var pass = $('#password');
                        var cpass = $('#password2');
                        var email = $('#email');
                        var action = $('#action');

                          if (fname.val() == '') {
                            fname.css('border', '1px solid red');
                            alert("First Name Required");
                          }

                          else if (lname.val() == '') {
                            lname.css('border', '1px solid red');
                            alert("Last Name Required");
                          }

                          else if (email.val() == '') {
                            email.css('border', '1px solid red');
                            alert("Email Required");
                          } 

                          else if (pass.val() == '') {
                            pass.css('border', '1px solid red');
                            alert("Password Required");
                          }

                          else if (cpass.val() == '') {
                            cpass.css('border', '1px solid red');
                            alert("Confirm Passwrod Required");
                          }

                         else  if (pass.val()!= cpass.val()) {
                            cpass.css('border', '1px solid red');
                            alert("Password Not Matched");
                          }
                          else {
                             // alert("Looks Good");
                             $.ajax({
                                  url:'admin-action.php',
                                  type:'POST',
                                  data:$('#register-form').serialize(),
                                  beforeSend:function(){
                                    $('#register').html('Connecting Please Wait.........');
                                  },
                                  success:function(data){
                                    $('#register-form')[0].reset();
                                    $('.result').html(data);
                                    $('#register').html('Register');
                                  }
                             });
                          }

                    });
                  });
                </script>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="index.php">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  
</body>

</html>