<?php

include 'db.php';

$name =  $_POST['name'];
$location =  $_POST['location'];
$email =  $_POST['email']; 
$password =  $_POST['password'];
$phone =  $_POST['phone'];
$farmname =  $_POST['farmname'];


$sql = "INSERT INTO `farmer` (`id`, `name`, `location`, `email`, `password`, `farmname`)
VALUES (NULL, '$name','$location','$email','$password','$farmname')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header('location: ../Login/sign_in_farmer.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>