<?php
include 'config.php';
$admin = new Admin();
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
    include 'header.php';
    ?>
    <div class="container mt-4 px-5 py-5">
        <div class="card p-4 custom-container">
            <div class="card-body" style="color: black;">
                <div class="col-sm-12 col-xl-12">

                    <h6 class="mb-4" style="font-size: 40px; color: red;">User Registration Form</h6>


                    <form action="controller/user_register.php" method="POST" enctype="multipart/form-data">
                        <!-- <div class="row mb-3">
                            <div class="col-md-2">
                                <label class="text-black" for="gender">User Type</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" value="individual" checked>
                                    <label class="form-check-label">
                                        Individual
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" value="hospital">
                                    <label class="form-check-label">
                                        Hospital
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" id="name"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Enter Email" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Phone"
                                    title="Please enter a 10-digit phone number" pattern="\d{10}" minlength="10"
                                    maxlength="10" required>
                            </div>
                        </div>
                        <script>
                            document.getElementById('phone').addEventListener('input', function (event) {
                                // Remove non-numeric characters
                                event.target.value = event.target.value.replace(/\D/g, '');
                            });
                        </script>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Location:</label>
                            <div class="col-sm-10">
                                <select class="form-control" style="border: 1px solid #ccc;" name="location" required>
                                    <option value="" disabled selected>Select Location</option>
                                    <option value="mlore">Mangalore</option>
                                    <option value="blore">Bangalore</option>
                                    <option value="chennai">Chennai</option>
                                    <option value="mumbai">Mumbai</option>
                                    <option value="new-delhi">New Delhi</option>
                                    <option value="maharashtra">Maharashtra</option>
                                    <option value="kerala">Kerala</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="address"
                                    placeholder="Enter full Address" required></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-2">
                                <label class="text-black" for="gender">Gender</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="genderMale" name="gender"
                                        value="male" checked required>
                                    <label class="form-check-label" for="genderMale">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="genderFemale" name="gender"
                                        value="female" checked>
                                    <label class="form-check-label" for="genderFemale">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Blood Group</label>

                            <div class="col-sm-10">
                                <select class="form-control" style="border: 1px solid #ccc;" name="category" required>
                                    <option value="" disabled selected>Select Category</option>

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
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Image Upload</label>

                            <div class="col-sm-10">

                                <input class="form-control bg-white" type="file" id="formFile" name="img" required>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary btn-lg" name="signup">Register</button>
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