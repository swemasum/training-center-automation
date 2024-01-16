<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChemTor</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="Admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="Admin/bower_components/Ionicons/css/ionicons.min.css">



    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">



    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

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
            <a class="navbar-brand" href="index.php" title="uiCookies:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
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


      <div class="row">
       <div class="col-md-12">
           <div class="card">
               <div class="card-body">

                   <div class="row">
               <div class="col-md-4 col-sm-4" style="MARGIN-LEFT:20PX   ">
                 <form class="" action="notice_board.php" method="post">
                   <div class="form-group ">
                     <select name="date" class="form-control" >

                       <option value="">Select Date:</option>

                                      <?php
                                        include_once "connection.php";
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
               <form class="" action="notice_board.php" method="post">

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
                        include_once "connection.php";
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
                               echo '  <figure class="probootstrap-media"><img src="img/notice.png" style="margin-bottom:20px" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>';
                               echo '<div class="probootstrap-text">';

                               echo '<h3 style="font-weight:bold">'.$row['title'].'</h3>';
                              echo '  <p style="overflow-y: scroll;height:250px">'.$row['notice'].'</p>';
                               echo '<div class="row">
                                 <div class="col-md-6">';
                               echo '<span class="probootstrap-date"><i class="icon-calendar"></i>'.$row['date'].'</span>';
                              echo '</div> <div class="col-md-6">';
                              echo '<span class="probootstrap-date "><a href="notice_see_more.php?n_id='.$row['n_id'].'"><i class="glyphicon glyphicon-eye-open"></i></a>See more</span>';
                              if($row['file_name']!= ''){
                                echo '<span class="probootstrap-date "><a href="Admin/pages/layout/uploads/'.$row['file_name'].'"><i class="glyphicon glyphicon-save"></i></a>Download file</span>';

                              }
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





      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About The ChemTor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p>
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

    <!-- Photoswipe Modal -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">

          <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
          </div>

          <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                  <div class="pswp__counter"></div>
                  <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                  <button class="pswp__button pswp__button--share" title="Share"></button>
                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                  <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                  <div class="pswp__preloader">
                      <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                          <div class="pswp__preloader__donut"></div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                  <div class="pswp__share-tooltip"></div>
              </div>
              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
              </button>
              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
              </button>
              <div class="pswp__caption">
                  <div class="pswp__caption__center"></div>
              </div>
          </div>
      </div>
    </div>


    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
