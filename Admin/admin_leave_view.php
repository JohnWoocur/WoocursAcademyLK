<?php
      include "db_connection.php";
      $sql = mysqli_query($conn,"SELECT * FROM staffs WHERE status = 'Active'");

?>

                                  
<?php

	while($row = $sql->fetch_assoc()) {
	$staff_id = $row["staff_id"];
	$last_name = $row["last_name"];
	$contact_no = $row["contact_no"];
	$email = $row["email"];
	$department = $row["department"];
?>
										
<?php
    include "db_connection.php";
    $result = mysqli_query($conn,"SELECT * FROM leaves");

?>
<?php

         while($row = $result->fetch_assoc()) {
		$type = $row["type"];
		$description = $row["description"];
		$start_date = $row["start_date"];
		$end_date = $row["end_date"];
		$no_of_leaves = $row["no_of_leaves"];
		$date = $row["date"];
		$status = $row["status"];
?>


<html lang="en">
   <head>
        <link rel="stylesheet" type="text/css" href="assets/css/leave.css">
		
        <title>Woocurs Academy LK</title>
</head>
<body>

<div class="main-container">
	<div class="k--sp-form p-bot-100 k--sp-form-approval">
		<h2 class="k--sp-form-title k--sp-form-titlePad">STAFF LEAVE MANAGEMENT</h2>
		<div class="k--sp-description-file k--sp-description-bgsize">
			<ul class="k--sp-block-desc">
			<table>
				<tr><td><li><span>STAFF ID</td></span> <td><b class="font-bold"><?php echo $staff_id; ?></b></td></li></tr>
				<tr><td><li><span>STAFF NAME</td></span> <td><b class="font-bold"><?php echo $last_name; ?></b></td></li></tr>
				<tr><td><li><span>DEPARTMENT</td></span> <td><b class="font-bold"><?php echo $department; ?></b></td></li></tr>
				<tr><td><li><span>E - MAIL</td></span> <td><b class="font-bold"><?php echo $email; ?></b></td></li></tr>
				<tr><td><li><span>PHONE NO</td></span> <td><b class="font-bold"><?php echo $contact_no; ?></b></td></li></tr>
				<tr><td><li><span>EFFECTIVE DATE</td></span> <td><b class="font-bold"><?php echo $date; ?></b></td></li></tr>
				</table>
			</ul>
		</div>
		<form class="k--sp-formRight">
			<div class="d-flex">
				<div class="k--group">
				    <input type="text" value="<?php echo $type; ?>" class="used" disabled>
				    <span class="bar"></span>
				    <label>Leave Type</label>
				</div>
			</div>

			<div class="d-flex">
				<div class="k--group k--w-50">
					<input type="text" value="<?php echo $start_date; ?>"  class="used" disabled>
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<span class="bar"></span>
				    <label>Start Day</label>
				</div>
				<div class="k--group k--w-50">
					<input type="text" value="<?php echo $end_date; ?>"  class="used" disabled>
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<span class="bar"></span>
				    <label>End Day</label>
				</div>
			</div>

			

			<div class="d-flex">
				<div class="k--group k--w-50">
					<input type="text" value="<?php echo $no_of_leaves; ?>"  class="used" disabled>
					<span class="bar"></span>
				    <label>No of Days</label>
				</div>
				<div class="k--group k--w-50">
					<input type="text" value="<?php echo $status; ?>" class="used" disabled>
					<span class="bar"></span>
				    <label>Status</label>
				</div>
			</div>

			<div class="d-flex">
				<div class="k--group">
				    <textarea name="" id="" cols="5" rows="3"  disabled><?php echo $description; ?></textarea >
				    <span class="bar"></span>
				    <label>Comment</label>
				</div>
			</div>

			<div class="d-flex">	
				<div class="k--group-btn k--w-40">
					<a href="a_active_leave.php ?leave_id=<?php  echo $row["leave_id"]; ?> " class="k--btn k--btnMain k--btn-approved">Approved</a>
				</div>
				<div class="k--group-btn k--w-30">
					<a href="a_reject_leave.php ?leave_id=<?php  echo $row["leave_id"]; ?> " class="k--btn k--btn-reject">Rejected</a>
				</div>
				<div class="k--group-btn k--w-30">
					<a href="admin_leave_list.php" class="k--btn k--btn-secondary">Cancel</a>
				</div>   
			</div>
			<?php
                }
				}
                $conn->close();
            ?>
		</form>
	</div>
</div></center>
<script src="assets/js/leave.js"></script>
</body>
</html>