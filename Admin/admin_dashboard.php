<?php include("../protect.php");
notAuthenticated("admin", "login.php"); // if user not authenticated and redirect to login
$aid = $_SESSION["user_id"];

require "db_connection.php";
$query = "SELECT * FROM admins WHERE admin_id = $aid"; 

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
                            <img src="./admin_pro/<?php echo $aimage?>" alt="">
                                <span><?php echo"$aname";?></span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu account-menu">
                            <ul>

                                <li><a href="admin_edit.php"><i class="fas fa-cog"></i>Edit Profile</a></li>
                                <li><a href="admin_profilecard.php"><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href="#"><i class="fas fa-key"></i>Password</a></li>
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
            <?php
            // Count the number of students
            $sqlstudents = "SELECT COUNT(*) AS total_students FROM students ";
            $resultstudents = $conn->query($sqlstudents);

            if ($resultstudents) {
                $rowstudents = $resultstudents->fetch_assoc();
                $totalstudents = $rowstudents['total_students'];
                
            } else {
                echo "Error: " . $sqlstudents . "<br>" . $conn->error;
            }
            
            // Count the number of staffs
            $sqlstaffs = "SELECT COUNT(*) AS total_staffs FROM staffs ";
            $resultstaffs = $conn->query($sqlstaffs);

            if ($resultstaffs) {
                $rowstaffs = $resultstaffs->fetch_assoc();
                $totalstaffs = $rowstaffs['total_staffs'];
                
            } else {
                echo "Error: " . $sqlstaffs . "<br>" . $conn->error;
            }

            // Count the number of courses
            $sqlcourses = "SELECT COUNT(*) AS total_courses FROM courses";
            $resultcourses = $conn->query($sqlcourses);

            if ($resultcourses) {
                $rowcourses = $resultcourses->fetch_assoc();
                $totalcourses = $rowcourses['total_courses'];
                
            } else {
                echo "Error: " . $sqlcourses . "<br>" . $conn->error;
            }
            
            ?>
            <div class="db-info-wrap">
                <?php include "../session_message.php"; ?>
                <div class="row">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-blue">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Total Students</h4>
                                <h5><?php echo $totalstudents; ?></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-green">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Total Staffs</h4>
                                <h5><?php echo $totalstaffs; ?></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-purple">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Courses</h4>
                                <h5><?php echo $totalcourses; ?></h5>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard-box table-opp-color-box">
                            <h4>Staff List</h4>
                            <p></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Staff</th>
                                            <th>Full Name</th>
                                            <th>Department</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $sql="SELECT * FROM staffs ";
                                        $result=mysqli_query($conn,$sql);

                                        if ($result)
                                        {
                                            while ($row = $result->fetch_assoc()) { 
                                                $name =$row['first_name'] . " " . $row["last_name"];
                                                $simg = ($row && isset($row['image']) && !empty($row['image'])) ? $row['image'] : "default_pic.jpg";
                                                $qua = $row['department'];
                                                $salary = $row['salary'];
                                                $status = $row['status'];

                                        ?>
                                    <tbody>
                                        <tr>
                                          
                                            <td><span class="list-img"><img src="../Staff/staff_pro/<?php echo $simg ;?>" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name"><?php echo $name;?></span>
                                            </td>
                                            <td><?php echo $qua ;?></td>
                                            <td><?php echo $salary ;?></td>
                                            <td>
                                                <span class="badge badge-primary"><?php echo $status;?></span>
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
                    <div class="col-lg-6">
                        <div class="dashboard-box table-opp-color-box">
                            <h4>Courses</h4>
                            <p></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th>course name</th>
                                            <th>No Of stu</th>
                                            <th>duration</th>
                                            <th>category</th>
                                            <th>start_date</th>
                                            <th>Fees</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $sql="SELECT * FROM courses ";
                                        $result=mysqli_query($conn,$sql);

                                        if ($result)
                                        {
                                            while ($row = $result->fetch_assoc()) { 
                                                $name =$row['course_name'];
                                                $nof = $row['num_student'];
                                                $duration = $row['duration'];
                                                $cat=$row['category'];
                                                $fees = $row['fees'];
                                                $start_date = $row['start_date'];
                                            
                                            
                                        
                                        ?>
                                    <tbody>
                                        <tr>
                                            
                                            <td><span class="list-enq-name"><?php echo $name;?></span>
                                            </td>
                                            <td><?php echo $nof;?></td>
                                            <td><?php echo $duration;?></td>
                                            <td><?php echo $cat;?></td>
                                            <td><?php echo $start_date;?></td>
                                            <td><?php echo $fees;?></td>
                                            
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
                            <h4>Student Details</h4>
                            <p></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                      
                                        <tr>
                                            <th>Student</th>
                                            <th>Full Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Course</th>
                                            <th>Category</th>
                                            <th>Duration</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include "db_connection.php";

                                        $sql = "SELECT students.*, students.first_name, students.last_name, students.category, courses.course_name, courses.duration
                                                FROM students
                                                JOIN student_courses ON students.student_id = student_courses.student_id
                                                JOIN courses ON student_courses.course_id = courses.course_id";
                                        $results = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($results)) {
                                            $stuimg = ($row && isset($row['image']) && !empty($row['image'])) ? $row['image'] : "default_pic.jpg";
                                            ?>
                                            <tr>
                                                <td><span class="list-img"><img src="../Student/student_pro/<?php echo $stuimg; ?>" alt=""></span></td>
                                                <td><a href="#"><span class="list-name"><?php echo $row["first_name"] . ' ' . $row["last_name"]; ?> </span></a></td>
                                                <?php
                                                echo '<td>' . $row["contact_no"] . '</td>';
                                                echo '<td>' . $row["email"] . '</td>';
                                                echo '<td>' . $row["gender"] . '</td>';
                                                echo '<td>' . $row["course_name"] . '</td>';
                                                echo '<td>' . $row["category"] . '</td>';
                                                echo '<td>' . $row["duration"] . '</td>';
                                                ?>
                                            </tr>
                                            <?php
                                        }

                                        $conn->close();
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