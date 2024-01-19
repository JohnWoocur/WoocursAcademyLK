<?php
session_start();


include "db_connection.php";


$student_id = $_GET['student_id'];


$result = "UPDATE students  SET Status ='Reject' WHERE student_id ={$_GET['student_id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
       
        header("Location:admin_studentlist.php");
        $_SESSION['Smsg'] = "Rejected Successfully";
    }
else{
    echo "Error";
    $_SESSION['Emsg'] = "Rejected Failed";
    }  
$conn->close();



?>