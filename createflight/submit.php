<?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";

	$conn = new mysqli($servername, $username, $password, $dbname);
if($_POST["steward2"]){
$sql = "INSERT INTO `airline`.`flights`(pid,`depLocationID`,`pilotID`,`copilotID`,`stewID1`,`stewID2`,`arrLocationID`,`firstClassPrice`,`economyPrice`,`depDate`,`depTime`,`arrDate`,`arrTime`,`depGate`,`arrGate`,`status`) VALUES (pid = ".$_POST["plane"]." AND depLocationID = ".$_POST["departureairport"]." AND pilotID = ".$_POST["pilot"]." AND copilotID = ".$_POST["copilot"]." AND stewID1 = ".$_POST["steward1"]." AND stewID2 = ".$_POST["steward2"]." AND arrLocationID = ".$_POST["arrivalairport"]." AND firstClassPrice = ".$_POST["firstclass"]." AND economyPrice = ".$_POST["economy"]." AND depDate = ".$_POST["departuredate"]." AND depTime = '".$_POST["departuretime"]."' AND arrDate = '".$_POST["arrivaldate"]."' AND arrTime = '".$_POST["arrivaltime"]."' AND depGate = ".$_POST["departgate"]." AND arrGate = ".$_POST["arrivegate"].");
";
}else{
	$sql = "INSERT INTO `airline`.`flights`(pid,`depLocationID`,`pilotID`,`copilotID`,`stewID1`,`arrLocationID`,`firstClassPrice`,`economyPrice`,`depDate`,`depTime`,`arrDate`,`arrTime`,`depGate`,`arrGate`,`status`) VALUES (pid = ".$_POST["plane"]." AND depLocationID = ".$_POST["departureairport"]." AND pilotID = ".$_POST["pilot"]." AND copilotID = ".$_POST["copilot"]." AND stewID1 = ".$_POST["steward1"]." AND arrLocationID = ".$_POST["arrivalairport"]." AND firstClassPrice = ".$_POST["firstclass"]." AND economyPrice = ".$_POST["economy"]." AND depDate = ".$_POST["departuredate"]." AND depTime = '".$_POST["departuretime"]."' AND arrDate = '".$_POST["arrivaldate"]."' AND arrTime = '".$_POST["arrivaltime"]."' AND depGate = ".$_POST["departgate"]." AND arrGate = ".$_POST["arrivegate"].");
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