<?php

include "../config.php";
if (isset($_POST[('edit_user')])) {


    $admin = new Admin();
    $std_id = $_SESSION['u_id'];

    $c_name = $_POST['c_name'];
    $c_phone = $_POST['c_phone'];
    $c_email = $_POST['c_email'];

    $c_address = $_POST['c_address'];
    
    $path1="Images/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $path1);
    $stmt1 = $admin->cud("UPDATE `user` SET `user_name`='$c_name',`user_phone`='$c_phone',`user_email`='$c_email',`user_address`='$c_address',`user_img`='$path1' WHERE `user_id`= $std_id ", "update");
echo"<script>alert('Updated successfully');window.location='../edit_profile.php'</script>";
}
if (isset($_POST[('edit_donor')])) {


    $admin = new Admin();
    $donor_id = $_SESSION['d_id'];
    
    $d_name = $_POST['d_name'];
    $d_phone = $_POST['d_phone'];
    $d_email = $_POST['d_email'];

    $d_address = $_POST['d_address'];
    $path2="Images/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $path2);
    $stmt1 = $admin->cud("UPDATE `donor` SET `donor_name`='$d_name',`donor_phone`='$d_phone',`donor_email`='$d_email',`donor_address`='$d_address',`donor_img`='$path2' WHERE `donor_id`= $donor_id ", "update");
echo"<script>alert('Updated successfully');window.location='../edit_profile.php'</script>";
}
?>