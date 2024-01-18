<?php include("../protect.php");
notAuthenticated("student", "login.php"); // if user not authenticated and redirect to login
$Stid = $_SESSION["user_id"];

require "db_connection.php";
$query = "SELECT * FROM students WHERE student_id = $Stid"; 

$results = mysqli_query($conn, $query);
$Irow = mysqli_fetch_assoc($results);
$sname=$Irow["username"];
$first=$Irow["first_name"];
$last=$Irow["last_name"];
$cate=$Irow["category"];
$simage = ($Irow && isset($Irow['image']) && !empty($Irow['image'])) ? $Irow['image'] : "default_pic.jpg";
?>
<?php
$cid=$_GET["course_id"];
$sql = "SELECT * FROM courses WHERE course_id = $cid"; 

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$course_name=$row["course_name"];
$duration=$row["duration"];
$category=$row["category"];
$start_date=$row["start_date"];
$end_date=$row["end_date"];
$fees=$row["fees"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "course_style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/course_apply.css">
    <title>Document</title>
</head>
<body>
 
    <h1>Course Application </h1>

<div class="container">
  <form action="stu_course_apply_add.php" method="POST" enctype="multipart/form-data">

  <label for="course">First Name</label>
    <input type="text" id="first_name" name="first_name" value="<?php echo $first ;?>" placeholder="student first name">

    <label for="course"> Last Name</label>
    <input type="text" id="last_name" name="last_name" value="<?php echo $last ;?>" placeholder="student last name">

    <label for="course">Student category</label>
    <input type="text" id="last_name" name="category" value="<?php echo $cate ;?>" placeholder="student category">

    
    <input type="text" id="course_id" name="course_id" value="<?php echo $cid ;?>" hidden >

    <label for="course"> Cousrse</label>
    <input type="text" id="course_name" name="course_name" value="<?php echo $course_name ;?>" placeholder="Course name..">

    <label for="duration">Duration</label>
    <input type="text" id="duration" name="duration" value="<?php echo $duration ;?>" placeholder="Couse duration">

    <label for="c_cetegory">Course Category</label>
    <input type="text" id="category" name="category" value="<?php echo $category ;?>" placeholder="Couse category (Part Time /Full Time)">
    
    <label for="fname"> Star_Date</label><br>
    <input type="date" id="star_tdate" name="start_date" value="<?php echo $start_date  ;?>" placeholder="Course start date"  required><br>

    <label for="fname"> End-Date</label><br>
    <input type="date" id="end_date" name="end_date" value="<?php echo $end_date ;?>" placeholder="Course end date"  required><br><br>

    <label for="fname">Fees</label>
    <input type="text" id="fees" name="fees" value="<?php echo $fees ;?>" placeholder="course fees..">

    
    


    <input type="submit" value="Apply" class="sub_btn">
    
  </form>
</div>
 
</body>
</html>