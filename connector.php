<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "clubsAndSocs";

// Connect to database
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// Select database
$conn->select_db($dbname);

// Create table for student accounts
$sql = "CREATE TABLE IF NOT EXISTS students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        student_id VARCHAR(20) NOT NULL,
        phone_number VARCHAR(20) NOT NULL,
        email VARCHAR(50) NOT NULL,
        date_of_birth DATE NOT NULL,
        photo_path VARCHAR(100) NOT NULL,
        medical_declaration VARCHAR(100) NOT NULL,
        medical_conditions VARCHAR(200) NOT NULL,
        doctor_information VARCHAR(200) NOT NULL,
        next_of_kin_contact VARCHAR(200) NOT NULL
        )";

if ($conn->query($sql) === TRUE) {
  echo "Table 'students' created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>