<?php
$servername = "127.0.0.1:51213";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS comment (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
noodle_no INT(2) NOT NULL,
username VARCHAR(30) NOT NULL,
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
text VARCHAR(200)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table comment created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "\nTable user created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS contact (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(50) NOT NULL,
email VARCHAR(30) NOT NULL,
message VARCHAR(200) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "\nTable contact created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}



$conn->close();
?>