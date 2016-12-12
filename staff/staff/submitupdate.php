<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$sid        = $_GET['sid'];
$conn       = new mysqli($servername, $username, $password, $dbname);
$sql        = "UPDATE `staff` SET `name`='" . $_POST['name'] . "',`position`='" . $_POST['position'] . 
"',`dob`='" . $_POST['dob'] . "',`sex`='" . $_POST['sex'] . "',`weight`='" . $_POST['weight'] . 
"',`state`='" . $_POST['state'] . "',`city`='" . $_POST['city'] . "',`zip`='" . $_POST['zip'] . "',`address`='" . $_POST['address'] . "',`address2`='" . $_POST['address2'] . "',`phone`='" . $_POST['phone'] . "',`email`='" . $_POST['email'] . "',`homeAirport`='" . $_POST['homeairport'] . "' WHERE sid=" . $sid;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: https://vps101733.vps.ovh.ca/bermudaair/staff/staff/');
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