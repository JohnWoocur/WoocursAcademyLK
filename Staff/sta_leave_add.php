<?php
session_start();
include 'db_connection.php';

$staff_id=$_POST['staff_id'];
$type=$_POST['type'];
$description=$_POST['description'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$no_of_leaves=$_POST['no_of_leaves'];

$sql="INSERT INTO `leaves`( `staff_id`, `type`, `description`, `start_date`, `end_date`, `no_of_leaves`) VALUES ('$staff_id','$type','$description','$start_date','$end_date','$no_of_leaves')";


$result =mysqli_query($conn,$sql);
if ($result){
    $_SESSION['message']="Leave Request successfuly send !";
	header("Location: staff_leave_list.php");
    
}else{
    $_SESSION['message']="Leave Request Failed!";
	header("Location: staff_leave.php");
}


?>