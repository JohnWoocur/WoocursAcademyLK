<?php include("../protect.php");
notAuthenticated("student", "login.php"); // if user not authenticated and redirect to login

$stid=$_SESSION['user_id'];



require "db_connection.php";
$query = "SELECT * FROM students WHERE student_id = $stid"; 

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
                    
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item profile-sec">
                            <img src="./student_pro/<?php echo $simage?>" alt="">
                                <span><?php echo"$sname";?></span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu account-menu">
                            <ul>
                                <li><a href="student_edit.php"><i class="fas fa-cog"></i>Edit Profile</a></li>
                                <li><a href="student_profilecard.php"><i class="fas fa-user-tie"></i>Profile</a></li>
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
            <!-- contents satrt -->

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
                        <div class="dashboard-box">
                            <h4>Payments Details </h4>
                            
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <!-- <th>Contect No</th> -->
                                            <th>Email</th>
                                            <th>Slip</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
									<?php
                                    include "db_connection.php";
                                    $stuid=$_SESSION["user_id"]; 
                                    $sql = mysqli_query($conn,"SELECT * FROM payments WHERE student_id=$stuid");

                                    ?>

                                    <tbody>
                                        <?php

                                    while($row = $sql->fetch_assoc()) {
										// $name = $row["last_name"];
                                        ?>
										
                                    <?php
                                    // include "db_connection.php";
                                    // $result = mysqli_query($conn,"SELECT * FROM payments WHERE status = 'approved'");

                                    // ?>

                                    <tbody>
                                        <?php

                                    // while($row = $result->fetch_assoc()) {
                                        ?>

                                        <tr>

                                        <?php 
                                        // output data of each row
                                        
                                        echo'<td>'.$row["student_id"].'</td>';
                                        echo'<td>'.$row["last_name"].'</td>';
                                        // echo'<td>'.$row["phone_no"].'</td>';
                                        echo'<td>'.$row["email"].'</td>';
                                        echo'<td>'.$row["photo"].'</td>';
                                        // echo'<td><span class="badge badge-success">'.$row["status"].'</span></td>';
                                        
                                            ?>
                                            <?php if($row["status"]=='approved'): 
                                            ?>
                                            <td><span class="badge badge-success"><?php echo $row["status"] ?></span></td>
                                            <?php elseif($row["status"]=='rejected'):
                                            ?>
                                            <td><span class="badge badge-danger"><?php echo $row["status"] ?></span></td>
                                            <?php else: ?>
                                            <td><span class="badge badge-primary"><?php echo $row["status"] ?></span></td>
                                           
                                            <?php endif;?>



                                           
                                        </tr>
                                        <?php
                                    
									
                                         ?>
                                        
                                    </tbody>
                                    <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>  
                </div>






                
            <!-- Content / End -->
            <!-- Copyrights -->
            <div class="copyrights">
            Copyright © 2023 Woocurs Academy LK. All rights reserved.
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