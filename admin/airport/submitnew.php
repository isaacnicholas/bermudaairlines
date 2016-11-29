<?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";
	$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO `airport` (`name`, `state`, `city`, `zip`, `address`, `phone`, `email`) VALUES ('".$_POST["name"]."', '".$_POST["state"]."', '".$_POST["city"]."', '".$_POST["zip"]."', '".$_POST["address"]."', '".$_POST["phone"]."', '".$_POST["email"]."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: https://vps101733.vps.ovh.ca/bermudaair/admin/airport/');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo "Please go back and try again";
}

$conn->close();
	?>