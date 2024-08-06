<?php
include 'config.php';
$admin = new Admin();
$uid = $_SESSION['u_id'];
if (!isset($_SESSION['u_id'])) {
    $admin->redirect('user_signin');
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
   if (isset($_SESSION['u_id'])) {
      include 'user_header.php';
   } else {
      include 'header.php';
   }
   ?>
    <div class="container mt-4 px-5 py-5">
        <div class="card p-4">
            <div class="card-body" style="color: black;">
                <div class="col-sm-12 col-xl-12">
                    <div>
                        <h6 class="mb-4" style="font-size: 30px; color: blue;">Schedule Appointments</h6>
                        <?php 
                        $did=$_GET['did'];

                        $stmt = $admin->ret("SELECT * FROM `donor` INNER JOIN `category` ON donor.category_id=category.category_id WHERE `donor_id`='$did'");
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);?>

                        <form action="phpmailer/sendMail.php" method="POST">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo $row['donor_name'] ?>" class="form-control"
                                        name="name" placeholder="Enter Name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" value="<?php echo $row['donor_email'] ?>" class="form-control"
                                        name="email"  required>
                                </div>
                            </div>
                           <input type="hidden" name="donor_id" value="<?php echo $row['donor_id']?>">
                           
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Blood Group</label>

                                <div class="col-sm-10">
                                    <select class=" form-control" style="border: 1px solid #ccc;" name="category">

                                        <option value="<?php echo $row['category_name'] ?>">
                                            <?php echo $row['category_name'] ?>
                                        </option>

                                    </select>
                                </div>

                            </div>
<input type="hidden" name="did" value="<?php echo $did?>">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" placeholder="Enter Date"
                                        min="<?php echo date('Y-m-d'); ?>"
                                        max="<?php echo date('Y-m-d', strtotime('+1 year')); ?>" required>
                                    <!-- Maximum date is one year from today -->

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Time</label>
                                <div class="col-sm-10">
                                    <input type="time" placeholder="Enter time" class="form-control"
                                        name="time" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10">
                                    <textarea type="text" placeholder="Enter location" class="form-control"
                                        name="location" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <?php
                                $stmt = $admin->ret("SELECT * FROM `user` INNER JOIN `blood_requests` ON user.user_id=blood_requests.user_id INNER JOIN `category` ON blood_requests.category_id=category.category_id WHERE blood_requests.donor_id='$did'");
                                while ($crow = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <input type="hidden" class="form-control" name="u_name" value="<?php echo $crow['user_name']; ?>">
                                    <input type="hidden" class="form-control" name="u_email" value="<?php echo $crow['user_email']; ?>">
                                    <?php
                                } ?>
                            </div>
                    </div>

                    <button type="submit" class="btn btn-danger btn-lg">Schedule</button>
                    </form>
                </div>
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