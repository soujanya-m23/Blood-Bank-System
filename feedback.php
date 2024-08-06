<?php
include 'config.php';
$admin = new Admin();
$did = $_SESSION['d_id'];
$stmt = $admin->ret("SELECT * FROM `donor` WHERE `donor_id` ='$did'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!isset($_SESSION['d_id'])) {
    $admin->redirect('donor_signin');
}

?>

<!DOCTYPE html>
<html lang="en">

<head style="background-color:black">
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

<body>
    <!-- header -->
    <?php
   if (isset($_SESSION['d_id'])) {
      include 'donor_header.php';
   } else {
      include 'header.php';
   }
   ?>
    <div class="container mt-4 px-5 py-5">
        <div class="card p-4 custom-container">
            <div class="card-body" style="color: black;">
                <div class="col-sm-12 col-xl-12">

                    <h6 class="mb-4" style="font-size: 40px; color: red;">Donor Feedback Form</h6>
                    <h6 class="mb-4" style="color: red;">Enter your valuable feedback</h6>
                    <form action="controller/add_feedback.php" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $row['donor_name']?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Feedback</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="feedback" placeholder="Enter Feedabck"
                                    required>
                            </div>
                        </div>
                        
                            <!-- <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Checkbox</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </div> -->
                            <button type="submit" class="btn btn-danger btn-lg" >Add </button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>








<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>