

<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{

include_once "../../../connection.php";
$title=$_POST['title'];

$notice=$_POST['notice'];
$date=date("Y-m-d");

///file upload
///file upload
$name = $_FILES['file']['name'];
$tmp_name =  $_FILES['file']['tmp_name'];
$location = "uploads/";
$uniquename=time()."-".rand(1000, 9999)."-".$name;
echo $uniquename;
$new_name = $location.$uniquename;
if (move_uploaded_file($tmp_name, $new_name)){
            echo "uploaded";
}
else{
    sleep(rand(1,5));
    $new_name = $location.time()."-".rand(1000, 9999)."-".$name;
    if (move_uploaded_file($tmp_name, $new_name)){
            echo "uploaded";
    }
    else{
      $uniquename='';
            echo"failed, better luck next time";
    }
}
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

  $sql = "Insert into notice (title,notice,date,file_name) values ('$title','$notice','$date','$uniquename')";



if (mysqli_query($conn, $sql)) {
    echo "Successfully update batch no";
 header('Location:all_notice.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>
