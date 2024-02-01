<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Woocurs Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Woocurs Academy" name="keywords">
    <meta content="Woocurs Academy is one of the Subsidiary Company of Johns Group of Companies. 
		woocursacademy.lk is the official website of Woocurs Academy 
		which is going to involve in providing all the relevant details 
		regarding English and IT Courses which are conducted by Academy of Woocurs" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">WOOCURS ACADEMY</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="index.php#about" class="nav-item nav-link">About</a>
                <a href="index.php#courses" class="nav-item nav-link">Courses</a>
                <a href="index.php#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Student Form Start -->
    <div class="container">
        <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Popular Courses</h1>
        </div> -->
        <!-- <form action="student_register.php" method="POST" enctype="multipart/form-data">

            <label for="image"> <i class="fa-sharp fa-regular fa-image"></i>image</label><br>
            <input type="file" name="c_image" accept="image/*" required>

            <label for="course"> Cousrse</label>
            <input type="text" id="course_name" name="course_name" placeholder="Course name..">

            <label for="duration">Duration</label>
            <input type="text" id="duration" name="duration" placeholder="Couse duration">

            <label for="c_cetegory">Course Category</label>
            <input type="text" id="category" name="category" placeholder="Couse category (Part Time /Full Time)">

            <label for="fname"> Star_Date</label><br>
            <input type="date" id="star_tdate" name="start_date" placeholder="Course start date" required><br>

            <label for="fname"> End-Date</label><br>
            <input type="date" id="end_date" name="end_date" placeholder="Course end date" required><br><br>

            <label for="fname">Number of Students</label><br>
            <input type="number" id="num_student" name="num_student" placeholder="Enter the student limitation" required><br><br>

            <label for="fname">Fees</label>
            <input type="text" id="fees" name="fees" placeholder="course fees..">

            <label for="fname">Description</label>
            <input type="text" id="description" name="description" placeholder="course fees..">


            <input type="submit" value="Submit">
            <input type="reset" value="r">
        </form> -->

        <section class="my-5 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Student Registration</h2>
                                    <?php
                                    if (isset($_SESSION["error"])) {
                                        echo "<h3 class='text-danger'>" . $_SESSION["error"] . "</h3>";
                                        unset($_SESSION["error"]);
                                    }
                                    ?>
                                    <form action="student_register.php" method="post">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="first_name">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control form-control-lg" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="last_name">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" name="username" id="username" class="form-control form-control-lg" />
                                        </div>
                                        <label class="form-label" for="category">Gender</label>
                                        <div class="form-outline justify-content-start border border-1 py-2 d-flex  mb-5">
                                            <div class="my-1">
                                                <label class="form-check-label ms-3" for="male">Male</label>
                                                <input class="form-check-input mx-2" type="radio" name="gender" value="male" id="male" required />
                                            </div>
                                            <div class="my-1">
                                                <label class="form-check-label" for="female">Female</label>
                                                <input class="form-check-input mx-2" type="radio" name="gender" value="female" id="female" required />
                                            </div>
                                            <div class="my-1">
                                                <label class="form-check-label" for="other">Other</label>
                                                <input class="form-check-input mx-2" type="radio" name="gender" value="other" id="other" required />
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4 rounded">
                                            <label class="form-label" for="category">Category</label>
                                            <select class="form-select form-select-lg rounded-3" name="category" id="category" required>
                                                <option value="training">Training</option>
                                                <option value="school">School</option>
                                                <option value="ielts">IELTS</option>
                                            </select>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Your Email</label>
                                            <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="contact_no">Mobile Number</label>
                                            <input type="number" maxlength="10" id="contact_no" name="contact_no" class="form-control form-control-lg" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="dob">Date of Birth</label>
                                            <input type="date" name="dob" id="dob" class="form-control form-control-lg" required />
                                        </div>
                                        <div class="form-outline mb-4 rounded">
                                            <label class="form-label" for="department">Department</label>
                                            <select class="form-select form-select-lg rounded-3" name="department" id="department" required>
                                                <option value="training">A</option>
                                                <option value="school">B</option>
                                                <option value="ielts">C</option>
                                            </select>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control form-control-lg" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="confirm_password">Repeat your password</label>
                                            <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-lg" required />
                                        </div>


                                        <!-- <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                            <label class="form-check-label" for="form2Example3g">
                                                I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                            </label>
                                        </div> -->

                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                        </div>
                                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="student/login.php" class="fw-bold text-body"><u>Login here</u></a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Student Form End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About</a>
                    <a class="btn btn-link" href="">Course</a>
                    <a class="btn btn-link" href="">contact</a>

                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3"> Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>No.377 B ,Veppankulam junction, Veppankulam, Mannar Road, Vavuniya.</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+94 71 548 6896</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info.woocursacademy@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="" target="blank"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/woocursacademy" target="blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Opening</h4>
                    <h5 class="text-light fw-normal">Monday - Saturday</h5>
                    <p>09AM - 05PM</p>
                    <h5 class="text-light fw-normal">Sunday</h5>
                    <p>10AM - 03PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>


            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Woocurs Academy</a>, All Right Reserved.


                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>