<?php
session_start();
include "db_connection.php";


$leave_id = $_GET['leave_id'];


$result = "UPDATE leaves  SET Status ='rejected' WHERE leave_id ={$_GET['leave_id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
       $_SESSION['message']="Leave Request successfully Rejected !";
        header("Location:admin_leave_list.php");
    }
else{
    echo "Error";
    }  
$conn->close();



?>