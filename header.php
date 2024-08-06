<header class="header-area">

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
                  <li><a class="active" href="index.php"><b>Home</a></b></li>
                  <li><a href="about.php"><b>About</a></b></li>
                  <li><a href="user_signin.php"><b>Need Blood</b></a></li>

                  <li><a href="donor_signin.php"><b>Donate Blood</b></a></li>
                 
                  <li><a href="camps.php"><b>Camps</a></b></li>
                  <!-- <li><a href="contact.php">Contact </a></li> -->
                 
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
<script>
// Example using jQuery for simplicity
// Example using jQuery for simplicity
$(document).ready(function() {
    $('.site-navbar ul li a').click(function(event) {
        // Remove the "active" class from all other items
        $('.site-navbar ul li a').removeClass('active');
        // Add the "active" class to the clicked item
        $(this).addClass('active');
    });
});

// Example using vanilla JavaScript
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.site-navbar ul li a').forEach(function(link) {
        link.addEventListener('click', function() {
            // Remove the "active" class from all other items
            document.querySelectorAll('.site-navbar ul li a').forEach(function(link) {
                link.classList.remove('active');
            });
            // Add the "active" class to the clicked item
            this.classList.add('active');
        });
    });
});


   </script>