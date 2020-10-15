<?php

// DELETE FUNCTION CODE THAT IS ON ITS OWN PAHE AND IS BEING REFERENCED

include 'functions.php';
include 'config.php';

echo "working";

var_dump($_POST);

// setting variables
$movieName = $_POST['movie-name'];
$releaseDate = $_POST['release-date'];
$boxOffice = $_POST['box-office'];
$synopsis = $_POST['synopsis'];
$starringActors = $_POST['starring-actors'];

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
// delete function
$sql = "DELETE FROM movies WHERE name = '$movieName '";
if ($conn->query($sql) === TRUE) {
  echo "Record Deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
