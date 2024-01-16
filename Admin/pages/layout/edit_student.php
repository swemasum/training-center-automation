<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Fixed Layout</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
      <span class="logo-lg"><b>KA</b>UC</span>
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
          <p>Abdur Rashid</p>
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

<?php
include_once "../../../connection.php";
if(!isset($_GET['id'])){
header('Location:all_student.php');
}else{

  $id=$_GET['id'];
}
$sql = "SELECT * FROM current_student where current_student_id='$id'";
$result = mysqli_query($conn, $sql);
$_SESSION['student_id']=$id;
if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($_row = mysqli_fetch_assoc($result)) {

       $s_name = $_row['s_name'];
       $nick_name=$_row['nick_name'];
       $college = $_row['college'];
       $class = $_row['class'];
       $phone_no=$_row['phone_no'];
       $father_mobile = $_row['father_mobile'];
       $mother_mobile = $_row['mother_mobile'];
       $father_name = $_row['father_name'];
       $f_profession = $_row['f_profession'];

       $mother_name = $_row['mother_name'];
       $m_profession = $_row['m_profession'];
       $type= $_row['type'];

       $requested_course = $_row['requested_course'];

       $shift = $_row['shift'];
$image=$_row['image'];

   }
} else {
   echo "0 results";
}


 ?>
    <!-- Main content -->
    <div class="container" >
      <div class="row" >


        <div class="col-lg-12 col-md-12 " style="padding:10px;border:1px solid #9C9C9C;margin-bottom:5px;border-radius:10px;">
                <form method="post" action="edit_student_done.php" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="name">Full Name of Student:</label>
                        <input required type="text" class="form-control" value="<?php echo  $s_name;?>" name="s_name" id="name">
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                      <div class="form-group">
                        <label for="nick_name">Nick Name:</label>
                        <input  type="text" class="form-control" value="<?php echo  $nick_name;?>" name="nick_name" id="name">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                      <!-- image-preview-filename input [CUT FROM HERE]-->
                      <!-- image-preview-filename input [CUT FROM HERE]-->
                    <script type="text/javascript">
                    $(document).on('click', '#close-preview', function(){
      $('.image-preview').popover('hide');
      // Hover befor close the preview
      $('.image-preview').hover(
          function () {
             $('.image-preview').popover('show');
          },
           function () {
             $('.image-preview').popover('hide');
          }
      );
    });

    $(function() {
      // Create the close button
      var closebtn = $('<button/>', {
          type:"button",
          text: 'x',
          id: 'close-preview',
          style: 'font-size: initial;',
      });
      closebtn.attr("class","close pull-right");
      // Set the popover default content
      $('.image-preview').popover({
          trigger:'manual',
          html:true,
          title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
          content: "There's no image",
          placement:'bottom'
      });
      // Clear event
      $('.image-preview-clear').click(function(){
          $('.image-preview').attr("data-content","").popover('hide');
          $('.image-preview-filename').val("");
          $('.image-preview-clear').hide();
          $('.image-preview-input input:file').val("");
          $(".image-preview-input-title").text("Browse");
      });
      // Create the preview image
      $(".image-preview-input input:file").change(function (){
          var img = $('<img/>', {
              id: 'dynamic',
              width:250,
              height:200
          });
          var file = this.files[0];
          var reader = new FileReader();
          // Set preview image into the popover data-content
          reader.onload = function (e) {
              $(".image-preview-input-title").text("Change");
              $(".image-preview-clear").show();
              $(".image-preview-filename").val(file.name);
              img.attr('src', e.target.result);
              $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
          }
          reader.readAsDataURL(file);
      });
    });
                    </script>
                    <style media="screen">
                    .container{
                            margin-top:20px;
                          }
                          .image-preview-input {
                            position: relative;
                          overflow: hidden;
                          margin: 0px;
                            color: #333;
                            background-color: #fff;
                            border-color: #ccc;
                          }
                          .image-preview-input input[type=file] {
                          position: absolute;
                          top: 0;
                          right: 0;
                          margin: 0;
                          padding: 0;
                          font-size: 20px;
                          cursor: pointer;
                          opacity: 0;
                          filter: alpha(opacity=0);
                          }
                          .image-preview-input-title {
                            margin-left:2px;
                          }
                    </style>
                       <label for="email">Add photo:(<span style="font-weight:bold;color:red">UP TO 2MB</span>)</label>
               <div class="input-group image-preview">

                   <input type="text" value="<?php echo $image; ?>"  class="form-control image-preview-filename" > <!-- don't give a name === doesn't send on POST/GET -->
                   <span class="input-group-btn">
                       <!-- image-preview-clear button -->
                       <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                           <span class="glyphicon glyphicon-remove"></span> Clear
                       </button>
                       <!-- image-preview-input -->
                       <div class="btn btn-default image-preview-input">
                           <span class="glyphicon glyphicon-folder-open"></span>
                           <span class="image-preview-input-title">Browse</span>
                           <input type="file" accept="image/png, image/jpeg, image/gif" name="file" id="image"/> <!-- rename it -->
                       </div>
                   </span>
               </div><!-- /input-group image-preview [TO HERE]-->
                    </div>
                    <div class="col-md-3">
                      <div class="container">

         <img src="../../../application/<?php echo $image ?>" class="img-thumbnail" style="height:100px;width:150px" alt="Cinque Terre" width="304" height="236">
       </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="pwd">Name of School/college:</label>
                        <input required type="text" value="<?php echo  $college ;?>" name="college" class="form-control" id="pwd">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="pwd">Mobile no:</label>
                        <input type="number" max="01999999999"  name="phone_no" value="<?php echo  '0'.$phone_no ;?>" placeholder="01xxx-xxxxxx" class="form-control" id="pwd">
                      </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                      <div class="form-group">
                        <label for="pwd">Class:</label>
                        <select name="cl" class="form-control" required >
                          <option value="<?php echo $class ; ?>"><?php echo $class ; ?></option>

                          <option value="IX(9)">IX(9)</option>
                          <option value="X(10)">X(10)</option>
                          <option value="XI(11)">XI(11)</option>
                          <option value="XII(12)">XII(12)</option>
                        </select>
                      </div>
                    </div>

                  </div>
      <hr>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pwd">Guardian Mobile no:</label>
                    <input required type="number" max="01999999999"  name="father_mobile" maxlength="11" value="<?php echo '0'.$father_mobile  ; ?>"  placeholder="01xxx-xxxxxx" class="form-control" id="pwd">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pwd">Email address:</label>
                    <input type="text" name="mother_mobile"   value="<?php echo $mother_mobile  ; ?>" class="form-control" placeholder="example@gmail.com" id="pwd">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="pwd">Father name:</label>
                    <input  type="text" name="father_name"  value="<?php echo $father_name   ; ?>" class="form-control"  id="pwd">
                  </div>
                </div>
                <div class="col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="pwd">Mother name:</label>
                    <input  type="text" name="mother_name" class="form-control"  value ="<?php echo $mother_name  ?>" id="pwd">
                  </div>
                </div>


              </div>





              <hr>
                <p for="pwd" style="text-align:center;margin-bottom:0px;color:#333;font-weight:bold">Requested course</p>
              <div class="row">
                <div class="col-md-4 col-lg-4">
                  <div class="form-group" >
                    <label for="pwd">course Type:</label>
                    <select name="type" required class="form-control" id="ddlViewBy" onchange="order(this)">
                      <option value="<?php echo $type ; ?>"><?php echo $type ; ?></option>
                      <option value="Regular">Regular</option>
                      <option value="Model Test">Model Test</option>
                      <option value="Revision">Revision</option>
                    </select>
                  </div>
                </div>
                <div
                <div class="col-md-4 col-lg-4">
                  <div class="form-group" id="man_cont1" style="display:none">
                    <label for="pwd">Course:</label>
                    <select name="requested_course" class="form-control"  >
                      <option value="<?php
                          if($requested_course =="Academic(IX)" || $requested_course=="Academic(X)" || $requested_course=="Academic(XI)" || $requested_course=="Academic(XII)"){
                            echo $requested_course;
                            $mode="";
                          }else{
                            echo "";
                            $model=$requested_course;
                            $requested_course="";
                          }
                       ?>"><?php echo $requested_course; ?></option>
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
                      <option value="<?php echo $model; ?>"><?php echo $model; ?></option>

                      <option value="SSC">SSC</option>
                      <option value="HSC">HSC</option>

                    </select>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2" id="version">
                  <div class="form-group">
                    <label for="pwd">Version:</label>
                    <select name="shift" class="form-control" >
                       <option value="<?php echo $shift; ?>"><?php echo $shift; ?></option>
                      <option value="Bangla">Bangla</option>
                      <option value="English">English</option>

                    </select>
                  </div>
                </div>
            </div>
            <script>
            ///for hide and show element
                    function order(el) {
                      var x = el.value;

                      if (x == "Revision" || x=="Regular") {
                      document.getElementById('man_cont').style.display = 'none';
                        document.getElementById('man_cont1').style.display = 'block';
                         document.getElementById('version').style.display = 'block';
                      } else {
                           document.getElementById('version').style.display = 'none';
                        document.getElementById('man_cont').style.display = 'block';
                        document.getElementById('man_cont1').style.display = 'none';
                      }
                    }
          </script>
      <hr>




              <button style="" type="submit" name="submit"  class="btn btn-info">Submit</button>

            </form>

        </div>

      </div>

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://softcareit.com/">SoftCare IT</a>.</strong> All rights
    reserved.
  </footer>

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
</body>
</html>
