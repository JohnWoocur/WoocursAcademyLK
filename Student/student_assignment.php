<?php include("../protect.php");
notAuthenticated("student", "login.php"); // if user not authenticated and redirect to login
?>

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
        <title>Woocurs Academy LK</title>
</head>
<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">
            <div class="dashboard-header sticky-header">
                <div class="content-left  logo-section pull-left">
                    <h1><a href="../index.php"><img src="assets/images/logo.png" alt=""></a></h1>
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
                    <!--<div class="dropdown">
                        <a class="dropdown-toggle" id="notifyDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="dropdown-item">
                                <i class="far fa-envelope"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu" aria-labelledby="notifyDropdown">
                            <h4> 3 Notifications</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment2.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment3.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="all-button">See all messages</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="far fa-bell"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                            <h4> 3 Messages</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment4.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment5.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment6.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="all-button">See all messages</a>
                        </div>
                    </div> -->
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
                                <li><a href="student_edit.php"><i class="fas fa-cog"></i>Edit Profile</a></li>
                                <li><a href="student_profilecard.php.php"><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href="user-change-password.php"><i class="fas fa-key"></i>Password</a></li>
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
                        <li class="active-menu"><a href="student_dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a href="student_profilecard.php"><i class="fas fa-user"></i> Profile</a> </li>
                        <li><a href="student_course.php"><i class="fa fa-book"></i> Course</a></li>
                        <li><a href="student_notes.php"><i class="fa fa-sticky-note-o"></i> Notes</a></li>
                        <li><a href="student_assignment.php"><i class="fa fa-tasks"></i> Assignments </a></li>
                        <li><a href="calender.php"><i class="fa fa-calendar"></i> Calendar</a></li>
                        <li><a href="student_payment.php"> <i class='fa fa-credit-card'></i> Payment</a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <!-- contents start -->
             <div class="db-info-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box table-opp-color-box">
                            <h4>ASSIGNMENTS</h4>
                            <div class="table-responsive">
                            <!-- <form  action="staff_view_assignment.php" method="POST" enctype="multipart/form-data">  -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Course</th>
                                            <th>Lecture Id</th>
                                            <th>Assignment File</th>
                                            <th>Post Date</th>
                                            <th>Deadline</th>
                                            <th>View</th>
                                            <th>Download</th>
                                            <th>Upload</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                            require 'db_connection.php';
                                            $query="SELECT * FROM `assignments`";
                                            $result=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($result)):
                                            $id=1;?>
                                            
                                                <tr>
                                                <td><?php echo $row['assignment_id']; ?></td>
                                                <td><?php echo $row['course_id']; ?></td>
                                                <td><?php echo $row['staff_id']; ?></td>
                                                <td><?php echo $row['file']; ?></td>
                                                <td><?php echo $row['post_date']; ?></td>
                                                <td><?php echo $row['deadline']; ?></td>
                                                <td><a href="../Staff/materials/<?php echo $row['file']; ?>" target="_blank"><span class="badge badge-success"><i class="far fa-eye"></i></span></a></td>
                                                <td><a href="../staff/materials/<?php echo $row['file']; ?>>"download="<?php echo $row['file'];?>"><span class="badge badge-danger"><i class="fa fa-download"></i></span></a></td>
                                                <td>
                                                <form action="stu_upload_assignment.php?aid=<?php echo $row['assignment_id']; ?> & sid=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                                                    <input type="file" name="file">
                                                    <span class="badge badge-success"><button type="submit"><i class="fa fa-upload"></i></button></span>
                                                </form></td>
                                            </tr>
                                            
                                    <?php
                                        endwhile;
                                    ?>
                                    
                                </table>
                            <!-- </form> -->
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <!-- Content / End -->
            <!-- Copyrights -->
            <div class="copyrights">
               Copyright © 2023 John Travels LK. All rights reserveds.
            </div>
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <!-- *Scripts* -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>