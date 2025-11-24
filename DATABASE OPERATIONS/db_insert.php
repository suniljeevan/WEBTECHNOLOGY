<?php
$servername = "localhost";
$username = "root";
$password = "root";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// use existing database myDB
$sql = "use myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database used successfully";
} else {
  echo "Error using database: " . $conn->error;
}

$sql = "INSERT INTO Employee (Emp_id, Emp_name, Mobile, Email, Salary)
VALUES (1, 'Harshith', 123456, 'harshith@gmail.com', 50000)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
