<?php include("../protect.php");
notAuthenticated("admin", "login.php"); // if user not authenticated and redirect to login
?>
<?php
include 'db_connection.php';

if (isset($_GET['Sid'])) {
   
    $staff_Id = $_GET['Sid'];
     
    $status = "Delete";
    $sql = "UPDATE `staffs` SET `Status` = '$status' WHERE `staff_Id` = $staff_Id ";
  
    if ($conn->query($sql) === TRUE) {
        $_SESSION['Smsg']="Staff Account deleted Successfuly";
        header("Location: admin_staff.php");
    } else {
        $_SESSION['Emsg']="Staff Account delete failed";
        header("Location: admin_staff.php");
    }
    $conn->close();
} else

?>
