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
									<h1>Posts</h1>
                  <div class="section-header-button">
                    <a href="create-post.html" class="btn btn-primary">Add New</a>
                  </div>
                  <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#"><i class="fas fa-home"></i></a></div>
                    <div class="breadcrumb-item"><a href="#">Blog</a></div>
                    <div class="breadcrumb-item"><a href="#">All Posts</a></div>
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
                        <a class="nav-link active" href="#">All <span class="badge badge-white">10</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Draft <span class="badge badge-primary">2</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pending <span class="badge badge-primary">3</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Trash <span class="badge badge-primary">0</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Posts</h4>
                  </div>
                  <div class="card-body">
                    <div class="float-left">
                      <select class="form-control selectric">
                        <option>Action For Selected</option>
                        <option>Move to Draft</option>
                        <option>Move to Pending</option>
                        <option>Delete Permanently</option>
                      </select>
                    </div>
                    <div class="float-right">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="clearfix mb-3"></div>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>#</th>
                          <th>Author</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Created At</th>
                          <th>Status</th>
                          <th></th>
                        </tr>

                        <?php 
                            $qry1 = "SELECT * FROM `post` ORDER BY id DESC";
                            $run1 = $db->select($qry1);
                            $rows1 = array();
                            while ($row1 = $run1->fetch_array()) {
                              $rows1[] = $row1;
                            }
                            $sn = 1;
                        ?>

                        <?php if ($run1->num_rows > 0): ?>
                          <?php foreach ($rows1 as $key => $row1): ?>
                            <?php 
                                $qry2 = "SELECT * FROM `category` WHERE id = '".$row1['category_id']."'";
                                $run2 = $db->select($qry2);
                                $row2 = $run2->fetch_array();

                                $qry3 = "SELECT * FROM `signup` WHERE username = '".$row1['post_by']."'";
                                $run3 = $db->select($qry3);
                                $row3 = $run3->fetch_array();
                             ?>
                             <tr>
                               <td><?= $sn; ?></td>
                                <td>
                                  <a href="#">
                                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle" width="35"
                                      data-toggle="title" title="">
                                    <span class="d-inline-block ml-1"><?= $row3['first_name'].' '.$row3['last_name'];?></span>
                                  </a>
                                </td>
                                <td><?= $row1['post_title'];?>
                                  <div class="table-links">
                                    <a href="#">View</a>
                                    <div class="bullet"></div>
                                    <a href="#">Edit</a>
                                    <div class="bullet"></div>
                                    <a href="#" class="text-danger">Trash</a>
                                  </div>
                                </td>
                                <td>
                                  <a href="#"><?= $row2['category_name'];?></a>
                                </td>
                                <td><?= formateDate($row1['post_date']);?></td>
                                <td>
                                  <div class="badge badge-primary">Published</div>
                                </td>
                            </tr>
                            <?php $sn++; ?>
                          <?php endforeach ?>
                          <?php else: ?>
                            <tr>
                              <td colspan="6" class="text-danger">No Post Found</td>
                            </tr>
                        <?php endif ?>
                           
                      </table>
                    </div>
                    <div class="float-right">
                      <nav>
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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