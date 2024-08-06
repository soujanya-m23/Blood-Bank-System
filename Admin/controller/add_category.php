<?php

include "../config.php";
if (isset($_POST[('add_category')])) {


    $admin = new Admin();
    $category = $_POST['category'];
    $status = $_POST['status'];

   
        $stmt = $admin->cud("INSERT INTO `category`(`category_name`,`category_status`) VALUES ('$category','$status')", "save");
        echo "<script>alert('Inserted successfully');window.location='../category_table.php'</script>";
    }

?>