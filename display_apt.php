<?php
include 'config.php';
$admin = new Admin();
$did = $_SESSION['d_id'];
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
<!-- body -->

<body class="main-layout inner_page">
    <!-- loader  -->

    <!-- end loader -->
    <!-- top -->
    <!-- header -->

    <?php
    if (isset($_SESSION['d_id'])) {
        include 'donor_header.php';
    } else {
        include 'header.php';
    }
    ?>

    <!-- end header -->
    <!-- about -->

    <body class="main-layout">
        <div class="container-fluid pt-4 px-4" style="overflow: auto;">
            <?php $stmt1 = $admin->ret("SELECT * FROM `appointment` WHERE `donor_id`= '$did'");
            $row = $stmt1->rowCount();
            if ($row > 0) {
                $row = $stmt1->fetch(PDO::FETCH_ASSOC); ?>
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-white rounded h-100 p-4" style="background-color:white; overflow: auto;">
                            <h6 class="mb-4" style="font-size: 40px; color: red;">Schedules</h6>

                            <table class="table table-bordered" style="background-color:white">
                                <thead>
                                    <tr>

                                        <th scope="col">Appointment id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Blood Group</th>
                                        <th scope="col">Scheduled Date</th>
                                        <th scope="col">Donate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        $stmt = $admin->ret("SELECT * FROM `appointment` WHERE `donor_id` ='$did'");
                                        while ($crow = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <td>
                                                <?php echo $crow['apt_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $crow['donor_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $crow['donor_phone']; ?>
                                            </td>
                                            <td>
                                                <?php echo $crow['blood_group']; ?>
                                            </td>


                                            <td>
                                                <?php echo $crow['apt_date']; ?>
                                            </td>

                                            <td>
                                                <a href="controller/donated_donors.php"
                                                    class="btn btn-outline-success">Donate</a>

                                            </td>
                                        </tr>


                                        <?php
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <h6 class="mb-4" style="font-size: 40px; color: red;">No appointments...</h6>
            <?php } ?>

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