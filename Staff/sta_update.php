<?php
include "db_connection.php";

$id=1;
$first_name =$_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$contact_no=$_POST['contact_no'];
$address = $_POST['address'];
$email =$_POST['email'];
$image=$_POST["image"];

$imgname=$_FILES["image"]["name"];

$imgfile=$_FILES["image"]["tmp_name"];
$path="staff_pro/.$imgname";
move_uploaded_file($imgfile,$path);


$query="UPDATE `staffs` SET `first_name`='$first_name',`last_name`='$last_name',`dob`='$dob ',`contact_no`='$contact_no',`address`='$address',`email`='$email',`image`='$image' WHERE staff_id='$id'";
$result=mysqli_query($conn,$query);

if($result)
{
    
    header('location:staff_profilecard.php');
}
else{
    header('location:staff_edit.php');
}
?>