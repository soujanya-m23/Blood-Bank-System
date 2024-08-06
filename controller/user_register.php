<?php

include "../config.php";
if (isset($_POST[('signup')])) {


    $admin = new Admin();
    $type = $_POST['type'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $blood_group = $_POST['category'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $path1 = "Images/" . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $path1);
    $stmt1 = $admin->ret("SELECT * FROM `user` WHERE `user_email` ='$email'");
    $row = $stmt1->rowCount();
    if ($row > 0) {
        echo "<script>alert('Email already exist!');history.back()='../user_signup.php'</script>";
    } else {
        $secpassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $admin->cud("INSERT INTO `user`(`user_type`,`user_name`,`user_email`,`user_password`,`user_phone`,`user_location`,`user_address`,`user_gender`,`category_id`,`user_img`) VALUES ('$type','$name','$email','$secpassword','$phone','$location','$address','$gender','$blood_group','$path1')", "save");
        echo "<script>alert('User Registered successfully');window.location='../user_signin.php'</script>";
    }
}

?>