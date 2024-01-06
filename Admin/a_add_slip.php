<?php 
require "db-connection.php";
session_start();
// $filename=$_FILES["slip"]["name"];
// $tempname=$_FILES["slip"]["tmp_name"];
// $path="assets/images/".$tempname;
// move_uploaded_file($tempname,$path);

$imgName=$_FILES["myFile"]["name"];

$imgFile=$_FILES["myFile"]["tmp_name"];  

$path = "assets/images/slips/".$imgName;
move_uploaded_file($imgFile,$path);

$id=$_GET['id'];
$date=date('Y-m-d');

$query="UPDATE `salarys` SET `credited_date`='$date',`status`='Success',`slip_img`='$imgName' WHERE staff_id='$id'";
$result=mysqli_query($conn,$query);

$query2="SELECT `slip_img` FROM `salarys` WHERE staff_id='$id'";
$result2=mysqli_query($conn,$query2);
if(mysqli_num_rows($result2)==1){
    while($row2=mysqli_fetch_assoc($result2)){
        if( !$row2['slip_img']==""){
            $_SESSION['slip-s']="Slip successfully updated ";
            header('location:salary.php');
        }
        else{
            $_SESSION['slip-f']="Slip update failed";
            header('location:salary.php');
        }
    }
}
?>