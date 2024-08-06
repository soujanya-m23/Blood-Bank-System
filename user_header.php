
<?php 

$uid = $_SESSION['u_id'];
$stmt = $admin->ret("SELECT * FROM `user` WHERE `user_id` ='$uid'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

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
               <a href="index.php"></a>
            </div>
         </div>
         <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
            <div class="navbar-area">
               <nav class="site-navbar">
                  <ul>
                     <li><a class="active" href="user_index.php">Home</a></li>
                     <li><a href="about.php">About</a></li>

                     <li><a href="donors.php">Donors</a></li>
                     <li><a href="search.php">Search</a></li>
                     
                     
                     <li><a href="camps.php">Camps</a></li>
                     <li><a href="request_status.php">Status</a></li>
                     <li><a href="contact.php">Contact </a></li>
                     
                     <li></li>
                     <li></li>

                     <div class="dropdown">
                       
                        
                           <button class="btn btn-link dropdown-toggle" type="button" id="userDropdown"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img src="controller/<?php echo $row['user_img']; ?>" alt="User Avatar" class="avatar rounded-circle">&nbsp;&nbsp;&nbsp;
                           </button>


                           <div class="dropdown-menu" aria-labelledby="userDropdown">
                           <button class="dropdown-item">User: <b><i><?php echo $row['user_name']; ?></i></b></button>
                              <a class="dropdown-item" href="edit_profile.php">Edit profile</a>
                              
                              <a class="dropdown-item" href="controller/logout.php">Logout</a>
                           </div>
                        </div>
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