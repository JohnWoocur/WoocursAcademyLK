<?php include("../protect.php");
notAuthenticated("student", "login.php"); // if user not authenticated and redirect to login
$Stid = $_SESSION["user_id"];

require "db_connection.php";

$cid=$_POST["course_id"];
$fees=$_POST["fees"];
$status="Pending";

$query="INSERT INTO `student_courses`(`student_id`, `course_id`, `paid_amount`, `status`) VALUES ('$Stid','$cid',$fees,'$status')";

$result = mysqli_query($conn, $query);

if ($result) {
    header('location:../payment/index.php');
    $_SESSION['Smsg'] = "Student Course Apply Success";
   
} else {
    echo "Student Course Apply Failure";
    header('location:student_course.php');
   $_SESSION['Emsg'] = "Student Course Apply failed please try again";
}
?>

