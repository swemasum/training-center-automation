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
  <title>Admin</title>
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



      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
      <link rel="stylesheet" href="../../../css/styles-merged.css">
      <link rel="stylesheet" href="../../../css/style.min.css">
      <link rel="stylesheet" href="../../../css/custom.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"
              ></script>

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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
       <div class="col-md-12">
           <div class="card">
               <div class="card-body">

                   <div class="row">
               <div class="col-md-4 col-sm-4">
                 <form class="" action="all_notice.php" method="post">
                   <div class="form-group ">
                     <select name="date" class="form-control" >

                       <option value="">Select Date:</option>

                                      <?php
                                        include_once "../../../connection.php";
                                            // Check connection
                                            if (!$conn) {
                                              die("Connection failed: " . mysqli_connect_error());
                                            }

                                            $sql = "select date from notice group by date order by date desc ";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                              // output data of each row
                                              while($row = mysqli_fetch_assoc($result)) {

                                                echo '<option value="'.$row['date'].'">'.$row['date'].'</option>'  ;



                                              }
                                            } else {
                                              echo "0 results";
                                            }


                                          ?>



                     </select>
                       </div>
               </div>


               <div class="col-md-1 col-sm-1">
                 <input type="submit" class="btn btn-danger" name="submit" value="search">
                  </form>
               </div>

    <div class="col-md-1">

    </div>
               <form class="" action="all_notice.php" method="post">

             <div class="col-md-4 col-sm-4">
                 <div class="form-group ">
              <input type="text" name="search" class="form-control" value="" PLACEHOLDER="Title/Notice">
                     </div>
             </div>


             <div class="col-md-1 col-sm-1">
               <input type="submit" class="btn btn-danger" name="submit" value="search" >
             </div>

               </form>

           </div>


               </div>
           </div>

       </div>


    </div>

    </section>



          <section class="probootstrap-section probootstrap-section">
            <div class="container">
              <div class="row">
                <div class="col-md-12">

                  <div class="tab-content">

                    <div id="featured-news" class="tab-pane fade in active">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="owl-carousel" id="owl1">
                            <?php
                              include_once "../../../connection.php";
                                  // Check connection
                                  if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                  }

                                  if(isset($_POST['date'])){
                                    $date=$_POST['date'];
                                    $sql = "SELECT * FROM notice where date='$date'";
                                  }else if(isset($_POST['search'])){
                                          $search=$_POST['search'];
                                          $sql = "SELECT * FROM notice where title like '%$search%' or notice like '%$search%' ";

                                      }else{
                                    $sql = "SELECT * FROM notice order by n_id desc";

                                  }

                                  $result = mysqli_query($conn, $sql);

                                  if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {

                                     echo '<div class="item">';
                                     echo '  <span href="#" class="probootstrap-featured-news-box">';
                                     echo '  <figure class="probootstrap-media"><img src="../../../img/notice.png" style="margin-bottom:20px" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>';
                                     echo '<div class="probootstrap-text">';

                                     echo '<h3 style="font-weight:bold">'.$row['title'].'</h3>';
                                    echo '  <p style="overflow-y: scroll;height:250px">'.$row['notice'].'</p>';
                                     echo '<div class="row">
                                       <div class="col-md-6">';
                                     echo '<span class="probootstrap-date"><i class="icon-calendar"></i>'.$row['date'].'</span>';
                                    echo '</div> <div class="col-md-6">';
                                    if($row['file_name']!= ''){
                                      echo '<span class="probootstrap-date "><a href="uploads/'.$row['file_name'].'"><i class="glyphicon glyphicon-save"></i></a>Download</span>';

                                    }
                                   echo ' </div>
                                    </div>';

                                    echo '<div class="row">
                                      <div class="col-md-6">';
                                      echo '<span class="probootstrap-date "><a href="edit_notice.php?id='.$row['n_id'].'"><i class="glyphicon glyphicon-pencil"></i></a>Edit</span>';

                                      echo '</div> <div class="col-md-6">';

                                     echo '<span class="probootstrap-date "><a href="delete_notice.php?id='.$row['n_id'].'"><i class="glyphicon glyphicon-remove"></i></a>Delete</span>';


                                  echo ' </div>
                                   </div>';
                                    echo '</div>';

                                   echo '</span>';

                                echo '</div>';

                                    }
                                  } else {
                                    echo "0 results";
                                  }

                                  mysqli_close($conn);
                                }
                                ?>

                          </div>
                        </div>
                      </div>
                      <!-- END row -->
                      <div class="row">
                        <div class="col-md-12 text-center">
                          <p><a href="#" class="btn btn-primary">View all news</a></p>
                        </div>
                      </div>
                    </div>


                  </div>

                </div>
              </div>
            </div>
          </section>










      </div>






    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
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

    <script src="../../../js/scripts.min.js"></script>
    <script src="../../../js/main.min.js"></script>
    <script src="../../../js/custom.js"></script>
</body>
</html>
