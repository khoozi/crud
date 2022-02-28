<?php

include('database.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($connection,$id);
    
    
} 
function edit_data($connection, $id)
{
 $query= "SELECT * FROM user_details WHERE id= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($connection, $id){

      $full_name= legal_input($_POST['full_name']);
      $date_of_birth= legal_input($_POST['date_of_birth']);
      $kg = legal_input($_POST['kg']);
      $date_of_admission = legal_input($_POST['date_of_admission']);
      $ward= legal_input($_POST['ward']);
      $tb_start= legal_input($_POST['tb_start']);
      $r = legal_input($_POST['r']);
      $arv_history = legal_input($_POST['arv_history']);
      $active_problems= legal_input($_POST['active_problems']);
      $meds= legal_input($_POST['meds']);
      $studies = legal_input($_POST['studies']);
      $follow_up = legal_input($_POST['follow_up']);

      $query="UPDATE user_details 
            SET full_name='$full_name',
                date_of_birth='$date_of_birth',
                kg= '$kg',
                date_of_admission='$date_of_admission',
                ward='$ward',
                tb_start='$tb_start',
                r= '$r',
                arv_history='$arv_history',
                active_problems='$active_problems',
                meds='$meds',
                studies= '$studies',
                follow_up='$follow_up' WHERE id=$id";

      $exec= mysqli_query($connection,$query);
  
      if($exec){
         header('location:user-table.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
         echo $msg;  
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>