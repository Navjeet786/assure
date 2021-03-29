<?php include 'inc/header.php'; ?>
<!-- ====== End Header ===== -->
<?php include 'inc/sidebar.php'; ?>
<!-- <?php
session_start();
echo $SESSION['a'];
?> -->
<!-- ====== End Sidebar ===== -->    
   <!-- Main Content -->
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
                            <?php
                            include "lib/dbcon.php";

                            $data = "select * from category";
                            //$run = $db->select($data);
                            $query = mysqli_query($con,$data);

                           while ($result = mysqli_fetch_array($query)) {

                              ?>
                               

                            
                            <tr>
                              <td><?php echo $result['id']?></td>
                              <td><?php echo $result['category_name']?></td>
                              <td>
                        <img src="<?php echo $result['image']?>"  style="width:100px;height:50px;"><br><br>
                         <a  class="btn btn-outline-primary" href="javascript:void(0)" data-toggle="modal" data-target="#aa" style="display:none; ">update image</a>
                <!--  <form method="post" action="update_image.php" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php //echo$result['id']?>">
              <input type="file" name="image">
              <input type="submit" name="" value="update image">
             </form>  -->
                              </td>
                             
                              <td><a href="category_edit.php?id=<?php echo $result['id']?>" class="btn btn-outline-primary" >Edit</a>
                                <a href="category_delete.php?id=<?php echo $result['id']?>" class="btn btn-outline-primary">Delete</a></td>
                            </tr>
                          <?php
                          }
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

<!-- 
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

              <form method="post" id="add-post-form">
                  <div class="modal-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-2">Title</label>
                            <div class="col-sm-12 col-md-9">
                              <input type="text" name="lt" id="lt" class="form-control" placeholder="Location">
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
                                <input type="file" name="lf" id="lf" class="form-control" placeholder="Location Image" accept="image/*" onchange="loadFile(event)">
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
                    <input type="hidden" name="user" id="user" value="<//ses_row['username'];?>">
                    <button type="submit" class="btn btn-primary" name="ps" id="ps">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </form>

            </div>
          </div>
        </div>

        <script>
              $(document).ready(function(){
                    $('#add-post-form').on('submit', function(e){
                      e.preventDefault();
                      var lt = $('#lt');
                      var lf = $('#lf');
                      //var pd = $('#post_content');
                      var user = $('#user');
                      var action = $('#action');

                      


                        if (lt.val() == '') {
                          lt.css('border', '1px solid red');
                          alert("Required Location Title");
                          return false;
                        }

                        else if (lf.val() == '') {
                          lf.css('border', '1px solid red');
                          alert("Required Location Title");
                          return false;
                        }
                        
                        

                        else {
                          //alert("Looks Good");
                          $.ajax({
                            url:'query-action.php',
                            type:'POST',
                            data:new FormData(this),  
                            contentType:false,  
                            //cache:false,  
                            processData:false,
                            beforeSend:function(){
                             
                              $('#ps').html('Publishing...........');
                            },
                            success:function(data){
                              alert(data);
                              $('#add-post-form')[0].reset();
                              $('#ps').html('Submit');
 
                                setTimeout(function(){
                                    location.reload(true);
                                  }, 1000);
                                return true;    

                            } 
                          });
                        }
                    });
                  });
                </script>


        <div class="settingSidebar">
      <a href="javascript:void(0)" class="settingPanelToggle"> <i
        class="fa fa-spin fa-cog"></i>
      </a>
      <div class="settingSidebar-body ps-container ps-theme-default">
        <div class=" fade show active">
          <div class="setting-panel-header">Theme Customizer</div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Theme Layout</h6>
            <div class="selectgroup layout-color w-50">
              <label> <span class="control-label p-r-20">Light</span>
                <input type="radio" name="custom-switch-input" value="1"
                class="custom-switch-input" checked> <span
                class="custom-switch-indicator"></span>
              </label>
            </div>
            <div class="selectgroup layout-color  w-50">
              <label> <span class="control-label p-r-20">Dark&nbsp;</span>
                <input type="radio" name="custom-switch-input" value="2"
                class="custom-switch-input"> <span
                class="custom-switch-indicator"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Sidebar Colors</h6>
          <div class="sidebar-setting-options">
            <ul class="sidebar-color list-unstyled mb-0">
              <li title="white" class="active">
                <div class="white"></div>
              </li>
              <li title="blue">
                <div class="blue"></div>
              </li>
              <li title="coral">
                <div class="coral"></div>
              </li>
              <li title="purple">
                <div class="purple"></div>
              </li>
              <li title="allports">
                <div class="allports"></div>
              </li>
              <li title="barossa">
                <div class="barossa"></div>
              </li>
              <li title="fancy">
                <div class="fancy"></div>
              </li>
            </ul>
          </div>
    
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Theme Colors</h6>
          <div class="theme-setting-options">
            <ul class="choose-theme list-unstyled mb-0">
              <li title="white" class="active">
                <div class="white"></div>
              </li>
              <li title="blue">
                <div class="blue"></div>
              </li>
              <li title="coral">
                <div class="coral"></div>
              </li>
              <li title="purple">
                <div class="purple"></div>
              </li>
              <li title="allports">
                <div class="allports"></div>
              </li>
              <li title="barossa">
                <div class="barossa"></div>
              </li>
              <li title="fancy">
                <div class="fancy"></div>
              </li>
              
            </ul>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Layout Options</h6>
          <div class="theme-setting-options">
            <label> <span class="control-label p-r-20">Compact
                Sidebar Menu</span> <input type="checkbox"
              name="custom-switch-checkbox" class="custom-switch-input"
              id="mini_sidebar_setting"> <span
              class="custom-switch-indicator"></span>
            </label>
          </div>
        </div>
        <div class="mt-3 mb-3 align-center">
          <a href="#"
            class="btn btn-icon icon-left btn-outline-primary btn-restore-theme">
            <i class="fas fa-undo"></i> Restore Default
          </a>
        </div>
      </div>
    </div>
      </div> -->
        <div class="modal fade" id="aaa">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Image</h5>

        <button type="button" class="" data-dismiss="modal">
          <span >&times;</span>
        </button>
        
      </div>
      <div class="modal-body">


    <?php 
include "lib/dbcon.php";

$id = $_GET['id'];
$a = "select * from category where id = $id";
$b = mysqli_query($con,$a);
$result = mysqli_fetch_array($b);



?>  
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
         <form method="post" action="category_update.php" enctype="multipart/form-data">
                              <td><input type="text" name="id" class="form-control" value="<?php echo$result['id']?>"></td>
                              <td >
                                
         <input type="text" name="category" class="form-control" value="<?php echo$result['category_name']?>">
                                </td>
                              <td>
                                <img src="<?php echo $result['image']?>"  style="width:100px;height:50px;">
                                 <!-- <form method="post" action="update_image.php" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php //echo$result['id']?>">
              <input type="file" name="image">
              <input type="submit" name="" value="update image"> -->
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

<!-- <form>
 <img src="<?php //echo $result['image']?>"  style="width:100px;height:50px;"><br><br>
        <form method="post" action="update_image.php" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php //echo$result['id']?>">
              <input type="file" name="image"z>
              <input type="submit" name="" value="update image" class="btn btn-outline-primary">
              -->

            

        


      </div>
         </div>
            </div>   
          </div>
        </div>
      </div>
    </div>
    
<?php include 'inc/footer.php'; ?>
<!-- ====== End Footer ===== --> 

