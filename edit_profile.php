<?php include 'config.php';

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- header -->
<?php
if (isset($_SESSION['u_id'])) {
    include 'user_header.php';
} elseif (isset($_SESSION['d_id'])) {
    include 'donor_header.php';
} else {
    include 'header.php';
}
?>




<body>

    <div class="container">
        <div class="row flex-lg-nowrap">
            <div class="col">
                <?php if (isset($_SESSION['u_id'])) { ?>
                    <form action="controller/update_profile.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="e-profile">
                                            <div class="row">


                                                <img src="controller/<?php echo $row['user_img']; ?>" style="height: 100px">


                                                <div
                                                    class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                    <div class="col-12 col-sm-auto mb-3">
                                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">
                                                                <?php echo $row['user_name'] ?>
                                                            </h4>
                                                            <p class="mb-0">
                                                                <?php echo $row['user_email'] ?>
                                                            </p>

                                                            <div class="mt-2">
                                                                <span>Change Photo</span>
                                                                <i class="fa fa-fw fa-camera"></i>
                                                                <input type="file" name="img"
                                                                    class="form-control file-upload-info">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-content pt-3">
                                                <div class="tab-pane active">
                                                    <form class="form" novalidate="">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Full Name</label>
                                                                            <input class="form-control" type="text"
                                                                                name="c_name"
                                                                                value="<?php echo $row['user_name'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Phone</label>
                                                                            <input class="form-control" type="phone"
                                                                                name="c_phone"
                                                                                value="<?php echo $row['user_phone'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input class="form-control" type="email"
                                                                                name="c_email"
                                                                                value="<?php echo $row['user_email'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <input class="form-control" type="hidden"
                                                                name="edit_profile_id" value="<?php echo $id ?>"> -->
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <div class="form-group">
                                                                            <label>Address</label>
                                                                            <input class="form-control" type="test"
                                                                                name="c_address"
                                                                                value="<?php echo $row['user_address'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </form>
                                                </div>
                                                <div class="row">
                                                    <div class="col justify-content-end">
                                                        <button class="btn btn-primary" type="submit" name="edit_user">Save
                                                            Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php } elseif (isset($_SESSION['d_id'])) { ?>

                    <form action="controller/update_profile.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="e-profile">
                                            <div class="row">


                                                <img src="controller/<?php echo $row['donor_img']; ?>"
                                                    style="height: 100px">


                                                <div
                                                    class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                    <div class="col-12 col-sm-auto mb-3">
                                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                            <h3 style="font-weight:bold"
                                                                class="pt-sm-2 pb-1 mb-0 text-nowrap">
                                                                <?php echo $row['donor_name'] ?>
                                                            </h3>
                                                            <p class="mb-0">
                                                                <?php echo $row['donor_email'] ?>
                                                            </p>

                                                            <div class="mt-2">
                                                                <span>Change Photo</span>
                                                                <i class="fa fa-fw fa-camera"></i>
                                                                <input type="file" name="img"
                                                                    class="form-control file-upload-info">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-content pt-3">
                                                <div class="tab-pane active">
                                                    <form class="form" novalidate="">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Full Name</label>
                                                                            <input class="form-control" type="text"
                                                                                name="d_name"
                                                                                value="<?php echo $row['donor_name'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Phone</label>
                                                                            <input class="form-control" type="phone"
                                                                                name="d_phone"
                                                                                value="<?php echo $row['donor_phone'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input class="form-control" type="email"
                                                                                name="d_email"
                                                                                value="<?php echo $row['donor_email'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <input class="form-control" type="hidden"
                                                                name="edit_profile_id" value="<?php echo $id ?>"> -->
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <div class="form-group">
                                                                            <label>Address</label>
                                                                            <input class="form-control" type="test"
                                                                                name="d_address"
                                                                                value="<?php echo $row['donor_address'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </form>
                                                </div>
                                                <div class="row">
                                                    <div class="col justify-content-end">
                                                        <button class="btn btn-primary" type="submit" name="edit_donor">Save
                                                            Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                <?php } ?>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>