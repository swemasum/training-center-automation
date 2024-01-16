


       <?php

       if(isset($_POST['submit'])){
         $name=$_POST['name'];
         $email=$_POST['email'];
         $subject=$_POST['subject'];
         $message=$_POST['message'];
         $date=date("Y-m-d");
       INCLUDE_ONCE('connection.php');
         $sql = "INSERT INTO message(name,email,subject,message,status,date)
       VALUES ('$name', '$email', '$subject','$message','unchecked','$date')";

       if (mysqli_query($conn, $sql)) {

       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }

       mysqli_close($conn);
     }else{
       header("Location:contact.html");
     }

        ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>ChemTor </title>
     <meta name="description" content="Free Bootstrap Theme by uicookies.com">
     <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

     <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
     <link rel="stylesheet" href="css/styles-merged.css">
     <link rel="stylesheet" href="css/style.min.css">
     <link rel="stylesheet" href="css/custom.css">

     <!-- JavaScript -->
 <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>

 <!-- CSS -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
 <!-- Default theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/>
 <!-- Semantic UI theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.min.css"/>
 <!-- Bootstrap theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.min.css"/>

 <!--
     RTL version
 -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.rtl.min.css"/>
 <!-- Default theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.rtl.min.css"/>
 <!-- Semantic UI theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.rtl.min.css"/>
 <!-- Bootstrap theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.rtl.min.css"/>

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
               <span><i class="icon-phone2"></i>01689-553501</span>
               <span><i class="icon-mail"></i>jahedulhoque52@yahoo.com</span>
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



<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-4">
    <div class="container">

<div class="card" style="width:400px;border:1px solid black ;padding:20px">
<img class="card-img-top" src="img/animat-checkmark.gif" alt="Card image" style="width:100%">
<div class="card-body">
  <h4 class="card-title"><?php echo $name ?></h4>
  <p class="card-text">Thanks for your query. Sir, will contact with you through your email:<?php echo $email?></p>
  <a href="teachers.html" class="btn btn-primary">See Profile</a>
</div>
</div>
<br>

</div>
  </div>
</div>


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
                 <h3>About The School</h3>
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
                   <li><i class="icon-mail"></i><span>jahedulhoque52@yahoo.com</span></li>
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
