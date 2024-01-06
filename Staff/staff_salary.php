<?php
require "db-connection.php";
$year=date('Y');
$month=date('F');

// echo $month;
$query="SELECT * FROM `salarys` WHERE year='$year' AND month='$month'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==0){
    $query2="SELECT * FROM `staffs`";
    $result2=mysqli_query($conn,$query2);
    if(mysqli_num_rows($result2)>0){
        while($row=mysqli_fetch_assoc($result2)){
            $id=$row['staff_id'];
            $query3="INSERT INTO `salarys`(`staff_id`, `month`, `year`, `credited_date`, `status`, `slip_number`, `slip_img`) VALUES ('$id','$month','$year','','Pending','','')";
            $result3=mysqli_query($conn,$query3);
        }
    }
        

    // for($i=1;$i<=10;$i++){

    // }
}

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
    <title>John Travels LK</title>
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
            width: 60%;
            justify-content: center;
            box-shadow: 10px;
            /* z-index: 2; */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            text-decoration: none;
            cursor: pointer;
        }

        .btnn i {

            justify-content: center;
            align-items: center;


        }

        h3 {
            text-align: center;

        }

        h2 {
            text-align: center;
            color: blue;
        }
    </style>
</head>

<body>

    <div class="modal" id="paymentModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Woocurs Academy </h2>
            <h3>Payment Page</h3>
            <hr>
            <table>
                <tr>
                    <th>Woocurs Academy</th>
                </tr>
                <tr>
                    <th>address</th>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <th>Woocurs Academy</th>
                </tr>
                <tr>
                    <th>address</th>
                </tr>
            </table>
            <button class="btnn" onclick="window.print()"><i class="fa fa-print"></i></button>
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
                        <li><a href="staff.php"><i class="fas fa-user"></i>Staff</a> </li>
                        <li><a href="a_studentlist.php"><i class="fa fa-users"></i>Students</a>
                    </ul>
                    <ul>
                        <li><a href="a_studentactive.php">Active</a></li>
                        <li><a href="a_studentpending.php">Pending</a></li>
                    </ul>
                    <ul>
                        </li>
                        <li><a href="courses.php"><i class="fa fa-book"></i> Courses </a></li>
                        <li><a href="leave.php"><i class="fa fa-calendar-times-o"></i> Leave</a></li>
                        <li><a href="payments.php"> <i class='fa fa-credit-card'></i> Payments </a></li>
                        <li><a href="salary.php"><i class="fas fa-money"></i> Salary </a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>

            <div class="db-info-wrap">
                <div class="row">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-blue">
                                <i class="far fa-chart-bar"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Salary-Year</h4>
                                <h5>22,520</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-green">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Salary-Month</h4>
                                <h5>16,520</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-purple">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Staff</h4>
                                <h5>18,520</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-red">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Pending</h4>
                                <h5>19,520</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
                            <h4>Staff Salary Details</h4>
                            <!-- <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"> -->
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Year</th>
                                            <th>Credited_date</th>
                                            <th>Status</th>
                                            <th>Payroll</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <?php
                                        require 'db-connection.php';
                                        $id=1;
                                        $query4="SELECT * FROM `salarys` WHERE `staff_id`='$id'";
                                        $result4=mysqli_query($conn,$query4);
                                        while($row=mysqli_fetch_array($result4)):
                                        ?><form>
                                            <tr>
                                                <!-- <td><span class="list-img"><img src="assets/images/<?php echo $row['image']; ?>" alt=""></span>
                                                </td> -->
                                                <td><a href="#"><span class="list-name"><?php echo $row['month']; ?></span></a>
                                                </td>
                                                <td><a href="#"><span class="list-name"><?php echo $row['year']; ?></span></a>
                                                </td>
                                                <td><?php echo $row['credited_date']; ?></td>
                                                <td>
                                                    <?php
                                                    
                                                        if($row['status']=='Pending'):?>
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
                                                    <button class="badge badge-primary" id="viewButton">View</button>
                                                </td>
                                            </tr>
                                        <?php endwhile;
                                        ?>

                                    </tbody>
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
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
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