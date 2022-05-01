<?php

include 'db.php';

$itemname =  $_POST['itemname'];
$itemtype =  $_POST['itemtype'];
$quantity =  $_POST['quantity']; 
$address =  $_POST['address'];
$requestdate =  $_POST['requestdate'];


$sql = "INSERT INTO `bulkorder` (`id`, `itemname`, `itemtype`, `quantity`, `address`, `requestdate`)
VALUES (NULL, '$itemname','$itemtype','$quantity','$address','$requestdate')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header('location: ../Hello-customer-dashboard/bulk_order.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>