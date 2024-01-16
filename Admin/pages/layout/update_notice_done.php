<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{



          include_once "../../../connection.php";
// sql to delete a record
$title=$_POST['title'];

$notice=$_POST['notice'];
$date=date("Y-m-d");
$id=$_SESSION['n_id'];

if($_FILES['file']['name']){
  $name = $_FILES['file']['name'];
  $tmp_name =  $_FILES['file']['tmp_name'];
  $location = "uploads/";
  $uniquename=time()."-".rand(1000, 9999)."-".$name;
  echo $uniquename;
  $new_name = $location.$uniquename;
  if (move_uploaded_file($tmp_name, $new_name)){
              echo "uploaded";
              $file_name=$_SESSION['file_name'];
              unlink('uploads/'.$file_name);
  }
  else{
      sleep(rand(1,5));
      $new_name = $location.time()."-".rand(1000, 9999)."-".$name;
      if (move_uploaded_file($tmp_name, $new_name)){
              echo "uploaded";
      }
      else{

              echo"failed, better luck next time";
      }
  }
  echo "set";
  $sql = "UPDATE notice set title='$title',notice='$notice',file_name='$uniquename' WHERE n_id=$id";

}else{
  echo " not set";
  $sql = "UPDATE notice set title='$title',notice='$notice' WHERE n_id=$id";
}
//end file


if (mysqli_query($conn, $sql)) {
   echo "Record update successfully";
   header('Location:all_notice.php');
} else {
   echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

}
 ?>
