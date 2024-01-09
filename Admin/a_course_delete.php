<?php
include "db_connection.php";

$course_id= $_GET['course_id'];

$sql="DELETE FROM `courses` where course_id={$_GET['course_id']}";
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