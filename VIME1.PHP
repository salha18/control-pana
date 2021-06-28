<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"montors");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT* FROM control" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "left: " . $row["left"]. " forward: " . $row["forward"]. " right: " . $row["right"]. " backward: " . $row["backward"] . " stop: " . $row["stop"]. "<br> ";
  }
} else {
  echo "0 results";
}
$conn->close();
?>



