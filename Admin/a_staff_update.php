<?php include("../protect.php");
notAuthenticated("admin", "login.php"); // if user not authenticated and redirect to login
?>
<?Php

require "db_connection.php";
 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $salary = $_POST['salary'];
    $sid = $_POST['staffid'];

    $query = "UPDATE staffs SET salary = $salary WHERE staff_id = $sid";

    $result = mysqli_query($conn, $query);
    if ($result) {
        
        header("location: admin_staff_view.php?Sid=$sid");
        $_SESSION['Smsg'] = "Staff Basic Salary Updated";
        
    } else {
        header("location: admin_staff_view.php?Sid=$sid&Emsg=Staff Basic Salary Update Failed");
       
    }
}

?>