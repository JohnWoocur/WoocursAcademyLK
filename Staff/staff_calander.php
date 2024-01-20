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
                        
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item profile-sec">
                            <img src="../Admin/admin_pro/<?php echo $simage?>" alt="profile">
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
                    <li><a href="staff_edit.php"><i class="fas fa-user"></i>Edit Profile</a> </li>
                    <li><a href="staff_course.php"> <i class='fa fa-book'></i>Course</a></li>
                    <li ><a href="staff_notes.php"> <i class='fa fa-sticky-note-o'></i>Notes</a></li>
                    </li>
                    <li><a href="staff_assigment.php"><i class="fa fa-tasks"></i>Assigment</a></li>

                    <li class="active-menu"><a href="staff_calander.php"><i class="fa fa-calendar"></i> Calander </a></li>
                    <li><a href="staff_salary.php"><i class="fa fa-money"></i>Salary</a></li>
                    
                    <li><a href="staff_leave.php"><i class="fa fa-calendar-times-o"></i>Leaves</a></li>
                    <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>
            <div class="db-info-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
                            <h4> Add User enquiry </h4>
                            
                            <form class="form-horizontal" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Packages Name</label>
                                            <select class="form-group" id="Number-of-People" name="Number-of-People">
                                            <option value="1">Badulla</option>
                                            </select>
                                        </div>
                                    </div>
									 <div class="col-sm-6">
                                        <div class="form-group">
                                             <label>Number of People</label>
                                            <select class="form-group" id="Number-of-People" name="Number-of-People">
                                                <option>Select Number of People</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                                <option value="46">46</option>
                                                <option value="47">47</option>
                                                <option value="48">48</option>
                                                <option value="49">49</option>
                                                <option value="50">50</option>
                                                <option value="51">51</option>
                                                <option value="52">52</option>
                                                <option value="53">53</option>
                                                <option value="54">54</option>
                                                <option value="55">55</option>
                                                <option value="56">56</option>
                                                <option value="57">57</option>
                                                <option value="58">58</option>
                                                <option value="59">59</option>
                                                <option value="60">60</option>
                                            </select>
                                    </div>
                                     </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="integerInput">Phone Number </label>
                                            <input type="text" id="integerInput" name="integerInput" pattern="[0-9]+" title="Please enter a valid ." required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Check-IN Date</label>
                                            <input type="date" id="Check-IN" name="Check-IN">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Check-OUT Date</label>
                                            <input type="date" id="Check-OUT" name="Check-OUT">
                                        </div>
                                    </div>                  
                                </div>
                                <br>
                                <input type="submit" name="Submit">
                            </form>
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
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>