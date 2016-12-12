<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$sql        = "UPDATE `flights` SET `status`='".$_GET['status']."' WHERE fid=".$_GET['fid'];
$conn->query($sql);
$conn->close();