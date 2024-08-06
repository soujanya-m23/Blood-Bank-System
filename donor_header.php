<?php 

$did = $_SESSION['d_id'];
$stmt1 = $admin->ret("SELECT * FROM `donor` WHERE `donor_id` ='$did'");
$row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

?>


<header class="header-area">
<style>
   /* Add this style to your existing CSS file or within a <style> tag in the head section */
   .dropdown-menu a.dropdown-item:hover {
      background-color: #3498db; /* Set your desired hover color */
   }
</style>

   <div class="container">
      <div class="row d_flex">
         <div class="col-sm-3 logo_sm">
            <div class="logo">
               <a href="donor_index.php"></a>
            </div>
         </div>
         <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
            <div class="navbar-area">
               <nav class="site-navbar">
                  <ul>
                     <li><a class="active" href="donor_index.php">Home</a></li>
                     <li><a href="about.php">About</a></li>
                    

                     
                     <li><a href="request_table.php">Requests</a></li>
                     <li><a href="camps.php">Camps</a></li>
                     <li><a href="contact.php">Contact </a></li>
                     <?php
                if (isset($_SESSION["d_id"])) { ?>
                     <div class="dropdown">
                       
                           <button class="btn btn-link dropdown-toggle" type="button" id="userDropdown"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img src="controller/<?php echo $row1['donor_img']; ?>" alt="User Avatar" class="avatar rounded-circle" style="width: 40px; height: 40px;">
                           </button>


                           <div class="dropdown-menu" aria-labelledby="userDropdown">
                             
                              <a class="dropdown-item">Donor: <b><i><?php echo $row1['donor_name']; ?></i></b></a>
                              <a class="dropdown-item" href="edit_profile.php">Edit profile</a>
                              
                              <a class="dropdown-item" href="controller/logout.php">Logout</a>
                           </div>
                        </div>
                        <?php
                }
                ?>

                  </ul>
                  <button class="nav-toggler">
                     <span></span>
                  </button>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>