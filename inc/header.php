        <!-- Pre Loader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- End Pre Loader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="./" class="logo">
                    <img src="assets/img/logo/logos.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="nav-two main-nav">
                <div class="container-fluid">
                    <nav class="container-max navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="./">
                            <img src="assets/img/logo/a-logo.png" alt="Logo" style="height: 65px; object-fit: cover">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="./" class="nav-link active">
                                        Home 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                       Need A Worker
                                    </a>
                                </li>

                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                       Quick Service
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class='bx bx-plus'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Blog Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Contact
                                    </a>
                                </li>

                            </ul>

                            <div class="side-nav d-in-line align-items-center">
                                <div class="side-item">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-bags"></i>
                                            <span>0</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="side-item">
                                    <div class="search-box">
                                        <i class="flaticon-loupe"></i>
                                    </div>
                                </div>


                                <?php if (isset($_SESSION['username'])): ?>
                                    <div class="side-item dropdown">
                                        <div class="nav-add-btn">
                                            <a href="#" class="default-btn dropdown-toggle" data-toggle="dropdown">
                                                <?= $ses_row['first_name'].' '.$ses_row['last_name']; ?> <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dashboard</a></li>
                                                <li><a href="logout.php">Logout</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <?php else:?>
                                    <div class="side-item">
                                        <div class="nav-add-btn">
                                            <a href="workers-login.php" class="default-btn">
                                                Login/Signup
                                            </a>

                                        </div>
                                    </div>
                                <?php endif ?>


                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="side-nav-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center"  align-items-"center">
                                <div class="side-item">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-bags"></i>
                                            <span>0</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="side-item">
                                    <div class="search-box">
                                        <i class="flaticon-loupe"></i>
                                    </div>
                                </div>

                                <div class="side-item">
                                    <div class="user-btn">
                                        <a href="#">
                                            <i class="flaticon-contact"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="side-item">
                                    <div class="nav-add-btn">
                                        <a href="#" class="default-btn border-radius">
                                           Register As A Worker
                                           
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
