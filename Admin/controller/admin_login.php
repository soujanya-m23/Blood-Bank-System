<?php
include "../config.php";
$admin = new Admin();
if (isset($_POST[('login')])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $admin->ret("SELECT * FROM `admin` WHERE `admin_email`= '$email'");
    $row = $stmt->rowCount();
    if ($row > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $dbpass = $row['admin_password'];
        if (password_verify($password, $dbpass)) {

            $_SESSION['a_id'] = $row['admin_id'];
            echo "<script>alert('Login Successful');window.location='../index.php'</script>";
        } else {
            echo "<script>alert('Email or password is incorrect');window.location='../signin.php'</script>";
        }
    } else {
        echo "<script>alert('Email or password is incorrect');window.location='../signin.php'</script>";
    }
}


?>