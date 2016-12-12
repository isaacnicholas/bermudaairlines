<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$cid=$_GET['cid'];
$fid=$_GET['fid'];
$class=$_GET['class'];
if(!strcmp($class,'e')){
	$sql="SELECT f.economyPrice, COUNT(*)+1 as seatnum FROM flights f, tickets t WHERE t.fid=f.fid AND t.class='Economy' AND f.fid=".$fid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$sql        = "INSERT INTO `tickets`(`fid`, `cid`, `seat`, `class`, `price`, `luggagecount`, `checkedIn`) VALUES (".$fid.",".$cid.",".$row['seatnum'].",'Economy',".$row['economyPrice'].",0,0)";
}else{
		$sql="SELECT f.firstClassPrice, COUNT(*)+1 as seatnum FROM flights f, tickets t WHERE t.fid=f.fid AND t.class='First' AND f.fid=".$fid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
	$sql        = "INSERT INTO `tickets`(`fid`, `cid`, `seat`, `class`, `price`, `luggagecount`, `checkedIn`) VALUES (".$fid.",".$cid.",".$row['seatnum'].",'First',".$row['firstClassPrice'].",0,0)";
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: https://vps101733.vps.ovh.ca/bermudaair/booktickets?cid='.$max);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Please go back and try again";
}

$conn->close();
?>
<body>
</body>
</html>