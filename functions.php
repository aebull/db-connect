<?php
// rendering the data out
function renderHtmlData(){

  global $conn;
  $sql = "SELECT id, name, release_date, box_office, synopsis, starring FROM movies";
  $result = $conn->query($sql);
  echo '<h1> Movies Data </h1>';
  echo '<ul>';
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<li>id: " . $row["id"]. "  Name: " .$row["name"]. " ". $row["release_date"]. " " . $row["synopsis"]. " ". $row["starring"]. " " . $row["box_office"]. "</li>";
      }
    } else {
      echo "0 results";
    }
  echo '</ul>';

} // --- Function Ends ---

// This function is used to render the Table data on the "Post-data page" with bootstrap
function renderTableData () {
 global $conn;
 // Making a query to select and retrieve data
 $sql = "SELECT id, name, release_date, box_office, synopsis, starring  FROM movies";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
   echo "<table class='table'><tr><th>ID</th><th>Name</th><th>Box Office</th><th>Synopsis</th><th>Starring</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["release_date"]."</td><td>".$row["synopsis"]."</td><td>".$row["starring"]."</td></tr>";
   }
   echo '</table>';
 } else {
   echo "0 results";
 }
} // Function ends

?>
