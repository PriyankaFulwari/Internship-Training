<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (fName, Branch, Enroll.No, Mobile.No, Semester)
VALUES ('Priyanka', 'Computer Science', 2102030430020, 1234567890, 4)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>