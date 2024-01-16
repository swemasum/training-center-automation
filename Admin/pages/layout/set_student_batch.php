<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{

 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Fixed Layout</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>AM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Cam</b>TOR</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>jahedul hoque</p>
          <a href="../../logout.php"><i class="fa fa-circle text-success"></i> LOG OUT</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="../../admin.php">
            <i class="fa fa-dashboard"></i> <span href="admin.php">Dashboard</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>New application</span>

          </a>
          <ul class="treeview-menu">

            <li><a href="table.php"><i class="fa fa-circle-o"></i> Check applications</a></li>
            </ul>
        </li>
        <li>
          <a href="add_student.php">
            <i class="	glyphicon glyphicon-plus"></i> <span href="add_student.php">Add student</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li>
          <a href="message.php">
            <i class="glyphicon glyphicon-envelope"></i> <span href="add_student.php">message</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="set_payment.php"><i class="fa fa-circle-o"></i> Set Payment</a></li>
            <li><a href="all_student.php"><i class="fa fa-circle-o"></i>Payment Status</a></li>
            <li><a href="renew.php"><i class="fa fa-circle-o"></i>Renew payment</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Batch control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="batch_set.php"><i class="fa fa-circle-o"></i> Batch set</a></li>
        </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="	glyphicon glyphicon-user"></i> <span>Student</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="all_student.php"><i class="fa fa-circle-o"></i> All student</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="	glyphicon glyphicon-file"></i> <span>Notice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="new_notice.php"><i class="fa fa-circle-o"></i>New notice</a></li>
                <li><a href="all_notice.php"><i class="fa fa-circle-o"></i>All notice</a></li>
            </ul>


        </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-pencil"></i> <span>Result</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="result_select_batch.php"><i class="fa fa-circle-o"></i>Upload Result</a></li>

                <li><a href="show_result_select_batch.php"><i class="fa fa-circle-o"></i>Show Result</a></li>
            </ul>


        </li>

        <li class="treeview">
          <a href="#">
            <i class="	glyphicon glyphicon-picture"></i> <span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="upload_gallery.php"><i class="fa fa-circle-o"></i>Upload Gallery</a></li>

                <li><a href="show_gallery.php"><i class="fa fa-circle-o"></i>Show Gallery</a></li>
            </ul>


        </li>
        <li>
          <a href="new_password.php">
            <i class="glyphicon glyphicon-lock"></i> <span href="add_student.php">Change Password</span>

          </a>
        </li>


    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fixed Layout
        <small>Blank example to the fixed layout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Fixed</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row" >


        <div class="col-lg-12 col-md-12 " style="padding:10px;border:1px solid #9C9C9C;margin:5px;border-radius:10px;">
                <form  action="set_batch_done.php" method="post">

              <div class="row">
                <div class="col-md-4 col-lg-4">
                  <div class="form-group" >
                    <label for="pwd">course Type:</label>
                    <select name="type" class="form-control" id="ddlViewBy" onchange="order(this)">
                      <option value="">select one</option>
                      <option value="Regular">Regular</option>
                      <option value="model_test">Model Test</option>
                      <option value="revision">Revision</option>
                    </select>
                  </div>
                </div>
                <div
                <div class="col-md-4 col-lg-4">
                  <div class="form-group" id="man_cont1" style="display:none">
                    <label for="pwd">Course:</label>
                    <select name="course" class="form-control"  >
                      <option value="">Select one</option>
                      <option value="Academic(VIII-General Science)">Academic(VIII-General Science)</option>
                      <option value="Academic(IX)">Academic(IX)</option>
                      <option value="Academic(X)">Academic(X)</option>
                      <option value="Academic(XI)">Academic(XI)</option>
                      <option value="Academic(XII)">Academic(XII)</option>

                    </select>
                  </div>
                </div>

                <div class="col-md-4 col-lg-4">
                  <div class="form-group" id="man_cont"  style="display:none">
                    <label for="pwd">Model Test:</label>
                    <select name="model_test" class="form-control" >
                      <option value="">Select one:</option>
                      <option value="JSC">JSC</option>
                      <option value="SSC">SSC</option>
                      <option value="HSC">HSC</option>

                    </select>
                  </div>
                </div>

            </div>
            <script>
            ///for hide and show element
                    function order(el) {
                      var x = el.value;

                      if (x == "revision" || x=="Regular") {
                      document.getElementById('man_cont').style.display = 'none';
                        document.getElementById('man_cont1').style.display = 'block';

                      } else {

                        document.getElementById('man_cont').style.display = 'block';
                        document.getElementById('man_cont1').style.display = 'none';
                      }
                    }
          </script>



        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <label for="pwd">Batch time:</label>
              <input type="time" name="time" class="form-control" id="pwd">
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <button style="margin-top:26px" type="submit"  class="btn btn-danger">Add new course</button>

          </div>
        </div>


            </form>

        </div>

      </div>



      <div class="table-wrapper-scroll-x">
        <table class="table">
            <thead>

              <tr class="danger">
                <td>Batch no</td>
                <td>Course type</td>
                <td>Course</td>
                <td>Status</td>
                <td>Batch time</td>
                <td>activation date</td>

                <td>Action</td>
              </tr>

              <?php
                include_once "../../../connection.php";
                    // Check connection
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM batch order by batch_no desc";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='info'>";
                          echo "<td>" . $row["batch_no"]."</td>";
                          echo "<td>" . $row["type"]."</td>";
                          echo "<td>" . $row["course"]."</td>";
                          echo "<td>" . $row["status"]."</td>";
                          echo "<td>" . $row["batch_time"]."</td>";
                          echo "<td>" . $row["Activation_date"]."</td>";

                          echo '<td><a href="set_batch_delete.php?id='.$row['b_id']. '"class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-remove"></span>
        </a>
        <a href="change_status.php?id='.$row['b_id']. '"class="btn btn-info btn-lg">
<span class="glyphicon ">Change status</span>
</a>
</td>';
                        echo "</tr>";
                      }
                    } else {
                      echo "0 results";
                    }

                    mysqli_close($conn);
                  }
                  ?>

            </tbody>
          </table>

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
