<?php
include_once "../../../connection.php";
session_start();

if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{
$student_id=$_SESSION['student_id'];
  $s_name = $_POST['s_name'];
  $nick_name=$_POST['nick_name'];
  $college = $_POST['college'];
  $class = $_POST['cl'];
  $phone_no=$_POST['phone_no'];
  $father_mobile = $_POST['father_mobile'];
  $mother_mobile = $_POST['mother_mobile'];
  $father_name = $_POST['father_name'];
  $f_profession = $_POST['f_profession'];

  $mother_name = $_POST['mother_name'];
  $m_profession = $_POST['m_profession'];
  $type= $_POST['type'];

  $requested_course = $_POST['requested_course'];
  $model_test = $_POST['model_test'];
  $shift = $_POST['shift'];
  $mayment_method = $_POST['mayment_method'];
  $pay_id = $_POST['pay_id'];
  $amount = $_POST['amount'];


  ///file upload
if($_FILES['file']['name']!=''){
  $name = $_FILES['file']['name'];
  echo $name;
  $tmp_name =  $_FILES['file']['tmp_name'];
  $location = "../../../application/";
  $uniquename=time()."-".rand(1000, 9999)."-".$name;

  $new_name = $location.$uniquename;
  if (move_uploaded_file($tmp_name, $new_name)){
              }
  else{

      $new_name = $location.time()."-".rand(1000, 9999)."-".$name;
      if (move_uploaded_file($tmp_name, $new_name)){
                  }
      else{
        $uniquename='';

      }
  }





  $sql="UPDATE current_student SET image='$uniquename' WHERE current_student_id='$student_id'";
  //$sql = "INSERT INTO student_info (s_name,f_name,phone_no,subject,roll_no,session,registration,date,image)
  //VALUES ('$s_name','$father_name','$phone_no', '$subject','$roll_no','$session','$registration','$date','$uniquename')";
  if (mysqli_query($conn, $sql)) {


  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}



if($type=="Model Test"){
  $course=$_POST['model_test'];
}else{
  $course=$_POST['requested_course'];
}



$date=date("Y-m-d");


$sql="UPDATE current_student SET s_name='$s_name',nick_name='$nick_name',college='$college',class='$class',phone_no='$phone_no',shift='$shift',father_mobile='$father_mobile',mother_mobile='$mother_mobile',
father_name='$father_name',mother_name='$mother_name',requested_course='$course',type='$type' WHERE current_student_id='$student_id'";
//$sql = "INSERT INTO student_info (s_name,f_name,phone_no,subject,roll_no,session,registration,date,image)
//VALUES ('$s_name','$father_name','$phone_no', '$subject','$roll_no','$session','$registration','$date','$uniquename')";
if (mysqli_query($conn, $sql)) {


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


///find out last id

header('Location:all_student.php');

}


 ?>
