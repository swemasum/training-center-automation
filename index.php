<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChemTor</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="Admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="Admin/bower_components/Ionicons/css/ionicons.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"
            ></script>
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- select number of junction -->
    <!-- Modal -->
    <script>
       $(function(){
         // bind change event to select
         $('#dynamic_select').on('change', function () {
             var url = $(this).val(); // get selected value
             if (url) { // require a URL
                 window.location = url; // redirect
             }
             return false;
         });
       });
   </script>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Welcome</h4>
          </div>
          <div class="modal-body">
                <form>
                 <div class="form-group">
                   <label for="sel1">Select type (select one):</label>
                   <select class="form-control" id="dynamic_select">
                     <option value="">select one</option>
                     <option value="admission_regular.html">Regular</option>
                     <option>Model Test</option>
                     <option>Revision</option>

                   </select>
                  </div>
               </form>
               <button type="button" class="btn btn-danger">GO</button>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <!-- select number of junction end-->

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>

    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->

      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Mirpur road, Mohammadpur,Dhaka-1207</span>
              <span><i class="icon-phone2"></i>01788-873338</span>
              <span><i class="icon-phone2"></i>01689-553501</span>
              <span><i class="icon-mail"></i>hello@chemtor.net</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
                <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">ChemTor</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li ><a href="index.php">Home</a></li>
              <li><a href="tution_fee.php">Courses</a></li>
              <li><a href="admission_regular.html">Admission</a></li>
              <li><a href="select_batch.php">Result</a></li>
              <li><a href="teachers.html">Teachers</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="notice_board.php">Notice</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url(img/slider_1.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Your Bright Future is Our Mission</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(img/slider_2.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1>
                  </div>
                </div>
              </div>
            </div>

          </li>
          <li style="background-image: url(img/slider_3.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <style media="screen">
              .button {
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  padding: 20px;
  width: 200px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}

.button:after {
  content: "";
  background: #90EE90;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px!important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}
              </style>
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                  <h2 style="display:inline">Take your admission now!</h2> <!-- Trigger the modal with a button -->

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <a style="font-size:25px" href="admission_regular.html" type="button" name="button" class="btn btn-danger btn-lg">Admission</a>
    <!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Admission</button> -->

                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>About ChemTor</h3>
                  <p>Chemtor is an initiative that aims at helping students develop a crystal-clear conception of chemistry. Aside from providing academic guidance pertaining to the NCTB syllabus from classes 9 to 12, Chemtor also introduces recent breakthroughs and discoveries in the field of chemistry, to the students in an intriguing manner. A hands-on approach is also adopted for specific topics, where the students are allowed to engage in immersive “practical demonstrations” in a controlled environment. Through several regulated monthly tests as well as specialized model tests for the SSC and HSC candidates, Chemtor ensures a student’s confidence in his own knowledge of chemistry when it comes to any examination. Such students also find an edge when it comes to public/private university admission tests- which generally rely on a candidates overall conception built over the years. Students receiving assistance from Chemtor are also known to show splendid performances in extra-curricular competitions like Chemistry Olympiad, Biochemistry Olympiad etc. This is our wonderful journey to helping the students grasp the essence of chemistry with enthusiasm and excitement.

</p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section" id="probootstrap-counter" style="padding:0;">
        <div class="container">

        <?php

          include_once "connection.php";

          $sql = "SELECT counter FROM counter";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  $counter=$row["counter"];
                }
            }


         ?>
          <div class="row">
            <div class="clearfix visible-sm-block visible-xs-block"></div>

            <div class="col-md-5 col-sm-12 col-xs-12 col-xxs-12 probootstrap-animate">


            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="<?php echo $counter ?>" data-speed="500" data-refresh-interval="50">1</span>

                  </span>
                  <span class="probootstrap-counter-label">Website Visitors</span>
                </div>
              </div>
            </div>

            <?php
            $counter++;
          $sql = "UPDATE counter SET counter=$counter WHERE c_id=1";

          if (mysqli_query($conn, $sql)) {

          } else {
              echo "Error updating record: " . mysqli_error($conn);
          }

             ?>


          </div>
        </div>
      </section>

<hr>


      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-5">
              <h2><span style="font-weight:bold">ChemTor</span> Notice Board</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">

              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        <?php
                          include_once "connection.php";
                              // Check connection
                              if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                              }
                               $counter=0;
                              $sql = "SELECT * FROM notice order by n_id desc";
                              $result = mysqli_query($conn, $sql);

                              if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                   $counter++;
                                   if($counter==6){
                                     break;
                                   }
                                   echo '<div class="item">';
                                   echo '  <span href="#" class="probootstrap-featured-news-box">';
                                   echo '  <figure class="probootstrap-media"><img style="margin-bottom:20px" src="img/notice.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>';
                                   echo '<div class="probootstrap-text">';

                                   echo '<h3 style="font-weight:bold">'.$row['title'].'</h3>';
                                  echo '  <p style="overflow-y: scroll;height:250px">'.$row['notice'].'</p>';
                                   echo '<div class="row">
                                     <div class="col-md-6">';
                                   echo '<span class="probootstrap-date"><i class="icon-calendar"></i>'.$row['date'].'</span>';
                                  echo '</div> <div class="col-md-6">';
                                  if($row['file_name']!= ''){
                                    echo '<span class="probootstrap-date "><a href="Admin/pages/layout/uploads/'.$row['file_name'].'"><i class="glyphicon glyphicon-save"></i></a>Download</span>';

                                  }
                                 echo ' </div>
                                  </div>
                                  </div>
                                 </span>
                               </div>';
                                }
                              } else {
                                echo "0 results";
                              }

                              mysqli_close($conn);

                            ?>

                      </div>
                    </div>
                  </div>
                  <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="notice_board.php" class="btn btn-primary">View all Notices</a></p>
                    </div>
                  </div>
                </div>


              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Our Featured Courses</h2>
              <p class="lead"></p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> October 31, 2018</span>
                  <h3>Academic</h3>
                  <p>SSC (Bangla/English).</p>
                  <p>HSC (Bangla/English).</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                </div>
              </div>



            </div>
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> October 31, 2018</span>
                  <h3>Model Test</h3>
                  <p>SSC (Bangla/English).</p>
                  <p>HSC (Bangla/English).</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                </div>
              </div>



            </div>
          </div>
        </div>
      </section>



      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Meet Our Qualified Teacher</h2>
              <p class="lead"></p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">

            <div class="col-md-3 col-sm-3">

            </div>
            <div class="col-md-6 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/person_7.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>MD. Jahedul Hoque</h3>
                  <p>Assistant Professior <br>
                  Department of Chemistry <br>
                Dhaka Resitential Model College.</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>


      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="admission_regular.html" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About ChemTor</h3>
                <p>Chemtor is an initiative that aims at helping students develop a crystal-clear conception of chemistry. Aside from providing academic guidance pertaining to the NCTB syllabus from classes 9 to 12, Chemtor also introduces recent breakthroughs and discoveries in the field of chemistry, to the students in an intriguing manner. A hands-on approach is also adopted for specific topics, where the students are allowed to engage in immersive “practical demonstrations” in a controlled environment. Through several regulated monthly tests as well as specialized model tests for the SSC and HSC candidates, Chemtor ensures a student’s confidence in his own knowledge of chemistry when it comes to any examination. Such students also find an edge when it comes to public/private university admission tests- which generally rely on a candidates overall conception built over the years. Students receiving assistance from Chemtor are also known to show splendid performances in extra-curricular competitions like Chemistry Olympiad, Biochemistry Olympiad etc. This is our wonderful journey to helping the students grasp the essence of chemistry with enthusiasm and excitement.

</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                 <li><i class="icon-location2"></i> <span>Mirpur road, Mohammadpur,Dhaka-1207</span></li>
                  <li><i class="icon-mail"></i><span>hello@chemtor.net</span></li>
                  <li><i class="icon-phone2"></i><span>01788-873338</span></li>
                  <li><i class="icon-phone2"></i><span>01689-553501</span></li>
                </ul>
              </div>
            </div>

          </div>
          <!-- END row -->
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2018 <a TARGET="_blank" href="https://softcareit.com/">SoftCare IT</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a target="_blank" href="https://softcareit.com/">softcareit.com</a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- END wrapper -->


    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
