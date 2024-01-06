<?php
include "db_connection.php";

$c_id= $_GET['c_id'];

$sql="DELETE FROM `courses` where c_id={$_GET['c_id']}";
$query=mysqli_query($conn,$sql);
    if ($query)
    {	
       // echo "course delete successfully!";
         header("Location:admin_course.php");
    }
    else 
    {
      //echo " course delete failure!";
      header("Location:admin_course.php");
    }

?>