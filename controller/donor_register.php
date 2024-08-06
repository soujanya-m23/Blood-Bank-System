<?php

include "../config.php";
if (isset($_POST[('signup')])) {


    $admin = new Admin();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $blood_group = $_POST['category'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $address = $_POST['address'];
     $gender = $_POST['gender'];
     $path1="Images/".basename($_FILES['img']['name']);
     move_uploaded_file($_FILES['img']['tmp_name'], $path1);

     $stmt1 = $admin->ret("SELECT * FROM `donor` WHERE `donor_email` = '$email'");
     $row = $stmt1->rowCount();
     if ($row > 0) {
        echo "<script>alert('Email already exist!');history.back()='../donor_signup.php'</script>";
     } else {
 

    $secpassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $admin->cud("INSERT INTO `donor`(`donor_name`,`donor_email`,`donor_password`,`donor_location`,`donor_phone`,`donor_address`,`donor_gender`,`category_id`,`donor_img`) VALUES ('$name','$email','$secpassword','$location','$phone','$address','$gender','$blood_group','$path1')", "save");
     echo "<script>alert('Donor registered successfully');window.location='../donor_signin.php'</script>";
}
}
?>