<?php
include '../config.php';
$admin=new Admin();

$delete_id=$_GET['did'];
$stmt=$admin->cud("DELETE FROM `donated_donors` WHERE `donated_id`= $delete_id","save");
echo"<script>alert('Deleted successfully');window.location='../display_donors.php'</script>";

?>