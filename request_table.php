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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <?php $stmt1 = $admin->ret("SELECT * FROM `blood_requests` WHERE `donor_id`= '$did'");
            $row = $stmt1->rowCount();
            if ($row > 0) {
                $row = $stmt1->fetch(PDO::FETCH_ASSOC); ?>
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">

                        <div class="bg-white rounded h-100 p-4" style="background-color:white; overflow: auto;">

                            <h6 class="mb-4" style="font-size: 30px; color: red;">List of Requests</h6>

                            <table class="table table-bordered table-hover" style="background-color:white">
                                <thead class="thead-primary">
                                    <tr class="table-primary">
                                        <th scope="col">Request id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Blood Group</th>
                                        <th scope="col">Request Status</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        $stmt = $admin->ret("SELECT * FROM `user` INNER JOIN `blood_requests` ON user.user_id=blood_requests.user_id INNER JOIN `category` ON blood_requests.category_id=category.category_id WHERE blood_requests.donor_id='$did'");
                                        while ($crow = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <tr>
                                            <td>
                                                <?php echo $crow['request_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $crow['user_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $crow['user_email']; ?>
                                            </td>
                                            <td>
                                                <?php echo $crow['user_phone']; ?>
                                            </td>
                                            <td>
                                                <?php echo $crow['user_address']; ?>
                                            </td>
                                            <td>
                                                <?php echo $crow['category_name']; ?>
                                            </td>


                                            <td>
                                                <?php echo $crow['request_status']; ?>
                                            </td>
                                            <?php if ($crow['request_status'] == 'pending') { ?>
                                                <td>
                                                    <a href="controller/add_status.php?req_id=<?php echo $crow['request_id']; ?>&req_status=<?php echo $crow['request_status']; ?>"
                                                        class="btn btn-danger">Accept</a>

                                                </td>
                                            <?php }else{ ?>

                                            <td>
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#exampleModalCenter">View Schedule details</button>
                                            </td>
                                            <?php }?>
                                            <tr>

                                        <?php } ?>



                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Schedule Details
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php
                                                        $stmt = $admin->ret("SELECT * FROM `appointment`");
                                                        $crow = $stmt->fetch(PDO::FETCH_ASSOC)
                                                            ?>
                                                        <p>
                                                            <?php echo $crow['apt_location'] ?>
                                                        </p>
                                                        <p>
                                                            <?php echo $crow['apt_date'] ?>
                                                        </p>
                                                        <p>
                                                            <?php echo $crow['apt_time'] ?>
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    

                                </tbody>
                            </table>
                        </div>
                    <?php } else { ?>


                        <h6 class="mb-4 text-center" style="font-size: 30px; color: red;">No requests found...</h6>
                    <?php } ?>
                </div>
            </div>
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