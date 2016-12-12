<?php
$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";
$tid=$_GET['tid'];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO `luggage`(`tid`, `type`, `weight`, `cost`) VALUES (".$tid.",'".$_POST['type']."',".$_POST['weight'].",".$_POST['price'].")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: https://vps101733.vps.ovh.ca/bermudaair/checkin?tid='.$tid);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo "Please go back and try again";
}

$conn->close();
	?>