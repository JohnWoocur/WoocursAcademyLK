
<?php
$id=$_GET['id'];
$amount=0;
$salary=0;
$month=$_GET['month'];
?>
<!DOCTYPE html>
<html>
<head>
<style>
.inner-table {
    width: 100%;
    border: 1px solid black;
}

.inner-table td {
    border: 1px solid black;
}
</style>
</head>
<body style="color: blue ;">

<table style="width:100%; ">
 <tr >
    <th colspan="4"  ><h1 style="color: blue ;" >WOOCURS ACADEMY</h1></th>
 </tr>
 <tr>
    <th colspan="4"><h2 style="color: blue ;">Payroll Sheet</h2></th>
 </tr>
 <tr>
    <th colspan="4"><h3 style="color: blue ;">Month : <?php echo $month ?></h3></th>
 </tr>
 <tr>
 <?php 
        require 'db_connection.php';
        
        $query="SELECT * FROM `staffs` WHERE `staff_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($row=mysqli_fetch_assoc($result)):?>
    <th style="color: blue ;" colspan="4">Name : <?php echo $row['first_name'];?> <?php echo $row['last_name'];?></th>
    <?php endif; ?>
 </tr>
 <tr>
    <td colspan="2">
        <br>
      <table class="inner-table">
        <tr>
          <th>Leave</th>
        </tr>
        <tr>
          <td>Reason</td>
          <td>Days</td>
          <td>Fine</td>
        </tr>

        <?php 
        require 'db_connection.php';
        
        $query="SELECT * FROM `leaves` WHERE staff_id='$id' AND `status`='approved'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)):?>
        <tr>
          <td><?php echo $row['type']; ?></td>
          <td><?php echo $row['no_of_leaves']; ?></td>
          <td><?php echo $row['no_of_leaves']*500; ?></td>
          <?php $amount=$amount+$row['no_of_leaves']*500; ?>
        </tr> 
        <?php
        endwhile;
        }
        else{
            ?>
            <tr>
          <td style="color: blue ;">No records Available</td>
        </tr>
        <?php
        }
        ?>
        
      </table>
    </td>
    <td colspan="2">
    <br>
      <table class="inner-table">
        <tr>
          <th>Medical</th>
        </tr>
        <tr>
          <td>Reason</td>
          <td>Days</td>
          <td>Fine</td>
        </tr>
        <tr>
          <td style="color: blue ;">No records found</td>
        </tr>
      </table>
    </td>
 </tr>
 <tr>
    <td colspan="2">
    <br>
      <table class="inner-table">
        <tr>
          <th>Food</th>
        </tr>
        <tr>
          <td>Reason</td>
          <td>Days</td>
          <td>Fine</td>
        </tr>
        <tr>
          <td style="color: blue ;">No records found</td>
        </tr>
      </table>
    </td>
    <td colspan="2">
    <br>
      <table class="inner-table">
        <tr>
          <th>Extra</th>
        </tr>
        <tr>
          <td>Reason</td>
          <td>Days</td>
          <td>Fine</td>
        </tr>
        <tr>
          <td style="color: blue ;">No records found</td>
        </tr>
      </table>
    </td>
 </tr>
 <tr>
    <td colspan="4">
    <br>
      <table class="inner-table">
        <tr>
          <td>Payment</td>
          <td>Basic salary</td>
          <td>Current salary</td>
        </tr>
        <tr>
          <td>Amount</td>
          <?php 
        require 'db_connection.php';
        
        $query="SELECT * FROM `staffs` WHERE staff_id='$id'";
        $result=mysqli_query($conn,$query);
        if($row=mysqli_fetch_assoc($result)):?>
          <td><?php echo $row['salary']; ?></td>
          <?php $salary=$row['salary']; ?>
        <?php else:?>
          <td><?php echo $salary; ?></td>
        <?php
        endif;
        ?>
          <td><?php echo $salary-$amount; ?></td>
        </tr>
      </table>
    </td>
 </tr>
</table>
<br>
<button onclick="window.print()" style="position:absolute ; bottom:0;">Print</button>

</body>
</html>