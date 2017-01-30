<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$pid        = $_GET["pid"];
$sql        = "UPDATE `airplanes` SET `make`='" . $_POST["make"] . "',`model`='" . $_POST["model"] . "',`status`='" . $_POST["status"] . "',`numFirstClass`='" . $_POST["firstclass"] . "',`numEconomy`='" . $_POST["economy"] . "' WHERE pid=" . $pid;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: https://isaac-nicholas.com/bermudaair/admin/plane/');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Please go back and try again";
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
</html>