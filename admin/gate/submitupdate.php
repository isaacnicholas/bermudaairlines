<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$gid        = $_GET["gid"];
$sql= "UPDATE `gates` SET `gname`='" . $_POST["gname"] . "',`concourse`='" . $_POST["concourse"] . "' WHERE gid=".$gid;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: https://vps101733.vps.ovh.ca/bermudaair/admin/gate/');
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