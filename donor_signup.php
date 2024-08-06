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
        <div class="card p-4">
            <div class="card-body" style="color: black;">
                <div class="col-sm-12 col-xl-12">
                    <div>
                        <h6 class="mb-4" style="font-size: 40px; color: red;">Donor Registration Form</h6>

                        <form action="controller/donor_register.php" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"
                                        required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" id ="email" placeholder="Enter Email"
                                        required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter Password" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Phone" title="Please enter a 10-digit phone number" pattern="\d{10}" minlength="10"
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
                                    <option value="0" disabled selected>Select Location</option>

                                    <option value="mlore">Mangalore</option>
                                    <option value="blore">Banglore</option>
                                    <option value="chennai">Chennai</option>
                                    <option value="mumbai">Mumbai</option>
                                    <option value="new-delhi">New Delhi</option>
                                    <option value="maharastra">Maharastra</option>
                                    <option value="kerala">Kerala</option>

                                </select>
                            </div>

                        </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="address" placeholder="Enter full Address" required></textarea>
                                </div>
                            </div>
                            <!-- <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div> -->
                            <div class="row form-group mb-4">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="text-black" for="gender">Gender</label></br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="gender" name="gender"
                                            value="male" checked>
                                        <label class="form-check-label" for="gender">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="gender" name="gender"
                                            value="female" >
                                        <label class="form-check-label" for="gender">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Blood Group</label>

                                <div class="col-sm-10">
                                    <select class=" form-control" style="border: 1px solid #ccc;" name="category" required>
                                        <option value="0" disabled selected>Select Category</option>

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
                            <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                var textInput = document.getElementById('name');
                                var phoneInput = document.getElementById('phone');
                                var emailInput = document.getElementById('email');


                                textInput.addEventListener('input', function (event) {
                                    var inputValue = event.target.value;

                                    // Use a regular expression to check if the input contains only alphabetic characters, special characters, and space
                                    if (!/^[a-zA-Z\s!"#$%&'()*+,-./:;<=>?@[\\\]^_`{|}~]+$/.test(inputValue)) {
                                        // If not, remove non-alphabetic characters, special characters, and space
                                        event.target.value = inputValue.replace(/[^a-zA-Z\s!"#$%&'()*+,-./:;<=>?@[\\\]^_`{|}~]/g, '');
                                    }
                                });

                                emailInput.addEventListener('input', function (event) {
                                    var inputValue = event.target.value;
                                    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(inputValue)) {
                                        event.target.setCustomValidity(''); // Reset custom validity
                                        event.target.setCustomValidity('Please enter a valid email address.');
                                    } else {
                                        event.target.setCustomValidity('');
                                    }
                                });

                                phoneInput.addEventListener('input', function (event) {
                                    var inputValue = event.target.value;
                                    // Use a regular expression to check if the input is a valid phone number
                                    if (!/^\d{0,10}$/.test(inputValue)) {
                                        phoneWarning.textContent = 'Phone number should be 10 digits';
                                        event.target.value = inputValue.replace(/[^\d]/g, '').slice(0, 10);
                                    }
                                    else {
                                        phoneWarning.textContent = '';
                                        // If not, remove invalid characters
                                    }
                                });

                              


                            });
                        </script>

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
                                <br>
                            <button type="submit" class="btn btn-primary btn-lg" name="signup">Register</button>
                                
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