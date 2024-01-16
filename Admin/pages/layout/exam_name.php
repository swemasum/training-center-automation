

<?php

session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{

include_once "../../../connection.php";

if(isset($_SESSION['last_exam'])){
  $en_id=$_SESSION['last_exam'];

}else{
   $en_id=$_SESSION['en_id'];
}
if($_POST['name']){
$name=$_POST['name'];
}else{
  $name=$_POST['selected_name'];
}


          $sql = "UPDATE exam_no SET exam_name='$name' WHERE en_id='$en_id'";

          if (mysqli_query($conn, $sql)) {
              echo "Record updated successfully";
          } else {
              echo "Error updating record: " . mysqli_error($conn);
          }

unset($_SESSION['last_exam']);
unset($_SESSION['en_id']);
 header('Location:result_select_exam_no.php');

}
?>
