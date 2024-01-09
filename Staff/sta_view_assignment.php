<?php

function displayAssignment($id){ 
require 'db_connection.php';
 
$query="SELECT * FROM assignment WHERE Assignment_id='$id'";
    $result = mysqli_query($conn,$query);
    $record=array();
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
           
            $record[]=$row;
        }
    }
    return $record;
}
?> 