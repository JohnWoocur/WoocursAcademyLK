<?php include("../protect.php");
notAuthenticated("admin", "login.php"); // if user not authenticated and redirect to login
$Aid = $_SESSION["user_id"];
?>
<?php
include "db_connection.php";
$course_id = $_GET['course_id'];
$sql = "SELECT * FROM `courses` WHERE  course_id='$course_id'";
$check = mysqli_query($conn, $sql);

if ($check) {
    if (mysqli_num_rows($check) == 1) {
        $row = mysqli_fetch_assoc($check);
        $course_id = $row['course_id'];
        $course_name = $row['course_name'];
        $duration = $row['duration'];
        $category = $row['category'];
        $sid = $row['staff_id'];
        $start_date = $row['start_date'];
        $end_date = $row['end_date'];
        $num_student = $row['num_student'];
        $fees = $row['fees'];
        $description=$row['description'];
        $c_image = $row['c_image'];
        
        // echo $course_name;
        // return;
    }
} else {
    echo mysqli_error($conn);
    return;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="course_style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/course_style.css">
    <title>Document</title>
</head>

<body>
                            <?php
                            
                            if(isset($_SESSION['Smsg'])):
                            ?>
                            <div class="form-group">
                                <label class="badge badge-success"><?php echo $_SESSION['Smsg']; ?></label>
                            </div>
                            <?php
                            unset($_SESSION['Smsg']);
                            endif;
                            ?>
                            <?php
                            if(isset($_SESSION['Emsg'])):
                            ?>
                            <div class="form-group">
                            <label class="badge badge-danger"><?php echo $_SESSION['Emsg']; ?></label>
                            </div>
                            <?php
                            unset($_SESSION['Emsg']);
                            endif;
                            ?>
    <h1>Course Update </h1>
    <div class="container">
        <form action="a_course_update.php" method="POST" enctype="multipart/form-data">

            <label for="image"> <i class="fa-sharp fa-regular fa-image"></i>image</label><br>
            <input type="file" name="c_image" accept="image/*" value="<?php echo $c_image; ?> required>

            <label for="course"> Cousrse</label>
            <input type="text" id="course_name" name="course_name" placeholder="Course name.."
                value="<?php echo $course_name; ?>">
            
            <input type="text" id="course_id" name="course_id" placeholder="Course name.."
            value="<?php echo $course_id; ?> " hidden>

            <label for="duration">Duration</label>
            <input type="text" id="duration" name="duration" placeholder="Couse duration"
                value="<?php echo $duration; ?>">
            
                <label for="course_id"> Staff Name </label>
                                            <select id="staff_id" name="staff_id" required>
                                              <?php
                   require "db_connection.php";
                                                $query = "SELECT first_name,last_name,staff_id FROM staffs WHERE staff_id=$sid ";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = $result->fetch_assoc()) {
                                                  $name=$row['first_name']." ".$row['last_name'];
                                                    echo "<option value='" . $row['staff_id'] . "'>" . $name . "</option>";
                                                }
                                                ?>
                                            </select>

            <label for="c_cetegory">Course Category</label>
            <input type="text" id="category" name="category" placeholder="Couse category (Part Time /Full Time)"
                value="<?php echo $category; ?>">

            <label for="fname"> Star_Date</label><br>
            <input type="date" id="star_tdate" name="start_date" placeholder="Course start date"
                value="<?php echo $start_date; ?>" required><br>

            <label for="fname"> End-Date</label><br>
            <input type="date" id="end_date" name="end_date" placeholder="Course end date"
                value="<?php echo $end_date; ?>" required><br><br>

            <label for="fname">Number of Students</label><br>
            <input type="number" id="num_student" name="num_student" placeholder="Enter the student limitation"
                value="<?php echo $num_student; ?>" required><br><br>

            <label for="fname">Fees</label>
            <input type="text" id="fees" name="fees" placeholder="course fees.." value="<?php echo $fees; ?>">

            <label for="fname">Description</label>
            <input type="text" id="description" name="description" placeholder="course fees.."
                value="<?php echo $description; ?>">


            <input type="submit" value="Update">

        </form>
    </div>
</body>

</html>