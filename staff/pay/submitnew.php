<?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";
$sid=$_GET["sid"];
	$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO `payroll`(`sid`, `wage`, `hours`, `time`, `payType`, `accNum`, `routeNum`) VALUES ('".$sid."','".$_POST["wage"]."','".$_POST["hours"]."','".$_POST["time"]."','".$_POST["method"]."','".$_POST["accnum"]."','".$_POST["routenum"]."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: https://vps101733.vps.ovh.ca/bermudaair/staff/staff/');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo "Please go back and try again";
}

$conn->close();
	?>