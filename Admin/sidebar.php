<?php 
$sid=$_SESSION['a_id'];
$stmt=$admin->ret("SELECT * FROM `admin` WHERE `admin_id` ='$sid'");
$row =$stmt ->fetch(PDO::FETCH_ASSOC);
?>





<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Blood Bank</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/Soujanya M.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $row['admin_name']?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!-- <a href="signin.php" class="dropdown-item">Sign In</a>
                            <a href="signup.php" class="dropdown-item">Sign Up</a> -->
                            
                           
                            <a href="display_donors.php" class="nav-item nav-link"><i class="fas fa-hand-holding-heart"></i>Manage Donors</a>
                            <a href="display_users.php" class="nav-item nav-link"><i class="fa fa-user"></i>Manage Users</a>
                            <a href="display_requests.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>View Requests</a>
                            <a href="display_feedbacks.php" class="nav-item nav-link"><i class="fas fa-comment"></i>Donor Feedbacks</a>
                            <a href="donations.php" class="nav-item nav-link"><i class="fas fa-donate"></i>Donations</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.php" class="dropdown-item">Buttons</a>
                            <a href="typography.php" class="dropdown-item">Typography</a>
                            <a href="element.php" class="dropdown-item">Other Elements</a>
                        </div>
                    </div> -->
                     <!-- <a href="widget.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a> -->
                    
                    <a href="category_table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Categories</a>
                    <a href="event_table.php" class="nav-item nav-link"><i class="far fa-clipboard"></i>Events</a>
                    <!-- <a href="chart.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
                    <!-- <div class="nav-item dropdown"> -->
                        <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.php" class="dropdown-item">Sign In</a>
                            <a href="signup.php" class="dropdown-item">Sign Up</a>
                            <a href="404.php" class="dropdown-item">404 Error</a>
                            <a href="blank.php" class="dropdown-item">Blank Page</a>
                        </div> -->
                    </div> 
                </div>
            </nav>
        </div>