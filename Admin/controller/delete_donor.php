<?php
include '../config.php';
$admin=new Admin();

$delete_id=$_GET['did'];
$stmt=$admin->cud("DELETE FROM `donor` WHERE `donor_id`= $delete_id","save");
echo"<script>alert('Deleted successfully');window.location='../display_donors.php'</script>";

?>