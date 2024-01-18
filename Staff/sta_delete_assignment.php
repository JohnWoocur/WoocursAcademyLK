<?php

require "db_connection.php";
$id=$_GET['id'];
$query="DELETE FROM `assignments` WHERE Assignment_id ='$id'";
$result=mysqli_query($conn,$query);

if($result){
    header('location:staff_assigment.php');
}
else{
    header('location:staff_assigment.php');
}

?>