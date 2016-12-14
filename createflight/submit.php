<?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";

	$conn = new mysqli($servername, $username, $password, $dbname);
if($_POST["steward2"]){
$sql = "INSERT INTO `flights`(pid,`depLocationID`,`pilotID`,`copilotID`,`stewID1`,`stewID2`,`arrLocationID`,`firstClassPrice`,`economyPrice`,`depDate`,`depTime`,`arrDate`,`arrTime`,`depGate`,`arrGate`) VALUES (".$_POST["plane"].",".$_POST["departureairport"].",".$_POST["pilot"].",".$_POST["copilot"].",".$_POST["steward1"].",".$_POST["steward2"].",".$_POST["arrivalairport"].",".$_POST["firstclass"].",".$_POST["economy"].",'".$_POST["departdate"]."','".$_POST["departtime"]."','".$_POST["arrivedate"]."','".$_POST["arrivetime"]."','".$_POST["departgate"]."','".$_POST["arrivegate"]."')
";
}else{
	$sql = "INSERT INTO `flights`(pid,`depLocationID`,`pilotID`,`copilotID`,`stewID1`,`arrLocationID`,`firstClassPrice`,`economyPrice`,`depDate`,`depTime`,`arrDate`,`arrTime`,`depGate`,`arrGate`) VALUES (".$_POST["plane"].",".$_POST["departureairport"].",".$_POST["pilot"].",".$_POST["copilot"].",".$_POST["steward1"].",".$_POST["arrivalairport"].",".$_POST["firstclass"].",".$_POST["economy"].",'".$_POST["departdate"]."','".$_POST["departtime"]."','".$_POST["arrivedate"]."','".$_POST["arrivetime"]."','".$_POST["departgate"]."','".$_POST["arrivegate"]."')
";
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: https://vps101733.vps.ovh.ca/bermudaair/createflight/');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo "Please go back and try again";
}

$conn->close();
	?>