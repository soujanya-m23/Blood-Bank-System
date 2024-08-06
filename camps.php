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
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
   <script src="path/to/jquery.min.js"></script>
   <script src="path/to/bootstrap/js/bootstrap.min.js"></script>
   <!-- Include Font Awesome CSS for icons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
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

   <!-- end banner -->
   <!-- about -->

   <!-- end about -->
   <!-- coronata -->

   <!-- end coronata -->

   <!-- protect -->

   <!-- end protect -->
   <!-- cases -->

   <!-- end cases -->
   <!-- doctors -->
   <div class="doctors">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Blood Donation Camps</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <?php
            $stmt = $admin->ret("SELECT * FROM `events`");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="col-md-4"> <!-- Divide the row into three columns -->
                <div id="ho_efcet" class="reader text_align_center">
                    <i><img src="Admin/controller/<?php echo $row['event_img']; ?>" style="height: 100px" alt="#" /></i>
                    <h3><?php echo $row['event_name'] ?></h3>
                    <p>Organizer: <?php echo $row['organizer'] ?></p>
                    <p>Location: <?php echo $row['event_location'] ?></p>
                    <p>Event Date: <?php echo $row['event_date'] ?></p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

   <!-- end cases -->
   <!-- update -->
  
   <!-- update -->
   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="hedingh3 text_align_left">
                     <h3>Resources</h3>
                     <ul class="menu_footer">
                        <li><a href="index.php">Home</a>
                        <li>
                        <li><a href="javascript:void(0)">What we do</a>
                        <li>
                        <li> <a href="javascript:void(0)">Media</a>
                        <li>
                        <li> <a href="javascript:void(0)">Travel Advice</a>
                        <li>
                        <li><a href="javascript:void(0)">Protection</a>
                        <li>
                        <li><a href="javascript:void(0)">Care</a>
                        <li>
                     </ul>


                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="hedingh3 text_align_left">
                     <h3>About</h3>
                     <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                        text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                     </p>
                  </div>
               </div>



               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="hedingh3  text_align_left">
                     <h3>Contact Us</h3>
                     <ul class="top_infomation">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                           Making this the first true
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                           Call : +01 1234567890
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                           <a href="Javascript:void(0)">Email : demo@gmail.com</a>
                        </li>
                     </ul>


                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="hedingh3 text_align_left">
                     <h3>countrys</h3>
                     <div class="map">
                        <img src="images/map.png" alt="#" />
                     </div>
                  </div>
               </div>

            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free html Templates</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>