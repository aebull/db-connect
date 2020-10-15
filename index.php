<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test_php';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// if the connection querry is successful...
if ($conn->query($sql) === TRUE) {
// This message will output on the page
  echo "New record created successfully";
} else {
  // if it is NOT successful, this message will be output on the page
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
// closes the connection
$conn->close();

 ?>
