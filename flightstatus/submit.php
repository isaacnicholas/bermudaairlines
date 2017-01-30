<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$fid        = $_GET['fid'];
$conn       = new mysqli($servername, $username, $password, $dbname);
if($_POST["steward2"]){
$sql = "UPDATE `flights` SET `pid`=".$_POST['plane'].",`depLocationID`=".$_POST['departureairport'].",`pilotID`=".$_POST['pilot'].",`copilotID`=".$_POST['copilot'].",`stewID1`=".$_POST['steward1'].",`stewID2`=".$_POST['steward2'].",`arrLocationID`=".$_POST['arrivalairport'].",`firstClassPrice`=".$_POST['firstclass'].",`economyPrice`=".$_POST['economy'].",`depDate`='".$_POST['departdate']."',`depTime`='".$_POST['departtime']."',`arrDate`='".$_POST['arrivedate']."',`arrTime`='".$_POST['arrivetime']."',`depGate`='".$_POST['departgate']."',`arrGate`='".$_POST['arrivegate']."' WHERE fid=".$fid;
}else{
	$sql = "UPDATE `flights` SET `pid`=".$_POST['plane'].",`depLocationID`=".$_POST['departureairport'].",`pilotID`=".$_POST['pilot'].",`copilotID`=".$_POST['copilot'].",`stewID1`=".$_POST['steward1'].",`arrLocationID`=".$_POST['arrivalairport'].",`firstClassPrice`=".$_POST['firstclass'].",`economyPrice`=".$_POST['economy'].",`depDate`='".$_POST['departdate']."',`depTime`='".$_POST['departtime']."',`arrDate`='".$_POST['arrivedate']."',`arrTime`='".$_POST['arrivetime']."',`depGate`='".$_POST['departgate']."',`arrGate`='".$_POST['arrivegate']."' WHERE fid=".$fid;
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: https://isaac-nicholas.com/bermudaair/flightstatus');
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