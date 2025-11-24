// run as
//     http://localhost://webapp/db.php
<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create table
$sql="use mydb";
if ($conn->query($sql) === TRUE) {
  echo "Database Selected";
} 
$sql = "CREATE TABLE Employee (
Emp_id INT(6)  ,
Emp_name VARCHAR(30),
Mobile INT(10),
Email VARCHAR(50),
Salary INT(6)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
