<?php
include '../config.php';
$admin=new Admin();

$delete_id=$_GET['did'];
$stmt=$admin->cud("DELETE FROM `feedback` WHERE `feedback_id`= $delete_id","save");
echo"<script>alert('Deleted successfully');window.location='../display_feedbacks.php'</script>";

?>