<?php
// Database configuration
$servername = "localhost";
$serverUName = "root";
$serverPwd = "root";
$dbname = "clubsAndSocs";

// Connect to database
$conn = new mysqli($servername, $serverUName, $serverPwd, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Close connection
$conn->close();
?>