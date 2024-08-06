<?php
include '../config.php';
$admin = new Admin();
if (isset($_GET['req_id']) && isset($_GET['req_status'])) {
    $reqid = $_GET['req_id'];
    $reqstatus = $_GET['req_status'];
   
    if ($reqstatus== "pending") {
        $reqstatus = "accepted";

    } 

    $stmt = $admin->cud("UPDATE `blood_requests` SET `request_status`= '$reqstatus' WHERE `request_id`='$reqid'", "update");
    echo "<script>window.location='../request_table.php'</script>";
    // if((isset($_GET['reg_date']))){
    //     $reg_date = $_GET['reg_date'];
    // $stmt2 = $admin->cud("INSERT INTO `blood_requests` (`reg_date`) VALUES ('$reg_date')", "save");
    // // echo "<script>alert('Donation Completed')window.location='../request_table.php'</script>";

    // }


}

?>