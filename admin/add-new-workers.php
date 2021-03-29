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
                  <h1>Workers Categories</h1>
                  <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#"><i class="fas fa-home"></i></a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item"><a href="#">add-new-workers</a></div>
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
        
        </section>
        <div class="row">
  <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> ADD Individual Registration</h4>
                  </div>
                  <div class="card-body">
                    <div class="content contact-form">
   <form method="post"  action="individual_registration_insert.php" >
                                            <h5 style="font-weight: 400;">Basic Information</h5>
                                            <div class="row">
                                         <!-- <div class="col-md-12">
                                        <div class="form-group">
                                        <label> username</label>
                                        <input type="text" name="username"  class="form-control"  required>
                                        </div>
                                                </div> -->
                <div class="col-md-12">
               <div class="form-group">
               <label> Username</label>
               <input type="text" name="username" class="form-control" >
               </div>
               </div>
               <div class="col-md-6">
               <div class="form-group">
               <label> First Name</label>
               <input type="text" name="fn" class="form-control" >
               </div>
               </div>
               <div class="col-md-6">
               <div class="form-group">
               <label> Last Name</label>
              <input type="text" name="ln"  class="form-control" >
                </div>
               </div>
              <div class="col-md-6">
              <div class="form-group">
              <label> Email</label>
             <input type="text" name="email" class="form-control" >
             </div>
             </div>
             <div class="col-md-6">
             <div class="form-group">
             <label> Password</label>
             <input type="password" name="password" class="form-control" >
                  </div>
                  </div>
              <div class="col-md-12">
               <h5 style="font-weight: 400;">Additional Information</h5>
               </div>
                <div class="col-md-6">
                <div class="form-group">
                 <label> Job Role</label>
                 <select name="apply" class="form-control">
                   <option id='Electrician'>Electrician</option>
             <option id='Plumber'>Plumber</option>
             <option id='Mechanic'>Mechanic</option>
            <option id='Auto Electrician'>Auto Electrician</option>
             <option id='Painter'>Painter</option>
             <option id='Meson'>Meson</option>
             <option id='Bricklayer'>Bricklayer</option>
           <option id='Fumigation'>Fumigation</option>
           <option id='Capinter'>Capinter</option>
             <option id='Driver'>Driver</option>
             <option id='Cook'>Cook</option>
            <option id='Gerdner'>Gerdner</option>
            <option id='Drycleaner'>Drycleaner</option>
             <option id='House Manager Male'>House Manager Male</option>
            <option id='House Manager Female'>House Manager Female</option>
              <option id='Cleaners'>Cleaners</option>
             <option id='Stewards'>Stewards</option>
                 <option id='Waiter'>Waiter</option>
                 </select>
                                                       
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label> BVN</label>
                <input type="text" name="bvn"  class="form-control" required>
                </div>
                </div>
                <div class="col-md-4">
                 <div class="form-group">
                 <label> Passport</label>
                                                        <input type="text" name="pp"  class="form-control"  required>
                                                    </div>
                                                </div>
                    <div class="col-md-4">
                    <div class="form-group">
                    <label> Gender</label>
                    <select name="gender" class="form-control">
                      <option>male</option>
                      <option>Female</option>
                    </select>
                   
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Phone</label>
                                                        <input type="text" name="phn"  class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h5 style="font-weight: 400;">Address/Qualification/Experience - Information</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Address</label>
                                                        <input type="text" name="address"  class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> City</label>
                                                        <input type="text" name="city"  class="form-control"required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> State</label>
                                                        <input type="text" name="state" class="form-control"  required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Country</label>
                                                        <input type="text" name="country"  class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Qualification</label>
                                                        <input type="text" name="edu"  class="form-control"  required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Experience</label>
                                                        <input type="text" name="exp"  class="form-control"  required>
                                                    </div>
                                                </div>
                                            </div>
                                         
  <input type="submit" name="login"  class="btn btn-outline-primary" value="Add Registration">
                                                    
                                             </input>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                              </div>     
                            </div>         
        <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Individual Registration</h4>
                  </div>
                  <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered table-md">
                            <tbody>
                              <tr>
                              <th>id</th>
                             
                              <th>Appy For</th>
                              <th>BVN</th>
                              <th>passport</th>
                              <th>Gender</th>
                              <th>Phone</th> 
                              <th>Address</th>
                              <th>Country</th>
                              <th>State</th>
                              <th>City</th>
                              <th>Qualification</th>
                              <th>work experience</th>
                              <th>Guarantor Name</th>
                              <th>Guarantor email</th>
                              <th>Guarantor phone</th>
                             <!-- <th>Guarantor Name 2</th>
                              <th>Guarantor email 2</th>
                              <th>Guarantor phone 2</th> -->
                              <th>Action</th>
                            </tr>
                            <?php
                            include "lib/dbcon.php";

                            $data = "select * from individual_register_profile";
                            //$run = $db->select($data);
                            $query = mysqli_query($con,$data);

                           while ($result = mysqli_fetch_array($query)) {

                              ?> 

                             
                           <?php
                            include "lib/dbcon.php";

                            $guarantor_data = "select * from individual_guarantor";
                            //$run = $db->select($data);
                            $sql = mysqli_query($con,$guarantor_data);

                           while ($guar_data = mysqli_fetch_array($sql)) {

                              ?> 

                               

                            
                            <tr>
                              <td><?php echo$result['id']?></td>
                              
                              
                              <td><?php echo$result['apply_for']?></td>
                              <td><?php echo$result['bvn']?></td>
                              <td><?php echo$result['passport']?></td>
                              <td><?php echo$result['gender']?></td>
                              <td><?php echo$result['phone']?></td>
                              <td><?php echo$result['address']?></td>
                              <td><?php echo$result['country']?></td>
                               <td><?php echo$result['state']?></td>
                              <td><?php echo$result['city']?></td>
                            <td><?php echo$result['qualification']?></td>
                               <td><?php echo$result['work_exp']?></td>
                              <td><?php echo$guar_data['gn_name']?></td>
                            <td><?php echo$guar_data['gn_email']?></td>
                             <td><?php echo$guar_data['gn_phone']?></td>
                             <!--  <td></td>
                              <td></td>
                               <td></td> -->
                             
                               <td><a href="category_edit.php?id=<?php echo $result['id']?>" class="btn btn-outline-primary">Edit</a>
                                <a href="category_delete.php?id=<?php echo $result['id']?>" class="btn btn-outline-primary">Delete</a></td>
                            </tr>
                      <?php
                      }
                      ?>
                      <?php
                    }
                      ?>
                    
                          </tbody></table>
                        </div>
                  </div>
<!-- </div>
</div>
</div>-->
</div> 

<br><br>
  <div class="row">
  <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> SIGN UP DATA</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                  <table class="table table-bordered table-md">
                   <tbody>
                     <tr>
                              <th>id</th>
                              <th>username</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Password</th>
                      </tr>    
                       <?php
                            include "lib/dbcon.php";

                            $signup_data = "select * from signup";
                            //$run = $db->select($data);
                            $qry = mysqli_query($con,$signup_data);

                           while ($signup = mysqli_fetch_array($qry)) {

                        ?>

                        <tr>
                           <td><?php echo$signup['id']?></td>
                         <td><?php echo$signup['username']?></td>

                         <td><?php echo$signup['first_name']?></td>
                         <td><?php echo$signup['last_name']?></td>
                              <td><?php echo$signup['email']?></td>
                          <td><?php echo$signup['password']?></td> 
                        </tr> 
<?php
}
?>

                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>



                              
              
<?php include 'inc/footer.php'; ?>
<!-- ====== End Footer ===== --> 

