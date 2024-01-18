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


$$Stuid = $_GET['$Stuid'];

$query = "SELECT * FROM payments WHERE student_id = $$Stuid"; 

$results = mysqli_query($conn, $query);
$Irow = mysqli_fetch_assoc($results);

$simage = ($Irow && isset($Irow['image']) && !empty($Irow['image'])) ? $Irow['image'] : "default_pic.jpg";

?>


<?php
if(isset($_GET['$Stuid'])){
    $$Stuid = $_GET['$Stuid'] ;


    $query = "SELECT * FROM payments WHERE student_id = $$Stuid "; 

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
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>WoocursacademyLK</title>
      <style>
    h1 {
      text-align: center;
      font-size: 2.5em;
      font-weight: bold;
      padding-top: 1em;
      margin-bottom: -0.5em;
    }

    form {
      padding: 40px;
    }

    input,
    textarea {
      margin: 5px;
      font-size: 1.1em !important;
      outline: none;
    }

    label {
      margin-top: 2em;
      font-size: 1.1em !important;
    }

    label.form-check-label {
      margin-top: 0px;
    }

    #err {
      display: none;
      padding: 1.5em;
      padding-left: 4em;
      font-size: 1.2em;
      font-weight: bold;
      margin-top: 1em;
    }

    table{
      width: 90% !important;
      margin: 1.5rem auto !important;
      font-size: 1.1em !important;
    }

    .error{
      color: #FF0000;
    }
  </style>
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
                        <li><a href="a_studentlist.php"><i class="fa fa-users"></i>Students</a> </ul>
                        <ul>
                                <li><a href="a_studentactive.php">Active</a></li>
                                <li><a href="a_studentpending.php">Pending</a></li>
                            </ul>  
                            <ul> 
                        </li> 
                        <li><a href="courses.php"><i class="fa fa-book"></i> Courses </a></li>   
                         <li><a href="leave.php"><i class="fa fa-calendar-times-o"></i> Leave</a></li>
                        <li><a href="admin_payment.php"> <i class='fa fa-credit-card'></i> Payments </a></li>
                        <li><a href="salary.php"><i class="fas fa-money"></i> Salary </a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap">
                
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
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
                            <h4>payment Details</h4>
                            <div class="col-sm-6">     
                                        <div class="form-group" style="border-radius:50px; width:30%;">
                                            <img src="../payment/images/<?php echo $simage; ?>" alt=" image">
                                        
                                        </div>
                                        
                                <form action="payment.php" method="POST" enctype="multipart/form-data">
                                    <!--Account Information Start-->
                                    <h4>Account</h4>
                                    <div class="input_group">
                                        <div class="input_box">
                                            <input type="text" placeholder="First Name" name="<?php echo $row['first_name']; ?>" required class="name" >
                                            <i class="fa fa-user icon"></i>
                                        </div>
                                        <div class="input_box">
                                            <input type="text" placeholder="Last Name" name="<?php echo $row['last_name']; ?>" required class="name" name="">
                                            <i class="fa fa-user icon"></i>
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_box">
                                            <input type="email" placeholder="Email Address" name="<?php echo $row['email']; ?>" required class="name">
                                            <i class="fa fa-envelope icon"></i>
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_box">
                                            <input type="text" placeholder="Address" name="<?php echo $row['address']; ?>" required class="name">
                                            <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_box">
                                            <input type="number" placeholder="Phone Number" name="<?php echo $row['phone_no']; ?>" required class="name">
                                            <i class="fa fa-phone icon"></i>
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_box">
                                            <input type="text" placeholder="Course Name" name="<?php echo $row['course']; ?>" required class="name">
                                            <i class="fa fa-book icon"></i>
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_box">
                                            <input type="text" placeholder="Slip No" name="<?php echo $row['slip_no']; ?>" required class="name">
                                            <i class="fa fa-pencil icon"></i>
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_box">
                                            <input type="date" placeholder="DD.MM.YYYY" name="<?php echo $row['dob']; ?>" required class="name">
                                            <i class="fa fa-calendar icon"></i>
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_box">
                                            <input type="text" placeholder="Gender" name="<?php echo $row['gender']; ?>" required class="name">
                                            <i class="fa fa-users icon"></i>
                                            <!-- <select name="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select> -->
                                        </div>
                                    </div>


                                    <!--Payment Details Start-->
                                    <div class="input_group">
                                        <div class="input_box">
                                            <!-- <input type="radio" name="photo" class="radio" id="bc1" checked>
                                            <label for="bc1"><span>
                                                    <i class="fa fa-cc-visa"></i>Credit Card</span></label> -->
                                            <input type="file" name="image" class="radio" id="bc2"  for="file" accept="image/*">
                                            <label for="bc2" ><span>
                                                    <i class="fa fa-cc-slip"></i>Slip</span></label>
                                        </div>
                                    </div>
                                

                                    <div class="input_group">
                                        <div class="input_box">
                                            <button type="submit" name="submit">PAY NOW</button>
                                        </div>
                                    </div>
                                    <!-- <?php  ?> -->
                                </form>
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