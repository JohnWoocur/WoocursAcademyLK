<?php include("../protect.php");
notAuthenticated("staff", "login.php"); // if user not authenticated and redirect to login
?>
<?php
include "db_connection.php";

$id= $_SESSION["user_id"];
$first_name =$_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$contact_no=$_POST['contact_no'];
$address = $_POST['address'];
$email =$_POST['email'];
/*$image=$_POST["image"];*/

$imgName = $_FILES["image"]["name"];

$imgFile = $_FILES["image"]["tmp_name"];  

$path = "../Admin/admin_pro/".$imgName;
move_uploaded_file($imgFile,$path);


// $imgname=$_FILES["image"]["name"];

// $imgfile=$_FILES["image"]["tmp_name"];
// $path="staff_pro/.$imgname";
// move_uploaded_file($imgfile,$path);


$query="UPDATE `staffs` SET `first_name`='$first_name',`last_name`='$last_name',`dob`='$dob ',`contact_no`='$contact_no',`address`='$address',`email`='$email',`image`='$imgName' WHERE staff_id='$id'";
$result=mysqli_query($conn,$query);

if($result)
{
    $_SESSION['Smsg']="Staff Details updated";
    header('location:staff_profilecard.php');
}
else{
    $_SESSION['Emsg']="Staff Details update failed";
    header('location:staff_edit.php');


}

?> 