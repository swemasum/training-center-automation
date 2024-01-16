<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{



          include_once "../../../connection.php";
// sql to delete a record

$id=$_GET['id'];
$sql = "SELECT file_name FROM notice where n_id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo $row['file_name'];
        unlink('uploads/'.$row['file_name']);
    }
} else {
    echo "0 results";
}

$sql = "DELETE FROM notice WHERE n_id=$id";

if (mysqli_query($conn, $sql)) {
   echo "Record deleted successfully";
   header('Location:all_notice.php');
} else {
   echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

}
 ?>
