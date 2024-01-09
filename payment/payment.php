<?php
include ("db-connection.php");


	$filename = $_FILES["photo"]["name"];

    $tempname = $_FILES["photo"]["tmp_name"];  

    $folder = "images/".$filename; 
    move_uploaded_file($tempname, $folder);
		
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name']; 
    // $student_id=$_POST['student_id'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone_no=$_POST['phone_no'];
    $slip_no=$_POST['slip_no'];
    $date=$_POST['date'];	
    $gender=$_POST['gender'];	
    //$id=1;

$check=mysqli_query($conn,"INSERT INTO `payments`( `first_name`, `last_name`,  `email`, `address`, `phone_no`, `slip_no`, `date`, `gender`, `photo`) 
VALUES('$first_name','$last_name','$email','$address','$phone_no','$slip_no','$date','$gender', '$filename')");
if ($check) {
    echo "success";
    // header("Location:index.php?id=$First_name");
    }else{

    echo "Adding failed. ";
        

    }
?>