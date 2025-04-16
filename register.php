<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "karate_academy"; // Make sure this matches your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$time = $_POST['time'];

// Insert into database
$sql = "INSERT INTO registrations (name, age, phone, time) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siss", $name, $age, $phone, $time);

if ($stmt->execute()) {
  echo "success";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
