<?php

include "../config.php";
$admin = new Admin();
$did = $_SESSION['d_id'];



$stmt = $admin->cud("INSERT INTO `donated_donors`(`donor_id`) VALUES ('$did')", "save");
echo "<script>alert('Thanks  you for donating blood! 🩸 #LifeSaver');window.location='../feedback.php'</script>";
// $stmt1 = $admin->cud("DELETE FROM `appointment` WHERE `donor_id`='$did'","delete");




?>