<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{


          include_once "../../../connection.php";
// sql to delete a record
$id=$_GET['id'];
$sql = "SELECT status FROM current_student where current_student_id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $status=$row['status'];
    }
} else {
    echo "0 results";
}
if($status=="active"){
  $sql = "UPDATE current_student SET status='retire' WHERE current_student_id=$id";
  if (mysqli_query($conn, $sql)) {
     echo "Record deleted successfully";
     header('Location:all_student.php');
  } else {
     echo "Error deleting record: " . mysqli_error($conn);
  }

}else{
  $sql = "UPDATE current_student SET status='active' WHERE current_student_id=$id";
  if (mysqli_query($conn, $sql)) {
     echo "Record deleted successfully";
     header('Location:all_student.php');
  } else {
     echo "Error deleting record: " . mysqli_error($conn);
  }

}

mysqli_close($conn);
}

 ?>
