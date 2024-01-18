<?php include("../protect.php");
notAuthenticated("student", "login.php"); // if user not authenticated and redirect to login
?>
<?php
include "db_connection.php";

$id= $_SESSION["user_id"];
$first_name =$_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$email =$_POST['email'];
$contact_no=$_POST['contact_no'];


$image=$_POST["image"];

$imgname=$_FILES["image"]["name"];

$imgfile=$_FILES["image"]["tmp_name"];
$path="student_pro/.$imgname";
move_uploaded_file($imgfile,$path);


$query="UPDATE `students` SET `first_name`='$first_name',`last_name`='$last_name',`dob`='$dob ',`email`='$email',`contact_no`='$contact_no',`image`='$image' WHERE student_id='$id'";
$result=mysqli_query($conn,$query);

if($result)
{
    $_SESSION['Smsg']="Student Details updated";
    header('location:student_profilecard.php');
}
else{
    $_SESSION['Smsg']="Student Details updated";
    header('location:student_edit.php');
}
?>