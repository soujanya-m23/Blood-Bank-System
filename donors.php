<?php
include 'config.php';
$admin = new Admin();
if (!isset($_SESSION['u_id'])) {
   $admin->redirect('user_signin');
}
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
   } else {
      include 'header.php';
   }
   ?>
   <!-- end header -->
   <!-- doctors -->
   <!-- <div class="protect">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center">
                  <h2>Blood Donor Roll</h2>
                  <p>A blood bag in time saves a life.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="protect_bg">
         <div class="container">

            <div class="row">
               <div class="col-md-12">
                 
                  <div class="owl-carousel owl-theme">
                     <?php
                     $stmt = $admin->ret("SELECT * FROM `donor` INNER JOIN `category` ON donor.category_id=category.category_id");
                     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <div class="item">
                           <div class="protect_box text_align_center">
                              <div class="desktop">
                                 <i><img src="controller/<?php echo $row['donor_img']; ?>" alt="#"
                                       style="width: 100px;height: 100px;" /></i>
                                 <h3>
                                    <?php echo $row['donor_name'] ?>
                                 </h3>
                                 <p>Phone:
                                    <?php echo $row['donor_phone'] ?>
                                 </p>
                                 <p>Email:
                                    <?php echo $row['donor_email'] ?>
                                 </p><br>
                                 <p style="font-weight:bold">Blood Group:
                                    <?php echo $row['category_name'] ?>
                                 </p>
                              </div>

                              <a href="controller/add_request.php?donor_id=<?php echo $row['donor_id'] ?>&category_id=<?php echo $row['category_id'] ?>"
                                 class="read_more">Request</a>

                           </div>
                        </div>
                     <?php } ?>
                  </div>
               </div>

            </div>

         </div>
      </div>
   </div> -->
   <div class="doctors">
      <div class="container">
         <div class="row mb-3">
            <div class="col-md-12">
            <div class="titlepage text_align_center" style="margin-top: -80px;">
                  <h2>Blood Donors</h2>
               </div>
            </div>
         </div>
         <div class="row mb-5">
            <?php
            $stmt = $admin->ret("SELECT * FROM `donor` INNER JOIN `category` ON donor.category_id=category.category_id");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               ?>
               <div class="col-md-4"> <!-- Divide the row into three columns -->
                  <div id="ho_efcet" class="reader text_align_center">
                     <i><img src="controller/<?php echo $row['donor_img']; ?>" alt="#"
                           style="width: 100px;height: 100px;" /></i>
                     <h3>
                        <?php echo $row['donor_name'] ?>
                     </h3><br>
                     <p>Phone:
                        <?php echo $row['donor_phone'] ?>
                     </p>
                     <p>Email:
                        <?php echo $row['donor_email'] ?>
                     </p><br>
                     <p style="font-weight:bold">Blood Group:
                                    <?php echo $row['category_name'] ?>
                                 </p>
                     <a href="controller/add_request.php?donor_id=<?php echo $row['donor_id'] ?>&category_id=<?php echo $row['category_id'] ?>"
                        class="read_more">Request</a>
                  </div>


               </div>
               <?php
            }
            ?>
         </div>
      </div>
   </div>
   <!-- end cases -->
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