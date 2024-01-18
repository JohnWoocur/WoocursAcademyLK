<?php

include "db_connection.php";


$student_id = $_GET['pay_id'];


$result = "UPDATE payments  SET Status ='rejected' WHERE pay_id ={$_GET['pay_id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
       
        header("Location:admin_payment.php");
    }
else{
    echo "Error";
    }  
$conn->close();



?>