<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "game_mathematic";
 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql = "INSERT INTO hall_of_fame (nama, score)
VALUES ($nama, $score)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
