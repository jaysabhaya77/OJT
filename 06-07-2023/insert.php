<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('jay', 'patel', 'jay@email.com')";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('meet', 'patel', 'meet@email.com')";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('rohan', 'patel', 'rohan@email.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>