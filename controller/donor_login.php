<?php
include "../config.php";
$admin = new Admin();
if (isset($_POST[('donor_signin')])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $admin->ret("SELECT * FROM `donor` WHERE `donor_email`= '$email'");
    $row = $stmt->rowCount();
    if ($row > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $dbpass = $row['donor_password'];
        if (password_verify($password, $dbpass)) {

            $_SESSION['d_id']=$row['donor_id'];
            echo "<script>alert('Login Successful');window.location='../donor_index.php'</script>";
        } else {
              echo "<script>alert('Email or password is incorrect');window.location='../donor_signin.php'</script>";
        }
    } else {
     echo "<script>alert('Email or password is incorrect');window.location='../donor_signin.php'</script>";
    }
}


?>