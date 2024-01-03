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
                                <img src="assets/images/comment.jpg" alt="">
                                <span>My Account </span>
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
                    <li class="active-menu"><a href="staff_course.php"> <i class='fa fa-book'></i>Course</a></li>
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
            <div class="db-info-wrap db-comment-wrap">
                <h4>Comments List</h4>
                <p>Nonummy hac atque adipisicing donec placeat pariatur quia ornare nisl.</p>
                <div class="dashboard-box">

                    
                    <!-- post comment html -->
                   <div class="comment-area">
                        <div class="comment-area-inner">
                            <ol>
                                <li>
                                   <figure class="comment-thumb">
                                      <img src="assets/images/testi-img1-150x150.jpg" alt="">
                                   </figure>
                                   <div class="comment-content">
                                      <div class="comment-header">
                                         <h4 class="author-name">Tom Sawyer</h4>
                                         <span class="post-on">Jana 10 2020</span>
                                      </div>
                                      <h5 class="comment-title"><span>comment on:</span>Tips To Reduce Your Travel Costs</h5>
                                      <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                      <div class="comment-detail">
                                            <a href="#" class="reply"><i class="far fa-trash-alt"></i>Remove</a>
                                            <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                            <a href="#" class="reply"><i class="far fa-edit"></i>Edit</a>
                                      </div>
                                   </div>
                                </li>
                                <ol>
                                    <li>
                                       <figure class="comment-thumb">
                                          <img src="assets/images/testi-img2-150x150.jpg" alt="">
                                       </figure>
                                       <div class="comment-content">
                                          <div class="comment-header">
                                             <h4 class="author-name">Tom Sawyer</h4>
                                             <span class="post-on">Jana 10 2020</span>
                                          </div>
                                          <h5 class="comment-title"><span>comment on:</span>Tips To Reduce Your Travel Costs</h5>
                                          <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                          <div class="comment-detail">
                                                <a href="#" class="reply"><i class="far fa-trash-alt"></i>Remove</a>
                                                <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                <a href="#" class="reply"><i class="far fa-edit"></i>Edit</a>
                                          </div>
                                       </div>
                                    </li>
                                </ol>
                            </ol>
                        </div>
                   </div>
                </div>
                <div class="dashboard-box">
                    <!-- post comment html -->
                   <div class="comment-area">
                        <div class="comment-area-inner">
                            <ol>
                                <li>
                                   <figure class="comment-thumb">
                                      <img src="assets/images/testi-img3-150x150.jpg" alt="">
                                   </figure>
                                   <div class="comment-content">
                                        <div class="comment-header">
                                            <h4 class="author-name">Tom Sawyer</h4>
                                            <span class="post-on">Jana 10 2020</span>
                                        </div>
                                        <h5 class="comment-title"><span>comment on:</span>Tips To Reduce Your Travel Costs</h5>
                                        <div class="rating-wrap">
                                            <div class="rating-start" title="Rated 5 out of 5">
                                                <span></span>
                                            </div>
                                        </div>
                                        <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                        <div class="comment-detail">
                                            <a href="#" class="reply"><i class="far fa-trash-alt"></i>Remove</a>
                                            <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                            <a href="#" class="reply"><i class="far fa-edit"></i>Edit</a>
                                        </div>
                                    </div>
                                </li>
                                <ol>
                                    <li>
                                       <figure class="comment-thumb">
                                          <img src="assets/images/testi-img1-150x150.jpg" alt="">
                                       </figure>
                                       <div class="comment-content">
                                          <div class="comment-header">
                                                <h4 class="author-name">Tom Sawyer</h4>
                                                <span class="post-on">Jana 10 2020</span>
                                          </div>
                                          <h5 class="comment-title"><span>comment on:</span>Tips To Reduce Your Travel Costs</h5>
                                            <div class="rating-wrap">
                                                <div class="rating-start" title="Rated 5 out of 5">
                                                    <span></span>
                                                </div>
                                            </div>
                                          <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                          <div class="comment-detail">
                                                <a href="#" class="reply"><i class="far fa-trash-alt"></i>Remove</a>
                                                <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                <a href="#" class="reply"><i class="far fa-edit"></i>Edit</a>
                                          </div>
                                       </div>
                                    </li>
                                </ol>
                            </ol>
                        </div>
                   </div>
                </div>
                <!-- pagination html -->
                <div class="pagination-wrap">
                    <nav class="pagination-inner">
                        <ul class="pagination disabled">
                            <li class="page-item"><span class="page-link"><i class="fas fa-chevron-left"></i></span></li>
                            <li class="page-item"><a href="#" class="page-link active">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
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
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>