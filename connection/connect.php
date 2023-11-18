<?php

$remotedb_server = "localhost";
$remotedb_username = "root";
$remotedb_password = "";
$remotedb_db = "online_banking";
// Connect to DB
$conn = mysqli_connect($remotedb_server, $remotedb_username, $remotedb_password, $remotedb_db);  //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}
session_start();

?>
