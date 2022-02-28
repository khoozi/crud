<?php

include('read-script.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Patient Table</title>
<link rel='stylesheet' href="style.css">
<style>
  
  .table-data{
    margin-right: 31%;
    margin-top: 7%;
  }
  
</style>
</head>
<body>
<div class="table-data">
    <table style= "border: 1;">
      <h2>Patatient's Table</h2>
        <tr>

            <th>S.N</th>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>Kilograms</th>
            <th>Date of Admission</th>
            <th>Ward</th>
            <th>Tb_Start</th>
            <th>R</th>
            <th>ARV_History</th>
            <th>Active Problems</th>
            <th>Meds</th>
            <th>Studies</th>
            <th>Follow Up</th>
            <th></th>
            <th></th>

        </tr>
        
<?php

        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
            
?> 
<tr>
  <td><?php echo $sn; ?></td>
  <td><?php echo $data['full_name']; ?></td>
  <td><?php echo $data['date_of_birth'] ?></td>;
  <td><?php echo $data['kg']; ?></td>
  <td><?php echo $data['date_of_admission']; ?></td>
  <td><?php echo $data['ward']; ?></td>
  <td><?php echo $data['tb_start'] ?></td>;
  <td><?php echo $data['r']; ?></td>
  <td><?php echo $data['arv_history']; ?></td>
  <td><?php echo $data['active_problems']; ?></td>
  <td><?php echo $data['meds'] ?></td>;
  <td><?php echo $data['studies']; ?></td>
  <td><?php echo $data['follow_up']; ?></td>
  <td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
  <td><a href="delete-script.php?delete=<?php echo $data['id']; ?>" class="fa fa-trash" aria-hidden="true">Delete</a></td>
</tr> 
<?php

      $sn++; }

      }else{
            
?>

      <tr>
        <td colspan="15">No Data Found</td>
      </tr>
                
<?php

    }
?>
 
    </table>
    </div>

</body>
</html>