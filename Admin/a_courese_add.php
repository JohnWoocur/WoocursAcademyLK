<?php
include "db_connection.php";
 session_start();

$course_name= $_POST['course_name'];
$duration= $_POST['duration'];
$category=$_POST['category'];
$sid=$_POST['staff_id'];
$start_date= $_POST['start_date'];
$end_date= $_POST['end_date'];
$num_student=$_POST['num_student'];
$fees= $_POST['fees'];
$description=$_POST['description'];

$filename = $_FILES["c_image"]["name"];

$tempname = $_FILES["c_image"]["tmp_name"];  
 
$folder = "img/".$filename; 
move_uploaded_file($tempname, $folder);



$sql="INSERT INTO `courses`(`course_name`, `duration`, `category`, `start_date`, `end_date`, `num_student`, `fees`, `description`, `c_image`,`staff_id`) VALUES ('$course_name','$duration','$category','$start_date','$end_date','$num_student','$fees','$description','$filename','$sid')";
$query=mysqli_query($conn,$sql);
// if (move_uploaded_file($tempname, $folder)) {

//         $_SESSION['addpack']="Package added success";
//         header("Location: index.php");

//         }else{

//         $_SESSION['addpack']="Package added success";
//         header("Location: db-add-package.php");

//     }

if($query)
{	
	//echo "Package Added successfully!";
	header("Location:admin_course.php");
  $_SESSION['Smsg'] = " course added Successfully";
}
else 
{
  //echo "Package Added failure!";
  header("Location: a_course_addform.php");
  $_SESSION['Emsg'] = "course added failed";
}

?>

