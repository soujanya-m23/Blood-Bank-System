<?php

include "../config.php";
if (isset($_POST[('add_event')])) {


    $admin = new Admin();
    $std_id = $_POST['std_id'];
    $name = $_POST['name'];
    $org_name = $_POST['org_name'];
    $location = $_POST['location'];
    $date = $_POST['date'];
   


    $location = $_POST['location'];
    $stmt1 = $admin->cud("UPDATE `events` SET `event_name`='$name',`organizer`='$org_name',`event_location`='$location',`event_date`='$date' WHERE `event_id`= $std_id ", "update");
    echo "<script>alert('Updated successfully');window.location='../event_table.php'</script>";
}
?>
