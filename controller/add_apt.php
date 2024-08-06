<?php

include "../config.php";
$admin = new Admin();
$uid = $_SESSION['u_id'];

$name= $_POST['name'];
$category=$_POST['category'];
$date=$_POST['date'];
$location=$_POST['location'];
$time=$_POST['time'];
$did=$_POST['donor_id'];

$stmt = $admin->cud("INSERT INTO `appointment`(`user_id`,`donor_id`,`category_id`,`apt_date`,`apt_location`,`apt_time`) VALUES ('$uid','$did','$category','$date','$location','$time')", "save");
echo "<script>alert('Appointment Scheduled');</script>";
$admin->redirect('phpmailer/sendMail1');


?>