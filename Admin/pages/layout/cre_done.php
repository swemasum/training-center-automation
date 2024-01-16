

<?php

session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{


if($_POST['submit']){
include_once "../../../connection.php";

$already=$_SESSION['already'];
$batch_no=$_SESSION['batch_no'];
$exam_no=$_SESSION['exam_no'];
echo $already;

echo "old student".count($_SESSION['student']);

echo "new student".count($_SESSION['student_new']);
      for($i = 0 ; $i < count($_SESSION['student']) ; $i++) {
          $roll=$_SESSION['student'][$i];
        //  echo '<td>'.$_SESSION['student'][$i].'</td><br>';

          $marks=$_POST[$_SESSION['student'][$i]];
          echo '<br>existed student: '.$roll;

          $sql = "UPDATE result SET cre='$marks' WHERE current_student_id='$roll' and exam_no='$exam_no'";
          $result = mysqli_query($conn, $sql);


          }


      for($i = 0 ; $i < count($_SESSION['student_new']) ; $i++) {
          $roll=$_SESSION['student_new'][$i];
        //  echo '<td>'.$_SESSION['student'][$i].'</td><br>';

          $marks=$_POST[$_SESSION['student_new'][$i]];
          echo '<br>new student: '.$roll;

          $sql = "INSERT INTO result (current_student_id, batch_no,exam_no,cre)
          VALUES ('$roll', '$batch_no','$exam_no','$marks')";
          $result = mysqli_query($conn, $sql);


          }


     unset($_SESSION['student']);
     unset($_SESSION['student_new']);
     unset($_SESSION['already']);
  header('Location:result_select_batch.php');
    }

/*
$type=$_POST['type'];
$course=$_POST['course'];
$model_test=$_POST['model_test'];
$time=$_POST['time'];
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
    echo "0 results";
}
$batch++;
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if($type=='model_test'){
  $sql = "INSERT INTO batch (type, course,status, batch_time,Activation_date,batch_no)
  VALUES ('$type', '$model_test','running', '$time','$date','$batch')";
}else{
  $sql = "INSERT INTO batch (type, course,status, batch_time,Activation_date,batch_no)
  VALUES ('$type', '$course','running','$time','$date','$batch')";
}


if (mysqli_query($conn, $sql)) {

  header('Location: batch_set.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
*/
}

?>
