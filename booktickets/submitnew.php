<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT MAX(cid)+1 as MAX FROM `customers`";
$result     = $conn->query($sql);
$row = $result->fetch_assoc();
$max=$row['MAX'];
$sql        = "INSERT INTO `customers`(`name`, `dob`, `sex`, `weight`, `state`, `city`, `zip`, `address`, `address2`, `phone`, `email`, `custHome`, `payment`, `diet`) VALUES ('".$_POST['name']."','".$_POST['dob']."','".$_POST['sex']."','".$_POST['weight']."','".$_POST['state']."','".$_POST['city']."','".$_POST['zip']."','".$_POST['address1']."','".$_POST['address2']."','".$_POST['phone']."','".$_POST['email']."',".$_POST['homeairport'].",'".$_POST['payment']."','".$_POST['diet']."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: https://vps101733.vps.ovh.ca/bermudaair/booktickets?cid='.$max);
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
</body>
</html>