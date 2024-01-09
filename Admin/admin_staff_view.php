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
<?php
include 'db_connection.php';

// if(!isset($_SESSION["id"])){
//     header("Location:login.php");
//     exit();
//     }


$Sid = $_GET['Sid'];

$query = "SELECT * FROM staffs WHERE staff_id = $Sid"; 

$results = mysqli_query($conn, $query);
$Irow = mysqli_fetch_assoc($results);

$simage = ($Irow && isset($Irow['image']) && !empty($Irow['image'])) ? $Irow['image'] : "default_pic.jpg";

?>


<?php
if(isset($_GET['Sid'])){
    $Sid = $_GET['Sid'] ;


    $query = "SELECT * FROM staffs WHERE staff_id = $Sid "; 

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $sName = $row['first_name'] . " " . $row["last_name"];
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
                    </a>
                        <div class="dropdown-menu account-menu">
                            <ul>
                                <li><a href=""><i class="fas fa-cog"></i>Edit Profile</a></li>
                                <li><a href=""><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href=""><i class="fas fa-key"></i>Password</a></li>
                                <li><a href=""><i class="fas fa-sign-out-alt"></i>Logout</a></li>
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
                        <li active menue><a href="admin_staff.php"><i class="fas fa-user"></i>Staff</a> </li>
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
                        <div class="dashboard-box user-form-wrap">
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
                            <h4>Staff Details </h4>

                            

                           
                                    <div class="col-sm-6">     
                                        <div class="form-group" style="border-radius:50px; width:30%;">
                                        <img src="../Staff/staff_pro/<?php echo $simage; ?>" alt="Staff image">
                                        
                                        </div>
                                        
                                    </div>
                               


                            <form class="form-horizontal" method="POST" action="a_staff_update.php" enctype="multipart/form-data">
                            <div class="dashboard-box user-form-wrap">
                            <div class="col-12">
                            </div>
                            
                            </div>
                                <div class="row">
                                <div class="col-12">
                                        
                                    </div>
                                
                            <br>
                                    <div class="col-sm-6">
                                        <div class="form-group"> 
                                            <label>First name</label>
                                            <input name="firstname" class="form-control" type="text" value="<?php echo $row['first_name']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input name="lastname" class="form-control" type="text" value="<?php echo $row['last_name']; ?>" readonly>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input name="ID" class="form-control" type="text" value="<?php echo $row['gender']; ?>" readonly>
                                        </div>  
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" id="input-phone" pattern="[0-9]{10}" title="Phone number with 7-9 and remaing 9 digit with 0-9 "class="form-control" value="<?php echo $row['contact_no']; ?>" placeholder="Enter 10 digital number Eg-0700000000" type="text" readonly>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" id="dob" name="dob" value="<?php echo $row['dob']; ?>"readonly>
                                        </div>
                                    </div>
									<div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input name="Address" id="Address" class="form-control" value="<?php echo $row['address']; ?>" placeholder="" type="text"readonly>
                                        </div>
                                    </div>
									<div class="col-sm-6">
                                            <div class="form-group">
                                            <label>Email</label>
                                            <input name="city" id="City" class="form-control" value="<?php echo $row['email']; ?>" placeholder="" type="text"readonly>
                                        </div>
                                    </div>
									<div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Qualification</label>
                                         <input name="district" id="district" class="form-control" value="<?php echo $row['qualification']; ?>" placeholder="" type="text" readonly>
                                         
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <input name="country" id="country" class="form-control" value="<?php echo $row['department']; ?>" placeholder="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                            
                                            <input name="staffid" class="form-control" type="text" value="<?php echo $Sid; ?>" hidden>
                                     </div>
                                    <div class="col-12">
                                        
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Basic Salary</label>
                                            <input name="salary" id="Address" class="form-control" value="<?php echo $row['salary']; ?>" placeholder="Rs-" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        
                                    </div>
                                    <!-- <div class="col-sm-6">
                                        <h4>Social Media Links </h4>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input name="Facebook" id="Facebook" class="form-control" value="" placeholder="Enter Your Facebook Link" type="text">
                                            <label>Instagram</label>
                                            <input name="Instagram" id="Instagram" class="form-control" value="" placeholder="Enter Your Instagram Link" type="text">
                                            <label>Twitter</label>
                                            <input name="Twitter" id="Twitter" class="form-control" value="" placeholder="Enter Your Twitter Link" type="text">
                                            <label>Whatsapp</label>
                                            <input name="Whatsapp" id="Whatsapp" class="form-control" value="" placeholder="Enter Your Whatsapp Link" type="text">
                                            <label>Linkedin</label>
                                            <input name="Linkedin" id="Linkedin" class="form-control" value="" placeholder="Enter Your Linkedin Link" type="text">
                                        </div>
                                    </div> -->
                                </div>
                                <button name="submit" type="submit" class="button-primary">Update Basic salary</button>
                            </form>
                            
                           
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
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>