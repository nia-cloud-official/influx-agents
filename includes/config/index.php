<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '123';
$dbName = 'influx-01';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
