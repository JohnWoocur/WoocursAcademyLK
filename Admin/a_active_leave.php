<?php

include "db_connection.php";


$leave_id = $_GET['leave_id'];


$result = "UPDATE leaves  SET Status ='Active' WHERE leave_id ={$_GET['leave_id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
       
        header("Location:admin_leave_list.php");
    }
else{
    echo "Error";
    }  
$conn->close();



?>