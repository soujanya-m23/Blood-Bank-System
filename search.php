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
   <title>Bloood Bank</title>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="path/to/jquery.min.js"></script>
   <script src="path/to/bootstrap/js/bootstrap.min.js"></script>
   <!-- Include Font Awesome CSS for icons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->



   <style>
      .search-container {
         display: flex;
         justify-content: space-between;
         margin: 20px 0;
         margin-right: 20px;
      }


      .search-bar {
         display: flex;
         align-items: center;
         flex: 1;
         background-color: #fff;
         padding: 5px;
         text-align: center;
         border-radius: 10px;
         margin-right: 20px;
      }

      .search-input {
         width: 70%;
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
         outline: none;
         text-align: center;
      }
   </style>
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
   } else {
      include 'header.php';
   }
   ?>

   <!-- end header -->
   <!-- <form action="" method="POST"> -->
   <div class="search-container">

      <div class="search-bar">

         <select class="search-input blood-group-dropdown" id="category">
            <option value=" 0" disabled selected>Search by blood group</option>
            <?php
            $stmt1 = $admin->ret("SELECT * FROM `category`");
            while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
               ?>
               <option value="<?php echo $row['category_id']; ?>">
                  <?php echo $row['category_name']; ?>
               </option>
               <?php
            }
            ?>
         </select>

      </div>

      <div class="search-bar">

         <select class="search-input blood-group-dropdown" id="location">
            <option value=" 0" disabled selected>Search by Location</option>
            <?php

            $stmt1 = $admin->ret("SELECT * FROM `donor` ");
            while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
               ?>
               <option value="<?php echo $row1['donor_address']; ?>">
                  <?php echo $row1['donor_address']; ?>
               </option>
               <?php
            }
            ?>
         </select>

      </div>
      <!-- <script>
         function updateLocationDropdown() {
            var bloodGroup = document.getElementById("bloodGroup").value;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
               if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("location").innerHTML = this.responseText;
                  document.getElementById("location").disabled = false;
               }
            };
            xhttp.open("GET", `controller/get_locations.php?bloodGroup=${bloodGroup}`, true);
            xhttp.send();
         }
      </script> -->

      <button class="btn btn-danger" onclick="search()">Find a blood group</button>
   </div>
   <br>
   <div class="doctors" id="filtered_data">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center">
                  <h2>All Donors</h2>
               </div>
            </div>
         </div>
         <div class="row mb-5">
            <?php
            $stmt = $admin->ret("SELECT * FROM `donor` INNER JOIN `category` ON donor.category_id=category.category_id");
            while ($row1 = $stmt->fetch(PDO::FETCH_ASSOC)) {
               ?>
               <div class="col-md-4"> <!-- Divide the row into three columns -->
                  <div id="ho_efcet" class="reader text_align_center">
                     <i><img src="controller/<?php echo $row1['donor_img']; ?>" alt="#"
                           style="width: 100px;height: 100px;" /></i>
                     <h3>
                        <?php echo $row1['donor_name'] ?>
                     </h3>
                     <p>Phone:
                        <?php echo $row1['donor_phone'] ?>
                     </p>
                     <p>Email:
                        <?php echo $row1['donor_email'] ?>
                     </p><br>
                     <p style="font-weight:bold">Blood Group:
                        <?php echo $row1['category_name'] ?>
                     </p>
                  </div>
               </div>
               <?php
            }
            ?>
         </div>
      </div>
   </div>

   <!-- </form> -->
   <script>
      function search() {
         var category = document.getElementById("category").value;
         var location = document.getElementById("location").value;


         var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
               document.getElementById("filtered_data").innerHTML = this.responseText;
            }
         };
         xhttp.open("GET", `controller/add_search.php?category=${category}&location=${location}`, true);
         xhttp.send();

      }

   </script>
   <!--  -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>