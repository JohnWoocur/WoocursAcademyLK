<?php
session_start();
include 'db-connection.php';

$customer_id=$_POST['id'];
$type=$_POST['type'];
$description=$_POST['description'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$no_of_leaves=$_POST['no_of_leaves'];

$sql="INSERT INTO `leaves`(`type`, `description`,`start_date`, `end_date`,`no_of_leaves`) VALUES ('$type','$description','$start_date','$end_date','$no_of_leaves')";


$result =mysqli_query($conn,$sql);
if ($result){
    $_SESSION['Booksmsg']="Leave Request successfuly!";
	header("Location: staff_dashboard.php");
	exit();
    
}else{
    $_SESSION['Bookemsg']="Leave Request Failed!";
	header("Location: staff_dashboard.php");
	exit();
}


?>