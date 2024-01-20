<?php include("../protect.php");
notAuthenticated("staff", "login.php"); // if user not authenticated and redirect to login
$Sid = $_SESSION["user_id"];

require "db_connection.php";
$query = "SELECT * FROM staffs WHERE staff_id = $Sid"; 

$results = mysqli_query($conn, $query);
$Irow = mysqli_fetch_assoc($results);
$sname=$Irow["username"];
$simage = ($Irow && isset($Irow['image']) && !empty($Irow['image'])) ? $Irow['image'] : "default_pic.jpg";

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

                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item profile-sec">
                            <img src="../Admin/admin_pro/<?php echo $simage?>" alt="">
                                <span><?php echo"$sname";?></span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
                        
                        <div class="dropdown-menu account-menu">
                            <ul>
                                <li><a href="staff_edit.php"><i class="fas fa-cog"></i>Edit Profile</a></li>
                                <li><a href="staff_profilecard.php"><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href="staff_change_password.php"><i class="fas fa-key"></i>Password</a></li>
                                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
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
                        <li class="active-menu"><a href="staff_dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a href="staff_edit.php"><i class="fas fa-user"></i>Edit Profile</a> </li>
                        <li><a href="staff_course.php"> <i class='fa fa-book'></i>Course</a></li>
                        <li><a href="staff_notes.php"> <i class='fa fa-sticky-note-o'></i>Notes</a></li>
                        <li><a href="staff_assigment.php"><i class="fa fa-tasks"></i>Assigment</a></li>
                        <li><a href="staff_calander.php"><i class="fa fa-calendar"></i> Calander </a></li>
                        <li><a href="staff_salary.php"><i class="fa fa-money"></i>Salary</a></li>
                        <li><a href="staff_leave.php"><i class="fa fa-calendar-times-o"></i>Leaves</a></li>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap">
                <div class="row">
                    <?php
                    
                    if(isset($_SESSION['Smsg'])):
                    ?>
                    <div class="form-group">
                        <label class="badge badge-success"><?php echo $_SESSION['Smsg']; ?></label>
                    </div>
                    <?php
                    unset($_SESSION['Smsg']);
                    endif;
                    ?>
                    <?php
                    if(isset($_SESSION['Emsg'])):
                    ?>
                    <div class="form-group">
                    <label class="badge badge-danger"><?php echo $_SESSION['Emsg']; ?></label>
                    </div>
                    <?php
                    unset($_SESSION['Emsg']);
                    endif;
                    ?>
                    <div class="col-lg-12">
                        <div class="dashboard-box table-opp-color-box">
                       
                            <h4>NOTES</h4>
                            
                            <div class="table-responsive">
                            <form  action="sta_view_notes.php" method="POST" enctype="multipart/form-data">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Course</th>
                                            <th>Lecture Id</th>
                                            <th>Notes File</th>
                                            <th>View</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php 
            require 'db_connection.php';
            $query="SELECT * FROM `notes`";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?php echo $row['notes_id']; ?></td>
                <td><?php echo $row['course_id']; ?></td>
                <td><?php echo $row['staff_id']; ?></td>
                <td><?php echo $row['file']; ?></td>
                <td><a href="../staff/materials/<?php echo $row['file']; ?>" target="_blank"><span class="badge badge-success"><i class="far fa-eye"></i></span></a></td>
                <td><a href="sta_delete_notes.php?id=<?php echo $row['notes_id']; ?>"> <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span></a></td>
                <!-- <th>Action</th> -->
            </tr>
            <?php
            endwhile;
            ?>
                                  </table>
                                <h5><b>Add Notes</b>&nbsp;&nbsp;<a href="staff_add_notes.php"><span class="badge badge-success"><i class="fa fa-plus"></i></span></a></h5>
                            </form>
                            </div>
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