<?php
// Assuming you have a database connection and $pdo is your PDO object

$bloodGroup = $_GET['bloodGroup'];

$stmt = $pdo->prepare("SELECT DISTINCT donor_address FROM `donor` WHERE `category_id` IN (SELECT `category_id` FROM `category` WHERE `category_name` = :bloodGroup)");
$stmt->bindParam(':bloodGroup', $bloodGroup, PDO::PARAM_STR);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value='{$row['donor_address']}'>{$row['donor_address']}</option>";
}
?>
