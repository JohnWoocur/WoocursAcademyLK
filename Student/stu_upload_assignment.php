<?php
require 'db_connection.php';
$fileName = $_FILES["file"]["name"];

$fileFile = $_FILES["file"]["tmp_name"];  

$path = "materials/".$fileName;
move_uploaded_file($fileFile,$path);

$assignment=$_GET['aid'];
$student=$_GET['sid'];

$query="INSERT INTO `student_assignments`( `assignment_id`, `student_id`, `file`) VALUE ('$assignment','$student','$fileName')";
$result=mysqli_query($conn,$query);

if($result){
    header('location:staff_view_assignment.php');
}
else{
    header('location:student_assignment.php');
}

   
?>