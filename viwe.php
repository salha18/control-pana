
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"montors");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT arm1, arm2, arm3,arm4,arm5,arm6,start FROM arm" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "arm1: " . $row["arm1"]. " arm2: " . $row["arm2"]. " arm3: " . $row["arm3"]. " arm4: " . $row["arm4"] . " arm5: " . $row["arm5"]. " arm6: " . $row["arm6"]. " start: " . $row["start"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

