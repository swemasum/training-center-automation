

<?php

session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{


include_once "../../../connection.php";
$type=$_POST['type'];
$course=$_POST['course'];
$model_test=$_POST['model_test'];
$shift=$_POST['shift'];
echo $shift;
$date=date("Y/m/d");
// Check connection

// find out last batch no of current student
$sql = "SELECT batch_no FROM batch ORDER BY batch_no DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $batch=$row['batch_no'];
    }
} else {
    $batch=0;
}
$batch++;
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if($type=='Model Test'){
  $sql = "INSERT INTO batch (type, course,status,shift,Activation_date,batch_no)
  VALUES ('$type', '$model_test','running', '$shift','$date','$batch')";
}else{
  $sql = "INSERT INTO batch (type, course,status, shift,Activation_date,batch_no)
  VALUES ('$type', '$course','running','$shift','$date','$batch')";
}


if (mysqli_query($conn, $sql)) {

  header('Location: batch_set.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
?>
