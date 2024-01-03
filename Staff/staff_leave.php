<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="../assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Woocurs Academy</title>
</head>
<body>
    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">
            <div class="dashboard-header sticky-header">
                <div class="content-left  logo-section pull-left">
                    <h1><a href="../index.html"><img src="assets/images/logo.png" alt=""></a></h1>
                </div>
                <div class="heaer-content-right pull-right">
                    <div class="search-field">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search Now">
                                <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown">
                        
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item profile-sec">
                                <img src="assets/images/comment.jpg" alt="">
                                <span>My Account </span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu account-menu">
                            <ul>
                                <li><a href="staff_edit.php"><i class="fas fa-cog"></i>Edit Profile</a></li>
                                <li><a href="profile_card.php"><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href="staff_change_password.php"><i class="fas fa-key"></i>Password</a></li>
                                <li><a href="login.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-navigation">
                <!-- Responsive Navigation Trigger -->
                <div id="dashboard-Navigation" class="slick-nav"></div>
                <div id="navigation" class="navigation-container">
                    <ul>
                        <li><a href="staff_dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a href="staff_edit.php"><i class="fas fa-user"></i>Edit Profile</a> </li>
                        <li><a href="staff_course.php"> <i class='fa fa-book'></i>Course</a></li>
                        <li ><a href="staff_notes.php"> <i class='fa fa-sticky-note-o'></i>Notes</a></li>
                        </li>
                        <li><a href="staff_assigment.php"><i class="fa fa-tasks"></i>Assigment</a></li>
  
                        <li><a href="staff_calander.php"><i class="fa fa-calendar" aria-hidden="true"></i> Calander </a></li>
                        <li><a href="staff_salary.php"><i class="fa fa-money"></i>Salary</a></li>
                        
                        <li class="active-menu"><a href="staff_leave.php"><i class="fa fa-calendar-times-o"></i>Leaves</a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            </div>
            <div class="db-info-wrap">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
               
<div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box user-form-wrap">
                            <h4>APPLY LEAVE</h4>
                            <form class="form-horizontal" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Staff ID</label>
                                            <input name="firstname" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Staff Name</label>
                                            <input name="lastname" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control" type="email">
                                        </div>  
                                    </div>
									<div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" id="input-phone" class="form-control" value="" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>NIC Number</label>
                                            <input name="ID" class="form-control" type="number">
                                        </div>  
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Leave Type</label>
                                            <select class="form-select" id="Leave" name="Leave">
                                                <option>SELECT LEAVE TYPE</option>
                                                <option value="PL">Privilege Leave</option>
                                                <option value="CL">Casual Leave</option>
                                                <option value="SL">Sick Leave</option>
												<option value="ML">Maternity Leave</option>
                                            </select>
                                        </div>
                                    </div>
									<div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input name="date" class="form-control" type="date">
                                        </div>  
                                    </div>
									<div class="col-sm-6">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input name="date" class="form-control" type="date">
                                        </div>  
                                    </div>
                                    <div class="col-12">
                                        <h4>Describe Leave</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Please Describe Your Leave</label>
                                            <textarea class="form-control" id="message" name="message" placeholder="" required=""></textarea>
                                        </div>
                                    </div>
                                
                                    <button type="submit" class="button-primary">APPLY LEAVE</button>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
			
            <!-- Content / End -->

            <!-- Copyrights -->
            <div class="copyrights">
                Copyright © 2023 Woocurs Academy. All rights reserveds.
             </div>
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <!-- end Container Wrapper -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>

<!-- Mirrored from cyclonethemes.com/demo/html/padhai/dashboard-addtour.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Feb 2020 09:01:50 GMT -->
</html>