<?php include("../protect.php");
notAuthenticated("admin", "login.php"); // if user not authenticated and redirect to login
$Aid = $_SESSION["user_id"];

require "db_connection.php";
$query = "SELECT * FROM admins WHERE admin_id = $Aid"; 

$results = mysqli_query($conn, $query);
$Irow = mysqli_fetch_assoc($results);
$aname=$Irow["username"];
$aimage = ($Irow && isset($Irow['image']) && !empty($Irow['image'])) ? $Irow['image'] : "default_pic.jpg";

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
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Woocurs Academy LK</title>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="modal" id="paymentModal">
                                            <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <h2>Payment Page</h2>
                                            <h3>ddd</h3>
                                            <button onclick="window.print()">Print</button>
</div>
 </div>

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
                            <img src="./admin_pro/<?php echo $aimage?>" alt="">
                                <span><?php echo"$aname";?></span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu account-menu">
                            <ul>
                                <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li>
                                <li><a href="#"><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href="#"><i class="fas fa-key"></i>Password</a></li>
                                <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
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
                        
                    <li><a href="admin_dashboard.php"><i class="fa fa-chart-bar"></i>Dashboard</a> </li>
                        <li><a href="admin_staff.php"><i class="fas fa-user"></i>Staff</a> </li>
                        <li><a href="admin_studentlist.php"><i class="fa fa-users"></i>Students</a> </li>   
                        <li><a href="admin_course.php"><i class="fa fa-book"></i>Courses</a></li>   

                        <li><a href="admin_leave_list.php"><i class="fa fa-calendar-times-o"></i>Manage Staff Leave</a></li>
                        <li><a href="admin_payment.php"> <i class='fa fa-credit-card'></i> Payments </a></li>
                        <li><a href="admin_salary.php"><i class="fas fa-money"></i> Salary </a></li>

                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="db-info-wrap">
                <div class="row">
                    <!-- Item -->
                    <!-- <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-blue">
                                <i class="far fa-chart-bar"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Salary-Year</h4>
                                <h5>22,520</h5>
                            </div>
                        </div>
                    </div> -->
                    <!-- Item -->
                    <!-- <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-green">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Salary-Month</h4>
                                <h5>16,520</h5>
                            </div>
                        </div>
                    </div> -->
                    <!-- Item -->
                    <!-- <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-purple">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Staff</h4>
                                <h5>18,520</h5>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-red">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Pending</h4>
                                <h5>19,520</h5>
                            </div>
                        </div>
                    </div> -->
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
                            <h4>Staff Salary Details</h4>
                            
                                
                            <a href="admin_salary.php"><button type="submit" class="badge badge-primary" name="show">Back</button></a>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Staff Id</th>
                                            <th>Month</th>
                                            <th>Credited_date</th>
                                            <th>Status</th>
                                            <th>Payroll</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        if(isset($_POST['month'])and isset($_POST['year'])){
                                            $month=$_POST['month'];
                                            $year=$_POST['year'];
                                            ?>
                                    <?php
                                       require 'db_connection.php';
                                       $query4 = "SELECT * FROM `salarys` WHERE month='$month' AND year='$year'";
                                       $result4 = mysqli_query($conn, $query4);
                                       if (mysqli_num_rows($result4)) {
                                           while ($row2 = mysqli_fetch_array($result4)) { ?>
                                   
                                               <tr>
                                                   <!-- <td><span class="list-img"><img src="assets/images/comment.jpg" alt=""></span>
                                                   </td> -->
                                                   <td><a href="#"><span class="list-name"><?php $id=$row2['staff_id']; echo $id; ?></span></a></td>
                                                   <td><a href="#"><span class="list-name"><?php $month=$row2['month']; echo $month; ?></span></a>
                                                   </td>
                                                   <td><?php echo $row2['credited_date'];?></td>
                                   
                                                   <td>
                                                       <?php
                                                       if($row2['status']=='Pending'):?>
                                                        <span class="badge badge-danger">Pending</span>
                                                    <?php
                                                    else: ?>
                                                    <span class="badge badge-success">Success</span>
                                                    <?php
                                                    endif;
                                                       ?>
                                                   </td>
                                                   <td>
                                   
                                                       <!-- <a href=""><span class="badge badge-primary" id="viewButton">view</span></a> -->
                                                       <a href="admin_payroll.php?id=<?php echo $id;?> & month=<?php echo $month;?>" target="_blank"><button class="badge badge-primary" >View</button></a>
                                                   </td>
                                               </tr>
                                   
                                       <?php
                                           }
                                       }
                                       else{?>
                                       <tr>no records</tr>
                                       <?php
                                           
                                       }}
                                        ?>
                                </table>
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

    <script>
        // Get the modal
        var modal = document.getElementById("paymentModal");

        // Get the button that opens the modal
        var btn = document.getElementById("viewButton");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


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