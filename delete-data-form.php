<?php
// connection settings with the MySql object
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test_php';

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// making a query to select and retrieve data
$sql = "SELECT id, name, release_date, box_office FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<ul>';
  echo '<h1> Movie Data </h1>';
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<li>id: " . $row["id"]. " - Name: " . $row["release_date"]. " " . $row["box_office"]. "";
    $row["box_office"]. "</li>";
  }
  echo "</ul>";
} else {
  echo "0 results";
}
$conn->close();
 ?>

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

    <div class="row">
      <div class="col-md-6 col-md-push-3 container">
        <form role="form" method="post" action="post-data.php" id="contactform">
          <fieldset>
            <legend>Delete your movie Data</legend>

            <div class="form-group">
              <label for="name">Movie Name:</label>
              <input type="text" name="movie-name" id="" value="" class="form-control required" role="input" aria-required="true" />
            </div>

            <div class="form-group">
              <label for="phone">Release Date:</label>
              <input type="text" name="release-date" id="" value="" class="form-control required" role="input" aria-required="true" />
            </div>


            <div class="form-group">
              <label for="email">Box Office Earnings:</label>
              <input type="text" name="box-office" id="" value="" class="form-control required email" role="input" aria-required="true" />
            </div>

            <div class="form-group">
              <label for="weburl">Synopsis:</label>
              <input type="text" name="synopsis" id="" value="" class="form-control required url" role="input" aria-required="true" />
            </div>

            <div class="form-group">
              <label for="weburl">Starring Actors:</label>
              <input type="text" name="starring-actors" id="" value="" class="form-control required url" role="input" aria-required="true" />
            </div>


            <div class="actions">
              <input type="submit" value="Delete" name="submit" id="submitButton" class="btn btn-danger" title="" />
            </div>
          </fieldset>
        </form>
      </div><!-- col -->
    </div><!-- row -->

      <hr>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->
</body>
 </html>
