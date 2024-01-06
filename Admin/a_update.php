<?php
include "db_connection.php";

$id=1;
$first_name =$_POST['first_name'];
$last_name = $_POST['last_name'];
$email =$_POST['email'];
$contact_no=$_POST['contact_no'];




$query="UPDATE `admins` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`contact_no`='$contact_no' WHERE admin_id='$id'";
$result=mysqli_query($conn,$query);

if($result)
{
    
    header('location:admin_profilecard.php');
}
else{
    header('location:admin_edit.php');
}
?>