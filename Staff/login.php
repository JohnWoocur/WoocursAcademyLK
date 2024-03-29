<?php include("../protect.php");
hasAuthenticated("staff", "staff_dashboard.php"); // if user authenticated redirect to dashboard
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
    <title>Woocurs Academy</title>
</head>

<body>
    <div class="login-page" style="background-image: url(assets/images/bg1.avif);">
        <div class="login-from-wrap">
            <?php
            if (isset($_SESSION["error"])) {
                echo "<h3 class='text-danger'>" . $_SESSION["error"] . "</h3>";
                unset($_SESSION["error"]);
            }
            ?>
            <form class="login-from" action="staff_login.php" method="post">
                <h1 class="site-title">
                    <a href="#">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                </h1>
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username" class="validate" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" class="validate" required>
                </div>
                <div class="form-group">
                    <button class="w-100 button-primary" type="submit">Login</button>
                </div>
                <a href="forgot.html" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>

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