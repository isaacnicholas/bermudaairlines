<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$sql        = "INSERT INTO `airplanes`(`make`, `model`, `status`, `numFirstClass`, `numEconomy`) VALUES ('" . $_POST["make"] . "','" . $_POST["model"] . "','" . $_POST["status"] . "'," . $_POST["firstclass"] . "," . $_POST["economy"] . ")";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: https://vps101733.vps.ovh.ca/bermudaair/admin/plane/');
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