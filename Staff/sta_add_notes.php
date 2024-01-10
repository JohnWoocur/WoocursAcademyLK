
<?php
session_start();

require 'db_connection.php';
$cid=$_POST['cid'];
$sid=$_SESSION["user_id"];
// $Lecture_id=1;

$fileName = $_FILES["file"]["name"];

$fileFile = $_FILES["file"]["tmp_name"];  

$path = "materials/".$fileName;
move_uploaded_file($fileFile,$path);

$query="INSERT INTO `notes`(`course_id`, `staff_id`, `file`) VALUES('$cid','$sid','$fileName')";
$result=mysqli_query($conn,$query);

if($result){
    header('location:staff_notes.php');
}
else{
    header('location:staff_add_notes.php');
}

?>