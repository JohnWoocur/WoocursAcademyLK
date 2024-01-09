<?php
require "db_connection.php";
$id=$_GET['id'];
$query="DELETE FROM `notes` WHERE Notes_id='$id'";
$result=mysqli_query($conn,$query);
if($result){
    header('location:staff_notes.php');
}
else{
    header('location:staff_notes.php');
}

?>