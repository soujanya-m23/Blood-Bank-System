<?php
include '../config.php';
$admin=new Admin();

$delete_id=$_GET['did'];
$stmt=$admin->cud("DELETE FROM `events` WHERE `event_id`= $delete_id","save");
echo"<script>alert('Deleted successfully');window.location='../event_table.php'</script>";

?>