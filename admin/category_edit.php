<?php include 'inc/header.php'; ?>
<!-- ====== End Header ===== -->
<?php include 'inc/sidebar.php'; ?>
<!-- ====== End Sidebar ===== -->    
   <!-- Main Content -->
  <?php 
include "lib/dbcon.php";

$id = $_GET['id'];
$a = "select * from category where id = $id";
$b = mysqli_query($con,$a);
$result = mysqli_fetch_array($b);



?>
   
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="section-header-breadcrumb-content">
                  <h1>Workers Categories</h1>
                  <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#"><i class="fas fa-home"></i></a></div>
                    <div class="breadcrumb-item"><a href="#">Categories</a></div>
                    <div class="breadcrumb-item"><a href="#">Workers Categories</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="section-header-breadcrumb-chart float-right">
                  <div class="breadcrumb-chart m-l-50">
                    <div class="float-right">
                      <div class="icon m-b-10">
                        <div class="chart header-bar">
                          <canvas width="49" height="40" ></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="float-right m-r-5 m-l-10 m-t-1">
                      <div class="chart-info">
                        <span>$10,415</span>
                        <p>Last Week</p>
                      </div>
                    </div>
                  </div>
                
                  <div class="breadcrumb-chart m-l-50">
                    <div class="float-right">
                      <div class="icon m-b-10">
                        <div class="chart header-bar2">
                          <canvas width="49" height="40" ></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="float-right m-r-5 m-l-10 m-t-1">
                      <div class="chart-info">
                        <span>$22,128</span>
                        <p>Last Month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0)" data-toggle="modal" data-target="#centerModal"> + Categories</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <br>
            

        <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Categories</h4>
                     </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered table-md">
                            <tbody><tr>
                              <th>id</th>
                              <th>Categories-name</th>
                              <th>image</th>
                              
                              <th>Action</th>
                              </tr>
                           
                            
                            <tr>
         <form method="post" action="update_image.php" enctype="multipart/form-data">
           <td>
           <input type="hidden" name="id" class="form-control" value="<?php echo$result['id']?>">
           </td>
           <td >
          <input type="text" name="category" class="form-control" value="<?php echo$result['category_name']?>">
           </td>
          <td>
           <img src="<?php echo $result['image']?>"  style="width:100px;height:50px;"><br>

          <input type="hidden" name="id" value="<?php echo$result['id']?>">
          <input type="file" name="image" >
              <!-- <input type="submit" name="" value="update image"> -->
          </td>
                             
          <td><a href="workers-cotegories.php"><input type="submit" name="update" value="update" class="btn btn-outline-primary"></a>
           </td>
          </form>
                            </tr>
                          <?php
                          //}
                          ?>

                          </tbody></table>
                        </div>
                  </div>


         <!-- Center -->
       

        <div class="modal fade" id="centerModal" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add Categories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form method="post" action="category_insert.php" enctype="multipart/form-data">
                  <div class="modal-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-2">Title</label>
                            <div class="col-sm-12 col-md-9">
                              <input type="text" name="title" id="lt" class="form-control" placeholder="Location">
                            </div>
                        </div>


                        <style>
                            #output{
                                  width:220px; 
                                  height:auto; 
                                  object-fit: cover;
                              }
                        </style>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-2">Image</label>
                            <div class="col-sm-12 col-md-9">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="images"  class="form-control" placeholder="Location Image"  accept="image/*" onchange="loadFile(event)" >
                                <br>
                                <img id="output" class="img-fluid" />
                            </div>
                        </div>

                      <script>
                        var loadFile = function(event) {
                          var output = document.getElementById('output');
                          output.src = URL.createObjectURL(event.target.files[0]);
                          output.onload = function() {
                            URL.revokeObjectURL(output.src) // free memory
                          }
                        };
                      </script>


                  </div>
                  <div class="modal-footer bg-whitesmoke br">
                    <input type="hidden" name="action" id="action" value="add-location">
                    <input type="hidden" name="user" id="user" value="<?= $ses_row['username'];?>">
                    <button type="submit" class="btn btn-primary" name="ps" id="ps">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </form>

            </div>
          </div>
        </div>

      
<?php include 'inc/footer.php'; ?>
<!-- ====== End Footer ===== --> 

