<?php

include('update-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Patient Update</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
  form{
      margin-right: 20%;
      margin-left: 10%;
      margin-top: 7%;
      margin-bottom: 7%;
  }
</style>
</head>
<body>
<!--====form section start====-->

<div class="user-detail">
    
    <?php if(!empty($msg)){echo $msg; }?>

    <form method="post" action="">
          <label>Full Name</label>
          <input type="text" placeholder="Enter Full Name" name="full_name" required value="<?php echo isset($editData) ? $editData['full_name'] : '' ?>">

          <label>Date of Birth</label>
          <input type="text" placeholder="Enter Date of Birth" name="date_of_birth" required value="<?php echo isset($editData) ? $editData['date_of_birth'] : '' ?>">

          <label>Kilograms</label>
          <input type="text" placeholder="Enter Kilograms" name="kg" required value="<?php echo isset($editData) ? $editData['kg'] : '' ?>">

          <label>Date of Admission</label>      
          <input type="text" placeholder="Enter Date of Admission" name="date_of_admission" required value="<?php echo isset($editData) ? $editData['date_of_admission'] : '' ?>">

          <label>Ward</label>      
          <input type="text" placeholder="Enter Ward" name="ward" required value="<?php echo isset($editData) ? $editData['ward'] : '' ?>">

          <label>TB_Start</label>
          <input type="text" placeholder="Enter TB_Start" name="tb_start" required value="<?php echo isset($editData) ? $editData['tb_start'] : '' ?>">

          <label>R</label>
          <input type="text" placeholder="Enter R" name="r" required value="<?php echo isset($editData) ? $editData['r'] : '' ?>">

          <label>ARV_History</label>
          <input type="text" placeholder="Enter ARV History" name="arv_history" required value="<?php echo isset($editData) ? $editData['arv_history'] : '' ?>">

          <label>Active Problems</label>        
          <input type="text" placeholder="Enter Active Problems" name="active_problems" required value="<?php echo isset($editData) ? $editData['active_problems'] : '' ?>">

          <label>Meds</label>      
          <input type="text" placeholder="Enter Meds" name="meds" required value="<?php echo isset($editData) ? $editData['meds'] : '' ?>">

          <label>Studies</label>
          <input type="text" placeholder="Enter Studies" name="studies" required value="<?php echo isset($editData) ? $editData['studies'] : '' ?>">

          <label>Follow Up</label>
          <input type="text" placeholder="Enter Follow Up Details" name="follow_up" required value="<?php echo isset($editData) ? $editData['follow_up'] : '' ?>">
          <button type="submit" name="update">Submit</button>
    </form>
</div>
<!--====form section start====-->


</body>
</html>