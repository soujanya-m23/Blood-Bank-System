<?php
include "../config.php";
$admin = new Admin();
if (isset($_POST[('user_signin')])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $admin->ret("SELECT * FROM `user` WHERE `user_email`= '$email'");
    $row = $stmt->rowCount();
    if ($row > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $dbpass = $row['user_password'];
        if (password_verify($password, $dbpass)) {

            $_SESSION['u_id']=$row['user_id'];
            echo "<script>alert('Login Successful');window.location='../user_index.php'</script>";
        } else {
              echo "<script>alert('Email or password is incorrect');window.location='../user_signin.php'</script>";
        }
    } else {
     echo "<script>alert('Email or password is incorrect');window.location='../user_signin.php'</script>";
    }
}


?>