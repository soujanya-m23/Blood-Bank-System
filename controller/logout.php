<?php
include '../config.php';
$admin =new Admin();
session_destroy();
unset($_SESSION['u_id'] );
echo"<script>alert('Logout succesful');window.location='../index.php'</script>";
?>