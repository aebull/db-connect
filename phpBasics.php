<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test_php';

$mName = 'Ice Age';
$mDate = '2002';
$mBoxOffice = '408.6 million';
$mSynopsis = 'here is the synopsis';
$mStarring = 'Ray Romano';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// This is an sql statement that is assigned to a php variable
// it will insert data into a table
  $sql = "INSERT INTO Movies (name, release_date, box_office, synopsis, starring)
  VALUES ('$mName', '$mDate','$mBoxOffice', '$mSynopsis', '$mStarring')";

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
