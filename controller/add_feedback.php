<?php

include "../config.php";



$admin = new Admin();
$name=$_POST['name'];
$did=$_SESSION['d_id'];
$feedback=$_POST['feedback'];
$stmt = $admin->cud("INSERT INTO `feedback`(`donor_id`,`donor_name`,`feedback_msg`) VALUES ('$did',' $name','$feedback')", "save");
echo "<script>alert('Your feedback has been successfully sent');window.location='../donor_index.php'</script>";


?>