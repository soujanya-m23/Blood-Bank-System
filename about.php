<?php
include 'config.php';
$admin = new Admin();
?>



<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Blood Bank</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout inner_page">
   <!-- loader  -->

   <!-- end loader -->
   <!-- top -->
   <!-- header -->

   <?php
   if (isset($_SESSION['u_id'])) {
      include 'user_header.php';
   } elseif (isset($_SESSION['d_id'])) {
      include 'donor_header.php';
   } else {
      include 'header.php';
   }
   ?>

   <!-- end header -->
   <!-- about -->
   <div class="about">
   <div class="container_width">
      <div class="row d_flex align-items-center">
         <div class="col-md-7">
            <div class="titlepage text_align_left">
               <h2>Our Mission</h2>
               <p>At Blood Bank, our mission is to save lives by connecting donors with patients in need of life-saving blood. We are committed to ensuring a stable and safe blood supply for hospitals and healthcare facilities.</p>
            </div>
         </div>

         <div class="col-md-5 mt-2 mt-md-0"> <!-- Added mt-4 class for top margin on small screens -->
            <div class="about_img text-center">
               <figure><img src="images/about.png" alt="#" /></figure>
            </div>
         </div>

         <div class="col-md-7">
            <div class="titlepage text_align_left">
               <h2>Who We Are</h2>
               <p>Established in 2023, we are a dedicated team of professionals, volunteers, and donors working together to make a positive impact on our community's health. We believe that every drop of blood donated has the potential to make a difference in someone's life.</p>
            </div>
         </div>
      </div>
   </div>
</div>

   <!-- end about -->
   <!--  footer -->

   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>