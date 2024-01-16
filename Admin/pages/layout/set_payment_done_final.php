
<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{


include_once "../../../connection.php";
$date=date("Y-m-d");
$type=$_POST['type'];
$course=$_POST['course'];
$model_test=$_POST['model_test'];
$amount=$_POST['amount'];
$shift=$_POST['shift'];
if($type=='Model Test'){
  $final_course=$model_test;
}else{
  $final_course=$course;
}

// sql to delete a record
$sql = "DELETE FROM payment_set WHERE type='$type' and course='$final_course' and shift='$shift'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

  $sql = "insert into payment_set(type,course,shift,date,amount) values('$type','$final_course','$shift','$date','$amount');";



if (mysqli_query($conn, $sql)) {
    echo "Successfully update batch no";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



  header('Location: set_payment.php');
mysqli_close($conn);

}
?>
