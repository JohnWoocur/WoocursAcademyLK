<?php

include "db_connection.php";


$st_id = $_GET['st_id'];


$result = "UPDATE students  SET Status ='Reject' WHERE st_id ={$_GET['st_id']} " ;

if ($connection->query ($result)=== TRUE) 
    {
       
        header("Location:a_studentlist.php");
    }
else{
    echo "Error";
    }  
$connection->close();



?>