<?php
include "db_connection.php";


$course_name= $_POST['course_name'];
$duration= $_POST['duration'];
$category=$_POST['category'];
$start_date= $_POST['start_date'];
$end_date= $_POST['end_date'];
$num_student=$_POST['num_student'];
$fees= $_POST['fees'];
$description=$_POST['description'];

    $filename = $_FILES["c_image"]["name"];

    $tempname = $_FILES["c_image"]["tmp_name"];  
    
    $folder = "img/".$filename; 
    move_uploaded_file($tempname, $folder);

    $query="UPDATE courses  SET  `course_name`='$course_name',`duration`='$duration',`category`='$category',`start_date`='$start_date',`end_date`='$end_date',`num_student`='$num_student',`fees`='$fees',`description`='$description',`c_image`='$c_image' WHERE course_id='$course_id'";
    $result=mysqli_query($conn,$query);

    if($result)
{
    //echo "Package update successfully!";
    header('location:admin_course.php');
}
else{
    echo "Package updated failure!";
    //header('location:a_admin_course_.php');
}

?>
