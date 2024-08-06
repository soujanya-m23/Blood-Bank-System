<?php
include 'config.php';
$admin = new Admin();

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
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


</head>

<body>

    <body class="main-layout inner_page">
        <!-- header -->
        <?php
        if (isset($_SESSION['d_id'])) {
            include 'donor_header.php';
        } else {
            include 'header.php';
        }
        ?>
        <div class="container mt-3 px-8 py-5 ">
            <div class="card p-10 custom-container">
                <div class="card-body" style="color: black;">
                    <div class="col-sm-12 col-xl-12">

                        <h3 class="mb-4" style="font-size: 25px; color: red;">Enter your details to Request for Blood
                        </h3>
                        <form action="controller/add_request.php" method="POST">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                        required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                        required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" name="phone" placeholder="Enter Phone"
                                        required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="address" placeholder="Enter City"
                                        required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Blood Group</label>

                                <div class="col-sm-10">
                                    <select class=" form-control" style="border: 1px solid #000;" name="category">
                                        <option value=" 0" disabled selected>Choose Category</option>

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

                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-danger btn-lg" name="request">Request</button>
                                </div>
                            </div>

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