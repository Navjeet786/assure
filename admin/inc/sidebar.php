     <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="dashboard.php">
              <img alt="image" src="assets/img/a-logo.png" style="width: 80%; height: 55px; object-fit: content;" />
            </a>
          </div>
          <ul class="sidebar-menu">
          	<li class="dropdown active" style="display: block;">
          		 <div class="sidebar-profile">
	                 <div class="siderbar-profile-pic">
	                     <img src="assets/img/users/user-1.png" class="profile-img-circle box-center" alt="User Image">
	                 </div>
	                 <div class="siderbar-profile-details">
	                     <div class="siderbar-profile-name"> <?= $ses_row['first_name'].' '.$ses_row['last_name']; ?> </div>
	                     <div class="siderbar-profile-position"><?= $ses_row['role']; ?> </div>
	                 </div>
	                 <div class="sidebar-profile-buttons">
	                     <a class="tooltips waves-effect waves-block toggled" href="profile.html" data-toggle="tooltip" title="" data-original-title="Profile">
	                         <i class="fas fa-user sidebarQuickIcon"></i>
	                     </a>
	                     <a class="tooltips waves-effect waves-block" href="email-inbox.html" data-toggle="tooltip" title="" data-original-title="Mail">
	                         <i class="fas fa-envelope sidebarQuickIcon"></i>
	                     </a>
	                     <a class="tooltips waves-effect waves-block" href="chat.html" data-toggle="tooltip" title="" data-original-title="Chat">
                        <i class="fas fa-comment-dots  sidebarQuickIcon"></i>
	                     </a>
	                     <a class="tooltips waves-effect waves-block" href="auth-login.html" data-toggle="tooltip" title="" data-original-title="Logout">
                        <i class="fas fa-share-square sidebarQuickIcon"></i>
	                     </a>
	                 </div>
                 </div>
             </li>
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="dashboard.php" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="all-workers.php">All Workers</a></li>
                    <li><a class="nav-link" href="add-new-workers.php">Add New Workers</a></li>
                    <li><a class="nav-link" href="workers-cotegories.php">Workers categories</a></li>
                </ul>
            </li>
            <li class="dropdown active">
              <a href="dashboard.php" class="nav-link"><i class="fas fa-desktop"></i><span>Companies</span></a>
            </li>
            <!--li><a class="nav-link" href="location.php"><i class="fas fa-map-marker-alt"></i><span>Location</span></a></li-->
            

          </ul>
        </aside>
      </div>