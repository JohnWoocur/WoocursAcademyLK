<?php
include "db_connection.php";
// include "function.php";
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM staffs WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row  = mysqli_fetch_assoc($result);
    echo json_encode($row);
    $_SESSION["message"] = "Login successfully.";
    $_SESSION["user_id"] = $row["staff_id"];
    $_SESSION["username"] = $row["username"];
    $_SESSION["usertype"] = "staff";

    header("Location:staff_dashboard.php");
} else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $_SESSION["error"] = "Login failed!";
    header("Location:login.php");
}
?>