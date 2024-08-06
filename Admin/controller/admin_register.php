<?php

include "../config.php";
if (isset($_POST[('add')])) {


    $admin = new Admin();

    $name = $_POST['name'];

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt1 = $admin->ret("SELECT * FROM `admin` WHERE `admin_email` =' $email'");
    $row = $stmt1->rowCount();
    if ($row > 0) {
        echo "<scipt>alert('Email already exists');window.location='../signup.php'</script>";
    } else {
        $secpassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $admin->cud("INSERT INTO `admin`(`admin_name`,`admin_email`,`admin_password`) VALUES ('$name','$email','$secpassword')", "save");
        echo "<script>alert('Inserted successfully');window.location='../signin.php'</script>";
    }
}
?>