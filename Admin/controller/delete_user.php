<?php
include '../config.php';
$admin=new Admin();

$delete_id=$_GET['did'];
$stmt=$admin->cud("DELETE FROM `user` WHERE `user_id`= $delete_id","save");
echo"<script>alert('Deleted successfully');window.location='../display_users.php'</script>";

?>