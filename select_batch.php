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
              <li class="active"><a href="index.php">Home</a></li>
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



      <section class="content">


        <div class="row">
          <div class="col-md-3">
        <form class="" action="select_batch.php" method="post">

            <label for="pwd">Enter Id:</label>
          <input type="text" name="id" value="" class="form-control">
            <input style="margin-top:5px" type="submit" class="btn btn-danger" name="go" value="show">
            </form>


          </div>

          <div class="col-md-9" id="myDivToPrint">


                  <div class="table-wrapper-scroll-x">
                    <table class="table" border="1" style="width: 100% ; border-collapse: collapse;" >
                        <thead>

                          <tr class="danger">
                            <td>Exam name</td>
                            <td>Serial no</td>
                            <td>Roll</td>
                            <td>name</td>
                            <td>School/College</td>
                            <td>CRE</td>
                            <td>MCQ</td>
                            <td>Total</td>
                          </tr>

                          <?php
                          if(isset($_POST['go'])){
                            include_once "connection.php";
                            $sql = "SELECT DISTINCT exam_name FROM exam_no order by en_id asc";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {

                                  $exam_name=$row["exam_name"];



                                // Check connection

                                $counter=0;

                                $sql2 = "SELECT distinct current_student.roll,result.current_student_id,current_student.s_name,current_student.college,result.cre,result.mcq,(result.cre+result.mcq) as total
        FROM result
        left join
        current_student on result.current_student_id=current_student.current_student_id
        left join
        exam_no on result.exam_no=exam_no.exam_no
        where exam_no.exam_name = '$exam_name' order by total desc";
                                $result2 = mysqli_query($conn, $sql2);

                                if (mysqli_num_rows($result2) > 0) {
                                  // output data of each row
                                  while($row2 = mysqli_fetch_assoc($result2)) {
                                    $counter++;
                                    if($_POST['id']==$row2["roll"]){
                                      echo "<tr class='info'>";
                                      echo "<td>" . $exam_name."</td>";
                                      echo "<td>" . $counter."</td>";
                                      echo "<td>" . $row2["roll"]."</td>";
                                      echo "<td>" . $row2["s_name"]."</td>";
                                      echo "<td>" . $row2["college"]."</td>";
                                      echo "<td>" . $row2["cre"]."</td>";
                                      echo "<td>" . $row2["mcq"]."</td>";
                                      echo "<td>" . $row2["total"]."</td>";
                                       echo "</tr>";
                                      echo "</tr>";
                                    }

                                  }
                                } else {

                                }

        }


      }
        mysqli_close($conn);
} else {

}


                              ?>


                        </tbody>
                      </table>

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
