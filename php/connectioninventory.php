<?php

include 'db.php';

$itemname =  $_POST['itemname'];
$itemtype =  $_POST['itemtype'];
$quantity =  $_POST['quantity']; 
$price =  $_POST['price'];
$harvestdate =  $_POST['harvestdate'];


$sql = "INSERT INTO `inventory` (`id`, `itemname`, `itemtype`, `quantity`, `price`, `harvestdate`)
VALUES (NULL, '$itemname','$itemtype','$quantity','$price','$harvestdate')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header('location: ../Hello-farmer-dashboard/inventory.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>