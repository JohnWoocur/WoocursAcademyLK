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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Woocurs Academy LK</title>


    <!-- course design files -->
    <!-- Favicon -->
    <link href="assets/c_css/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/c_css/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/c_css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/c_css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/c_css/css/style.css" rel="stylesheet">
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
                                <a href="#"><span class="search_btn"><i class="fa fa-search"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </form>
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
                                <li><a href="staff_edit.php"><i class="fas fa-cog"></i>Edit Profile</a></li>
                                <li><a href="staff_profilecard.php"><i class="fas fa-user-tie"></i>Profile</a></li>
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
            <!---course-->
            <div class="db-info-wrap db-wislist-wrap">
                <div class="dashboard-box ">
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



                        <div class="container-xxl py-5" id="courses">

                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                                <h1 class="mb-5">Popular Courses</h1>
                            </div>

                            <a href="a_course_addform.php" class="btn btn-primary">Add<i class="fa fa-plus ms-2"
                                    style="color: #fcfcfd;"></i></a>
                            <div class="row g-4 justify-content-center">
                                <?php
                                require "db_connection.php";

                                $query = "SELECT * FROM `courses` LIMIT 6";
                                $result = mysqli_query($conn, $query);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()):
                                        ?>
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="course-item bg-light">
                                                <div class="position-relative overflow-hidden">
                                                    <img class="img-fluid" src="../Admin/img/<?php echo $row['c_image']; ?>"
                                                        alt="">
                                                    <div
                                                        class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                                        <a href='a_course_edit.php?course_id=<?php echo $row["course_id"]; ?>' class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">EDIT</a>
                                                        <a href='a_course_delete.php?course_id=<?php echo $row["course_id"]; ?>'
                                                            class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                                            style="border-radius: 0 30px 30px 0;">DELETE</a>
                                                    </div>
                                                </div>
                                                <div class="text-center p-4 pb-0">
                                                    <div class="mb-3">
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                    </div>
                                                    <h5 class="mb-4">
                                                        <?php echo $row['course_name']; ?>
                                                    </h5>
                                                </div>
                                                <div class="d-flex border-top">
                                                    <small class="flex-fill text-center border-end py-2"><i
                                                            class="fa fa-clock  text-primary me-2"></i>
                                                        <?php echo $row['category']; ?>
                                                    </small>
                                                    <small class="flex-fill text-center border-end py-2"><i
                                                            class="fa fa-calendar text-primary me-2"></i>
                                                        <?php echo $row['duration']; ?>
                                                    </small>
                                                    <small class="flex-fill text-center py-2"><i
                                                            class="fa fa-user text-primary me-2"></i>
                                                        <?php echo $row['num_student']; ?>
                                                    </small>

                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                }
                                ?>
        <!-- Courses End -->



                            </div>
                            <!-- Content / End -->
                            <!-- Copyrights -->
                            <div>
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
                        <script src="assets/js/counterup.min.js"></script>
                        <script src="assets/js/jquery.slicknav.js"></script>
                        <script src="assets/js/dashboard-custom.js"></script>
</body>

</html>