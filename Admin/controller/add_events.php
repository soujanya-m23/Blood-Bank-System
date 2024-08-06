<?php

include "../config.php";
if (isset($_POST[('add_event')])) {


    $admin = new Admin();
    $name = $_POST['name'];
    $org_name = $_POST['org_name'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $path1="Images/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $path1);

   
        $stmt = $admin->cud("INSERT INTO `events`(`event_name`,`organizer`,`event_location`,`event_date`,`event_img`) VALUES ('$name','$org_name','$location','$date','$path1')", "save");
        echo "<script>alert('Inserted successfully');window.location='../event_table.php'</script>";
    }

?>