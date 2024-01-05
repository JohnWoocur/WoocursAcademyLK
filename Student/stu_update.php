<?php
include "db_connection.php";

$id=1;
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
    
    header('location:student_profilecard.php');
}
else{
    header('location:student_edit.php');
}
?>