<?php
include "db_connection.php";
session_start();

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$category = $_POST["category"];
$email = $_POST["email"];
$contact_no = $_POST["contact_no"];
$dob = $_POST["dob"];
$department = $_POST["department"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

if ($password !== $confirm_password) {
    $_SESSION["error"] = "Password miss match!";
    header("Location: register.php");
}
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO `students` (`first_name`, `last_name`, `gender`, `category`, `email`, `contact_no`, `dob`, `department`, `password`, `image`) VALUES ('$first_name', '$last_name', '$gender', '$category', '$email', '$contact_no', '$dob', '$department', '$hashed_password', 'default_pic.jpg')";

try {
    $result = mysqli_query($conn, $sql);
} catch (Error $err) {
    echo $err->getMessage();
}
if ($result) {
    $_SESSION["message"] = "Student registration successfully.";
    header("Location: Student/login.php");
} else {
    $error = mysqli_error($conn);
    $_SESSION["error"] = "Student registration failed!";
    header("Location: register.php");
}
