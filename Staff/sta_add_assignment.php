<?php

require 'db_connection.php';
$Cid=$_POST['cid'];
// $lid=$_POST['lid'];
$Lecture_id=1;

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
}
else{
    header('location:staff_assigment.php');
}

?>