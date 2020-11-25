<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "reviewh"

	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
		die("fail" . mysqli_connect_error());
	}

$conn->close();

 ?>