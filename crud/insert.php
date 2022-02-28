<?php
include_once 'db.php';
include 'contact.php';
if(isset($_POST['submit']))
{    
     $full_name = $_POST['full_name'];
     $date_of_birth = $_POST['date_of_birth'];
     $kg = $_POST['kg'];
     $date_of_admission = $_POST['date_of_admission'];
     $ward = $_POST['ward'];
     $tb_start = $_POST['tb_start'];
     $r = $_POST['r'];
     $arv_history = $_POST['arv_history'];
     $active_problems = $_POST['active_problems'];
     $meds = $_POST['meds'];
     $studies = $_POST['studies'];
     $follow_up = $_POST['follow_up'];
     $sql = "INSERT INTO user_details (full_name,date_of_birth,kg,date_of_admission,ward,tb_start,r,arv_history,active_problems,meds,studies,follow_up) VALUES ('$full_name','$date_of_birth','$kg','$date_of_admission','$ward','$tb_start','$r','$arv_history','$active_problems','$meds','$studies','$follow_up')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>