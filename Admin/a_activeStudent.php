<?php
session_start();

include "db_connection.php";


$student_id = $_GET['student_id'];


$result = "UPDATE students  SET Status ='Active' WHERE student_id ={$_GET['student_id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
       
        header("Location:admin_studentlist.php");
        $_SESSION['Smsg'] = "Approved Successfully";
    }
else{
    echo "Error";
    $_SESSION['Emsg'] = "Approved Failed";
    }  
$conn->close();



?>