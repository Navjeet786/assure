<?php include 'inc/header.php'; ?>
<!-- ====== End Header ===== -->
<?php include 'inc/sidebar.php'; ?>
<!-- ====== End Sidebar ===== -->    
   <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="section-header-breadcrumb-content">
                  <h1>Create New Location</h1>
                  <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#"><i class="fas fa-home"></i></a></div>
                    <div class="breadcrumb-item"><a href="#">Location</a></div>
                    <div class="breadcrumb-item"><a href="#">Create New Location</a></div>
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
                        <a class="nav-link active" href="#">Add Location Content</a>
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
                    <h4>Write Your Location</h4>
                  </div>
                  <div class="card-body">
                   <form method="post" id="add-post-form">
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-2">Location Title</label>
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
                        <label class="col-form-label text-md-right col-2">Location Image</label>
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


                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-2">Address</label>
                      <div class="col-sm-12 col-md-9">
                        <script src="https://cdn.ckeditor.com/4.14.1/basic/ckeditor.js"></script>
                        <textarea name="loc" id="loc" class="form-control" placeholder="Post Description"></textarea>
                          <script>
                              CKEDITOR.replace( 'loc' );
                          </script>
                      </div>
                    </div>

                    
                   
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-2"></label>
                      <div class="col-sm-12 col-md-9">
                         <input type="hidden" name="action" id="action" value="add-location">
                          <input type="hidden" name="user" id="user" value="<?= $ses_row['username'];?>">
                        <button class="btn btn-primary" name="ps" id="ps">Publish Location</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </form>

              <script>
                  $(document).ready(function(){
                        $('#add-post-form').on('submit', function(e){
                          e.preventDefault();
                          var lt = $('#lt');
                          var lf = $('#f');
                          //var pd = $('#post_content');
                          var user = $('#user');
                          var action = $('#action');

                          var post_body = CKEDITOR.instances["loc"].getData();
                            for (instance in CKEDITOR.instances) 
                                {
                                    CKEDITOR.instances[instance].updateElement();
                                    //CKEDITOR.instances[instance].setData('');
                                }


                            if (lt.val() == '') {
                              lt.css('border', '1px solid red');
                              alert("Required Location Title");
                              return false;
                            }
                            
                            
                            

                            else if(!post_body){
                             // body.css('border', '1px solid red');
                             e.preventDefault();
                              alert("Required Location Address");
                              return false;
                            }

                            else {
                              //alert("Looks Good");
                              $.ajax({
                                url:'location-action.php',
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
                                  $('#ps').html('Publish Location');
                                  var post_body = CKEDITOR.instances["loc"].getData();
                                  for (instance in CKEDITOR.instances) 
                                      {
                                          CKEDITOR.instances[instance].updateElement();
                                          CKEDITOR.instances[instance].setData('');
                                      }
                              
                                    $("#post_loads").load(location.href + " #post_loads");  
                                    /*setTimeout(function(){
                                        location.reload(true);
                                      }, 1000);
                                    return true;*/    

                                } 
                              });
                            }
                        });
                      });
                    </script>

              
          </div>
        </section>
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
      </div>
<?php include 'inc/footer.php'; ?>
<!-- ====== End Footer ===== --> 

