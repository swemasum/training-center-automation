<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{



          include_once "../../../connection.php";
// sql to delete a record

$g_id=$_GET['g_id'];

$sql = "SELECT image_name FROM gallery where g_id=$g_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo $row['image_name'];
        unlink('gallery/'.$row['image_name']);
    }
} else {
    echo "0 results";
}


$sql = "DELETE FROM gallery WHERE g_id=$g_id";

if (mysqli_query($conn, $sql)) {
   echo "Record deleted successfully";
   header('Location:show_gallery.php');
} else {
   echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

}
 ?>
