<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{


  include_once "../../../connection.php";
$ps_id=$_REQUEST['id'];
echo $ps_id;

$sql = "DELETE FROM batch WHERE b_id='$ps_id'";

if (mysqli_query($conn, $sql)) {
      header('Location: batch_set.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
}

 ?>
