<?php

include "../config.php";
$admin = new Admin();
$uid = $_SESSION['u_id'];

if (isset($_GET['category']) && isset($_GET['location'])) {

   $category = $_GET['category'];
   $location = $_GET['location'];

   $stmt1 = $admin->ret("SELECT * FROM `donor` INNER JOIN `category` ON donor.category_id=category.category_id WHERE donor.category_id='$category' AND donor.donor_address='$location'");


}
?>
<?php $stmt1 = $admin->ret("SELECT * FROM `donor` INNER JOIN `category` ON donor.category_id=category.category_id WHERE donor.category_id='$category' AND donor.donor_address='$location'");
$row = $stmt1->rowCount();
if ($row > 0) {
   $row = $stmt1->fetch(PDO::FETCH_ASSOC); ?>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_center">
               <h2>Search Results</h2>
            </div>
         </div>
      </div>
      <div class="row mb-5">
         <?php
         $stmt = $admin->ret("SELECT * FROM `donor` INNER JOIN `category` ON donor.category_id=category.category_id");
         while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
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
<?php } else { ?>
   <h6 class="mb-4 text-center" style="font-size: 40px; color: red;">Result not found</h6>
<?php } ?>