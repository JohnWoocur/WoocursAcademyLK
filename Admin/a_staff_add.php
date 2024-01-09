<?php 
 require 'db_connection.php';
 session_start();

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Firstname=$_POST['firstname'];
    $Lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $qualification=$_POST['qualification'];
    $password=$_POST['password'];
    $Address=$_POST['address'];
    $department=$_POST['department'];
    $salary=$_POST['salary'];
    $status="Active";

    $sql="SELECT * FROM staffs";
    $run=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($run);
    $cnu = $row['contact_no'];
    $mail=$row['email'];

    if ($cnu == $phone) {
        header('location:admin_staff_add.php');
        $_SESSION['Emsg']="Staff Contact NO Already Taken";
    }else if ($mail == $email) {
        header('location:admin_staff_add.php');
        $_SESSION['Emsg']="Staff Email Already Taken Please Use Deferent Email";
    }else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $query="INSERT INTO `staffs`(`first_name`, `last_name`, `gender`, `dob`, `contact_no`, `email`, `address`, `qualification`, `password`, `status`, `department`, `salary`) VALUES ('$Firstname','$Lastname','$gender','$date','$phone','$email','$Address','$qualification','$hashed_password','$status','$department','$salary')";
        $result=mysqli_query($conn,$query);
    if($result){
        header('location:admin_staff.php');
        $_SESSION['Smsg']="Staff Account Created Successfully";
    }
    else{
        header('location:admin_staff_add.php');
        $_SESSION['Emsg']="Staff Account Create failed Contact NO And Email Need Unique ";
    }
    }

    

}



 

?>