 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link rel="stylesheet" type="text/css" href="assets/css/course_style.css">
    <title>Document</title>
</head>
<body style="background-image: url(assets/images/bg4.avif);">
    <h1>Course Add </h1>

<div class="container"  >
  
  <form action="a_courese_add.php" method="POST" enctype="multipart/form-data">

    <label for="image">  <i class="fa-sharp fa-regular fa-image"></i>image</label><br>
    <input type="file" name="c_image" accept="image/*" required>
	
    <label for="course"> Cousrse</label>
    <input type="text" id="course_name" name="course_name" placeholder="Course name..">

    <label for="duration">Duration</label>
    <input type="text" id="duration" name="duration" placeholder="Couse duration">

    <label for="course_id"> Staff Name </label>
                                            <select id="staff_id" name="staff_id" required>
                                              <?php
                   require "db_connection.php";
                                                $query = "SELECT first_name,last_name,staff_id FROM staffs WHERE status = 'Active'";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = $result->fetch_assoc()) {
                                                  $name=$row['first_name']." ".$row['last_name'];
                                                    echo "<option value='" . $row['staff_id'] . "'>" . $name . "</option>";
                                                }
                                                ?>
                                            </select>

    <label for="c_cetegory">Course Category</label>
    <input type="text" id="category" name="category" placeholder="Couse category (Part Time /Full Time)">
    
    <label for="fname"> Star_Date</label><br>
    <input type="date" id="star_tdate" name="start_date" placeholder="Course start date"  required><br>

    <label for="fname"> End-Date</label><br>
    <input type="date" id="end_date" name="end_date" placeholder="Course end date"  required><br><br>

    <label for="fname">Number of Students</label><br>
    <input type="number" id="num_student" name="num_student" placeholder="Enter the student limitation"  required><br><br>

    <label for="fname">Fees</label>
    <input type="text" id="fees" name="fees" placeholder="course fees..">

    <label for="fname">Description</label>
    <input type="text" id="description" name="description" placeholder="course fees..">


    <input type="submit" value="Submit">
     <input type="reset" value="Reset" class="r_btn"> 
     
  </form>
</div>
</body>
</html>