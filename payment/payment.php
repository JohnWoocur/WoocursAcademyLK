<?php 

include ("db_connection.php");
include("../protect.php");
notAuthenticated("student", "login.php"); // if user not authenticated and redirect to login


    $stuid=$_SESSION['user_id'];
	$filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];  

    $folder = "images/".$filename; 
    move_uploaded_file($tempname, $folder);
		
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name']; 
    $student_id=$stuid;
    $email=$_POST['email'];
    $address=$_POST['address'];
    $slip_no=$_POST['slip_no'];
    $date=$_POST['date'];	
    $gender=$_POST['gender'];	

    $query="INSERT INTO `payments`(`first_name`, `last_name`, `student_id`, `email`, `address`, `slip_no`, `date`, `gender`, `photo`) 
    VALUES ('$first_name','$last_name','$student_id','$email','$address','$slip_no','$date','$gender','$filename')";
    $result=mysqli_query($conn,$query);
    if ($check) {

        header("Location:../Student/student_payment.php");
        }else{
    
        header("location:../Student/student_payment.php");
            
    
        }
?>
