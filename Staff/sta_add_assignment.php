<?php
session_start();

require 'db_connection.php';
$Cid=$_POST['course_id'];
// $lid=$_POST['lid'];
$Lecture_id=$_SESSION["user_id"];

$postdate=$_POST['pdate'];
$deadline=$_POST['ddate'];

$fileName = $_FILES["file"]["name"];

$fileFile = $_FILES["file"]["tmp_name"];  

$path = "materials/".$fileName;
move_uploaded_file($fileFile,$path);


$query="INSERT INTO `assignments`(`course_id`, `staff_id`, `file`, `post_date`, `deadline`) VALUES('$Cid','$Lecture_id','$fileName','$postdate','$deadline') ";
$result=mysqli_query($conn,$query);

if($result){
    header('location:staff_assigment.php');
    $_SESSION['Smsg'] = " assignmrnt post Successfully";
}
else{
    header('location:staff_add_assigment.php');
    $_SESSION['Emsg'] = " Assignment post failed";
}

?>