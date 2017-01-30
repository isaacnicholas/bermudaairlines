<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$sql        = "INSERT INTO `staff`(`name`, `position`, `dob`, `sex`, `weight`, `state`, `city`, `zip`, `address`, `address2`, `phone`, `email`, `homeAirport`) VALUES ('" . $_POST['name'] . "','" . $_POST['position'] . "','" . $_POST['dob'] . "','" . $_POST['sex'] . "','" . $_POST['weight'] . "','" . $_POST['state'] . "','" . $_POST['city'] . "','" . $_POST['zip'] . "','" . $_POST['address'] . "','" . $_POST['address2'] . "','" . $_POST['phone'] . "','" . $_POST['email'] . "','" . $_POST['homeAirport'] . "')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: https://isaac-nicholas.com/bermudaair/staff/staff/');
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