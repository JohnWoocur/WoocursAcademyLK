<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
                         
    <div class="wrapper">
        <h2>Payment Form</h2>
<?php
    require "db-connection.php";
    // $id=1;
    // $query="SELECT * FROM `customer` WHERE id='$id'";
    // $result = mysqli_query($conn,$query);
    // if(mysqli_num_rows($result)==1){
    // $row=mysqli_fetch_assoc($result);
       
    
                           
    ?> 
        <form action="payment.php" method="POST" enctype="multipart/form-data">
            <!--Account Information Start-->
            <h4>Account</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="First Name" name="first_name" required class="name" >
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="text" placeholder="Last Name" name="last_name" required class="name" name="">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" placeholder="Email Address" name="email" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Address" name="address" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="number" placeholder="Phone Number" name="phone_no" required class="name">
                    <i class="fa fa-phone icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Course Name" name="course" required class="name">
                    <i class="fa fa-book icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Slip No" name="slip_no" required class="name">
                    <i class="fa fa-pencil icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="date" placeholder="DD.MM.YYYY" name="date" required class="name">
                    <i class="fa fa-calendar icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Gender" name="gender" required class="name">
                    <i class="fa fa-users icon"></i>
                    <!-- <select name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select> -->
                </div>
            </div>
            <!--Account Information End-->


            <!--DOB & Gender Start-->
            <!-- <div class="input_group">
                </div>
            <div class="select" >
                    <h4>Gender</h4> -->
                    <!-- <input type="radio" name="gender" class="radio" id="b1">
                    <label for="b1" value="Male">Male</label>
                    <input type="radio" name="gender" class="radio" id="b2">
                    <label for="b2" value="Female">Female</label> -->
                    <!-- <select name="gender" >
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div> -->
            <!--DOB & Gender End-->


            <!--Payment Details Start-->
            <div class="input_group">
                <div class="input_box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="photo" class="radio" id="bc1" checked>
                    <label for="bc1"><span>
                            <i class="fa fa-cc-visa"></i>Credit Card</span></label>
                    <input type="file" name="photo" class="radio" id="bc2"  for="file" accept="image/*">
                    <label for="bc2" ><span>
                            <i class="fa fa-cc-slip"></i>Slip</span></label>
                </div>
            </div>
        

            <div class="input_group">
                <div class="input_box">
                    <button type="submit" name="submit">PAY NOW</button>
                </div>
            </div>
            <!-- <?php  ?> -->
        </form>
    </div>

</body>

</html>
        