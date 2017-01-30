<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$cid        = $_GET['cid'];
$conn       = new mysqli($servername, $username, $password, $dbname);
$sql        = "UPDATE `customers` SET `name`='".$_POST['name']."',`dob`='".$_POST['dob']."',`sex`='".$_POST['sex']."',`weight`='".$_POST['weight']."',`state`='".$_POST['state']."',`city`='".$_POST['city']."',`zip`='".$_POST['zip']."',`address`='".$_POST['address1']."',`address2`='".$_POST['address2']."',`phone`='".$_POST['phone']."',`email`='".$_POST['email']."',`custHome`=".$_POST['homeairport'].",`payment`='".$_POST['payment']."',`diet`='".$_POST['diet']."' WHERE cid=".$_GET['cid'];
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: https://isaac-nicholas.com/bermudaair/booktickets?cid='.$cid);
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