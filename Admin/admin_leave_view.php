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
				<tr><td><li><span>STAFF ID</td></span> <td><b class="font-bold">Consumer Assistance</b></td></li></tr>
				<tr><td><li><span>STAFF NAME</td></span> <td><b class="font-bold">02/2018/QLRR-TGD</b></td></li></tr>
				<tr><td><li><span>DEPARTMENT</td></span> <td><b class="font-bold">092/2017/QLRR-TGD</b></td></li></tr>
				<tr><td><li><span>E - MAIL</td></span> <td><b class="font-bold">092/2017/QLRR-TGD</b></td></li></tr>
				<tr><td><li><span>PHONE NO</td></span> <td><b class="font-bold">092/2017/QLRR-TGD</b></td></li></tr>
				<tr><td><li><span>EFFECTIVE DATE</td></span> <td><b class="font-bold"> 01/01/2019</b></td></li></tr>
				</table>
			</ul>
		</div>
		<form class="k--sp-formRight">
			<div class="d-flex">
				<div class="k--group">
				    <input type="text" value="Review document about IOT" class="used" disabled>
				    <span class="bar"></span>
				    <label>Leave Type</label>
				</div>
			</div>

			<div class="d-flex">
				<div class="k--group k--w-50">
					<input type="text" value="20/11/2018" class="used" disabled>
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<span class="bar"></span>
				    <label>Start Day</label>
				</div>
				<div class="k--group k--w-50">
					<input type="text" value="21/11/2018" class="used" disabled>
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<span class="bar"></span>
				    <label>End Day</label>
				</div>
			</div>

			

			<div class="d-flex">
				<div class="k--group k--w-50">
					<input type="text" value="Complete" class="used" disabled>
					<span class="bar"></span>
				    <label>No of Days</label>
				</div>
				<div class="k--group k--w-50">
					<input type="text" value="Complete" class="used" disabled>
					<span class="bar"></span>
				    <label>Status</label>
				</div>
			</div>

			<div class="d-flex">
				<div class="k--group">
				    <textarea name="" id="" cols="5" rows="3" disabled></textarea >
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
					<a href="#" class="k--btn k--btn-secondary">Cancel</a>
				</div>   
			</div>
		</form>
	</div>
</div></center>
<script src="assets/js/leave.js"></script>
</body>
</html>