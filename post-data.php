<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  </head>
  <body>
<?php
include 'functions.php';
include 'config.php';

echo "working";

var_dump($_POST);
// error_reporting function to get rid of indexing error reporting
error_reporting( error_reporting() & ~E_NOTICE );


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

// Deleting ONE movie from the database by 'name'
if ($_POST['deleteMovie']) {
  $sql = "DELETE FROM movies WHERE name = '$movieName '";
  if ($conn->query($sql) === TRUE) {
    echo "Record Deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
// deleting ALL enetries in the database
if ($_POST['deleteAllMovies']) {
  $sql = "DELETE FROM movies";
  if ($conn->query($sql) === TRUE) {
    echo "All Movies Deleted";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
// updating all entries in the database that have the same movie name as the "movie name" specified
if ($_POST['update']) {
  $sql = "UPDATE movies SET starring ='$starringActors' , release_date = '$releaseDate' , box_office = '$boxOffice' , synopsis = '$synopsis'
  WHERE name = '$movieName '";
  if ($conn->query($sql) === TRUE) {
    echo "All Selected Movies Updated";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


// 1. Inserting information into the database query ********
// This is an sql statement that is assigned to a php variable
// It will insert data into the table
if ($_POST['submitData']) {
$sql = "INSERT INTO movies (name, release_date, box_office, synopsis, starring)
VALUES ('$movieName', '$releaseDate', '$boxOffice', '$synopsis', '$starringActors')";
if ($conn->query($sql) === TRUE) {
  // This message will be outpout onto the page
  echo "New record created successfully";
  renderHtmlData();
  renderTableData();
} else {
  // If this is not successfull, this message will; be output onto the page
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


// Close the connection
$conn->close();

 ?>
</body>
</html>
