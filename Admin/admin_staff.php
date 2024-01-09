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
                            <img src="./admin_pro/<?php echo $aimage?>" alt="">
                                <span><?php echo"$aname";?></span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
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
                        <li><a href="a_studentlist.php"><i class="fa fa-users"></i>Students</a> </li>   
                        <li><a href="course.php"><i class="fa fa-book"></i> Courses </a></li>   
                        <li><a href="admin_leave_list.php"><i class="fa fa-calendar-times-o"></i>Manage Staff Leave</a></li>
                        <li><a href="payments.php"> <i class='fa fa-credit-card'></i> Payments </a></li>
                        <li><a href="salary.php"><i class="fas fa-money"></i> Salary </a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap">
                
                   
                                        
                                
                   
            
                <div class="row">
                    <div class="col-lg-12">
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
                        <div class="dashboard-box">
                       <h4> Our Staffs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       
                        Add Staff <a href ="admin_staff_add.php"> <span class="badge badge-success"><i class="fa fa-plus"></i></span></a>&nbsp;&nbsp;
                         &nbsp;&nbsp;
                        Deleted Staffs <a href ="admin_staff_delete.php"> <span class="badge badge-danger"><i class="fa fa-times"></i></span></a></h4>
                           
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Staff ID</th>
                                            <th>Staff Name</th>
                                            <th>Department</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                            <th>&nbsp; Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                include "db_connection.php";

                $status ="Active";

                $sql="SELECT * FROM staffs WHERE `Status` = '$status'";
                $result=mysqli_query($conn,$sql);

                if ($result)
                {
                    while ($row = $result->fetch_assoc()) { 
                        $name =$row['first_name'] . " " . $row["last_name"];
                        $sid = $row['staff_id'];
                        $qua = $row['department'];
                        $salary = $row['salary'];
                        $status = $row['status'];

                                ?>
                                      <tr>
                                            
                                            <td><a href="#"><span class="list-name"><?php echo"$sid"; ?></span><span class="list-enq-city"></span></a>
                                            </td>
                                            <td><?php echo"$name"; ?></td>
                                            <td><?php echo"$qua"; ?></td>
                                            <td><?php echo" Rs - $salary"; ?></td>
                                            <td>
                                                <span class="badge badge-primary"><?php echo"$status"; ?></span>
                                            </td>
                                            <td>
                                            <a href="admin_staff_view.php?Sid=<?php echo"$sid";?>"> <span class="badge badge-success"><i class="far fa-eye"></i></span></a>
                                            
                                            <a href="a_staff_delete.php?Sid=<?php echo"$sid";?>"> <span class="badge badge-danger"><i class="fa fa-times"></i></span></a>
                                         </td>
                                        </tr>
                                        <?php
                                    }
                                }
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
               Copyright © 2023 Woocurs Academy. All rights reserveds.
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