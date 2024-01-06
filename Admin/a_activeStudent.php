<?php

include "db_connection.php";


$student_id = $_GET['student_id'];


$result = "UPDATE students  SET Status ='Active' WHERE student_id ={$_GET['student_id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
       
        header("Location:admin_studentlist.php");
    }
else{
    echo "Error";
    }  
$conn->close();



?>