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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pro.css">
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
                            <img src="../Admin/admin_pro/<?php echo $simage?>" alt="">
                                <span><?php echo"$sname";?></span>
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
                    <li><a href="staff_dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                    <li class="active-menu"><a href="staff_edit.php"><i class="fas fa-user"></i>Edit Profile</a> </li>
                    <li><a href="staff_course.php"> <i class='fa fa-book'></i>Course</a></li>
                    <li ><a href="staff_notes.php"> <i class='fa fa-sticky-note-o'></i>Notes</a></li>
                    </li>
                    <li><a href="staff_assigment.php"><i class="fa fa-tasks"></i>Assigment</a></li>

                    <li><a href="staff_calander.php"><i class="fa fa-calendar"></i> Calander </a></li>
                    <li><a href="staff_salary.php"><i class="fa fa-money"></i>Salary</a></li>
                    
                    <li><a href="staff_leave.php"><i class="fa fa-calendar-times-o"></i>Leaves</a></li>
                    <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="db-info-wrap">
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
                <div class="row">
                    <div class="col-lg-12">
                        
                           
                       
                    </div>
                </div>
               

                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box user-form-wrap">

                        <div class="wrapper">
        <div class="inner">
            <div class="image-holder">
                <img src="assets/images/WoocursAcademy.png" alt="img">
            </div>
            <?php
            include "db_connection.php";
            $id= $_SESSION["user_id"];

                $sql="SELECT * FROM `staffs`WHERE staff_id='$id'";
                $check=mysqli_query($conn,$sql);

                if($check){
                    if(mysqli_num_rows($check)==1)
                    {
                            $row=mysqli_fetch_assoc($check); 
                            $first_name = $row['first_name'];
                            $last_name = $row['last_name'];
                            $dob = $row['dob'];
                            $contact_no= $row['contact_no'];
                            $address = $row['address'];
                            $email = $row['email'];
                            $image=$row["image"];
                    }
                }        
             ?>
            <form action="sta_update.php" method="post" enctype="multipart/form-data">
                <h3> Profile</h3>
                
                <div class="form-wrapper">
                    <input type="text" placeholder="firstName" name="first_name" class="form-control" value="<?php echo $first_name ; ?>"><br>
                    
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="lastname" name="last_name" class="form-control" value="<?php echo $last_name ; ?>"><br>
                    
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="dob" name="dob"class="form-control" value="<?php echo $dob ; ?>"><br>
                    
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="contact_no" name="contact_no" class="form-control" value="<?php echo $contact_no; ?>"><br>
                    
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="address" name="address" class="form-control" value="<?php echo $address; ?>"><br>
                    
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="email" name="email" class="form-control" value="<?php echo $email; ?>"><br>
                    
                </div>
                <div class="form-wrapper">
                    <!-- <img src="staff_pro/<?php echo $image; ?>" alt="profile"> -->
                    <input type="file" placeholder="add your image" name="image" class="form-control" accept="images/*">
                    
                </div>
                <button type="submit" class="sub" >submit</button>
            </form>
        </div>
    </div>
                            
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
            <!-- Content / End -->
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
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>