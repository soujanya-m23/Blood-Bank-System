<?php

include "../config.php";



$admin = new Admin();

$uid = $_SESSION['u_id'];
$donor_id = $_GET['donor_id'];
$category_id = $_GET['category_id'];
$message = "Need Blood";
$request_status = "pending";
$stmt = $admin->cud("INSERT INTO `blood_requests`(`user_id`,`donor_id`,`category_id`,`message`,`request_status`) VALUES ('$uid',' $donor_id','$category_id','$message','$request_status')", "save");
echo "<script>alert('Your request has been successfully sent');window.location='../request_status.php'</script>";


?>