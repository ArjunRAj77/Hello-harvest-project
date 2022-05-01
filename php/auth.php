<?php
include 'db.php';
$message="";
if(count($_POST)>0) {

	$result = mysqli_query($conn,"SELECT * FROM user WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);

	if($count==0) {
		$message = "Invalid Username or Password!";
		echo "Invalid Username or Password!";
		
	} else {
		$message = "You are successfully authenticated!";
		header('location: ../Dashboard/index.php');
	}
	
}
?>