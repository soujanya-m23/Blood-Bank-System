<?php

include "../config.php";
if (isset($_POST[('add_category')])) {


    $admin = new Admin();
    $std_id = $_POST['std_id'];
    $category = $_POST['category'];
    $status = $_POST['status'];
   


    $stmt1 = $admin->cud("UPDATE `category` SET `category_name`='$category',`category_status`='$status' WHERE `category_id`= $std_id ", "update");
    echo "<script>alert('Updated successfully');window.location='../category_table.php'</script>";
}
?>