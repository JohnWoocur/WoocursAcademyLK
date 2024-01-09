<?php include("../protect.php");
notAuthenticated("admin", "login.php"); // if user not authenticated and redirect to login
?>
<?php
require 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $qualification = $_POST['qualification'];
    $staffname = $_POST['staffname'];
    $password = $_POST['password'];
    $Address = $_POST['address'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $status = "Active";


    $sql = "SELECT * FROM staffs WHERE contact_no = '$phone'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header('location:admin_staff_add.php');
        $_SESSION['Emsg'] = "Staff Contact NO Already Taken";
    } else {

        $sql = "SELECT * FROM staffs WHERE username = '$staffname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header('location:admin_staff_add.php');
            $_SESSION['Emsg'] = "Staff Name Already Taken. Please Use Different Staff Name";
        } else {

            $sql = "SELECT * FROM staffs WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                header('location:admin_staff_add.php');
                $_SESSION['Emsg'] = "Staff Email Already Taken. Please Use Different Email";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO `staffs`(`first_name`, `last_name`, `gender`, `dob`, `contact_no`, `email`, `address`, `qualification`, `password`, `status`, `department`, `salary`, `username`) VALUES ('$Firstname','$Lastname','$gender','$date','$phone','$email','$Address','$qualification','$hashed_password','$status','$department','$salary','$staffname')";

                $result = mysqli_query($conn, $query);

                if ($result) {
                    header('location:admin_staff.php');
                    $_SESSION['Smsg'] = "Staff Account Created Successfully";
                } else {
                    header('location:admin_staff_add.php');
                    $_SESSION['Emsg'] = "Staff Account Create failed. Contact NO And Email Need Unique";
                }
            }
        }
    }
}
?>



?>