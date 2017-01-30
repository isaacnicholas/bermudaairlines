<?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";
	$conn = new mysqli($servername, $username, $password, $dbname);
$sid=$_GET["sid"];
$sql = "UPDATE `payroll` SET `wage`='".$_POST["wage"]."',`hours`='".$_POST["hours"]."',`time`='".$_POST["time"]."',`payType`='".$_POST["method"]."',`accNum`='".$_POST["accnum"]."',`routeNum`='".$_POST["routenum"]."' WHERE sid=".$sid;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: https://isaac-nicholas.com/bermudaair/staff/pay/');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo "Please go back and try again";
}

$conn->close();
	?> 
