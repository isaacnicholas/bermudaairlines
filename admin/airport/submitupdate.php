<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$aid        = $_GET["aid"];
$sql        = "UPDATE `airport` SET `name`='" . $_POST["name"] . "',`state`='" . $_POST["state"] . "',`city`='" . $_POST["city"] . "',`zip`='" . $_POST["zip"] . "',`address`='" . $_POST["address"] . "',`phone`='" . $_POST["phone"] . "',`email`='" . $_POST["email"] . "' WHERE aid=" . $aid;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: https://isaac-nicholas.com/bermudaair/admin/airport/');
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