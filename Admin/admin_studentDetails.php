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
        <link rel="stylesheet" type="text/css" href="assets/stylingcss/viewInfo.css">

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
                                <li><a href="profile_card.php"><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href="admin_change_password.php"><i class="fas fa-key"></i>Password</a></li>
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
                        <li><a href="admin_dashboard.php"><i class="fa fa-chart-bar"></i>Dashboard</a> </li>
                        <li><a href="admin_stafflist.php"><i class="fas fa-user"></i>Staff</a> </li>
                        <li><a href="admin_studentlist.php"><i class="fa fa-users"></i>Students</a></li> 
                        <li><a href="courses.php"><i class="fa fa-book"></i> Courses </a></li>   
                        <li><a href="admin_leave_list.php"><i class="fa fa-calendar-times-o"></i>Manage Staff Leave</a></li>
                        <li><a href="admin_paymentlist.php"> <i class='fa fa-credit-card'></i> Payments </a></li>
                        <li><a href="admin_salary.php"><i class="fas fa-money"></i> Salary </a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap">
            <div class = "blurcontainer" id ="blurcontainer">




                <div class="row">
                    <!-- Item -->
                  
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-green">
                                <i class='bx bx-file'></i>
                            
                            </div>
                            <div class="dashboard-stat-content">
                                <h4><a href="admin_activatedstudentlist.php">Approved</a></h4>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                   
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-red">
                                <i class='bx bxs-comment-x'></i>
                                
                            </div>
                            <div class="dashboard-stat-content">
                                <h4><a href="admin_rejectedstudentlist.php">Rejected</a></h4>
                               
                            </div>
                        </div>
                    </div>
                </div>
                   
                                        
                                
                   
            
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
                            <h4>Students Details </h4>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Category</th>
                                            <th>Course</th> 
                                            <th>Duration</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include "db_connection.php";

                                    $sql = "SELECT students.*, students.first_name, students.last_name, students.category, courses.course_name, courses.duration
                                                FROM students
                                                JOIN student_courses ON students.student_id = student_courses.student_id
                                                JOIN courses ON student_courses.course_id = courses.course_id";
                                        $results = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($results)) {

                                    
                                    

                                    ?>

                                    <tbody>
                                       
                                        <tr>

                                        <?php 
                                        // output data of each row
                                        
                                        echo'<td>'.$row["student_id"].'</td>';
                                        echo'<td>'.$row["first_name"].'</td>';
                                        echo'<td>'.$row["last_name"].'</td>';
                                        echo'<td>'.$row["category"].'</td>';
                                        echo'<td>'.$row["course_name"].'</td>';
                                        echo'<td>'.$row["duration"].'</td>';
                                        echo'<td>'.$row["status"].'</td>';
                                        

                                            ?>

                                            <td>
                                                <a href="" ><span class="badge badge-success"><i class="far fa-eye"></i></span></a>
                                                <a href=""><span class="badge badge-success"><i class="far fa-check-circle"></i></span></a>
                                                <a href=" "><span class="badge badge-danger"><i class="far fa-trash-alt"></i></span></a>
                                            </td>
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
    
                                    </thead>
                                   
  <!-- DETAILED VIEW OF A SINGLE Student ---- main Design of this page -->

  <?php
            include "db_connection.php";
            
            $student_id = $_GET['student_id'];

                $sql="SELECT * FROM `students` where student_id ={$_GET['student_id']}  ";
                $check=mysqli_query($conn,$sql);

                if($check){
                    if(mysqli_num_rows($check)==1)
                    {
                            $row=mysqli_fetch_assoc($check); 
                            $student_id = $row['student_id'];
                            $first_name = $row['first_name'];
                            $last_name = $row['last_name'];
                            $gender = $row['gender'];
                            $category = $row['category'];
                            $email = $row['email'];
                            $contact_no= $row['contact_no'];
                            $dob = $row['dob'];
                            $department= $row['department'];
                            $image=$row["image"];
                            $name = $first_name." ".$last_name;
                    }
                }        
             ?>




                                    <div class="viewInfo">
                    <img src="../Student/student_pro/<?php echo $row['image']; ?>" >
                    <br>
                    <form>

                        <input type="text" id="fname" name="first_name" value="<?php echo $student_id; ?>" >
                        <input type="text" id="fname" name="last_name" value="<?php echo $name; ?>">
                        <input type="text" id="fname" name="gender" value="<?php echo $gender; ?>">
                        <input type="text" id="fname" name="category" value="<?php echo $category; ?>" >
                        <input type="text" id="fname" name="email" value="<?php echo $email; ?>">
                        <input type="text" id="lname" name="contact_no" value="<?php echo $contact_no; ?>">
                        <input type="text" id="fname" name="dob" value="<?php echo $dob; ?>" >
                        <input type="text" id="fname" name="department" value="<?php echo $department; ?>" >
                    <br>

                        <button class = "btn"><a href ="admin_studentlist.php">Close</a></button>
                    </form>
                    </div>
                        
                                          
                           
                
                <!-- Content / End -->
            
</div>
                <!-- Copyrights -->
                <div class="copyrights">
                Copyright © 2023 Woocurs Academy LK. All rights reserved.
                </div>
            </div>
            <!-- Dashboard / End -->
        </div>
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
                    