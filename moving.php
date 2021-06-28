<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>moving page</title>
	<style type="text/css">
		body{
    background-color: #FFFFCC;
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    background:url(67.jpg) ;
    background-size: cover; 

  }
  form{

    position: absolute;
    transform: translate(-50% ,-50%);
    width: 350px;
    height: 420px;
    background: rgba(0, 0, 0, 5);
    border-radius: 15px;
    box-sizing: border-box;
    margin-top: 20%;
    margin-left: 20%;
    font-family: sans-serif;
   
  }
	button{
  height: 30px;
  width: 20%;
  background-color: #FFFFFF;
  margin-top: 25%;
 margin-left: 20%;
 border-radius: 20%;
 opacity: 1;
  cursor: pointer;
  
}

	</style>

</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"montors");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<form action="moving.php" method="post">
	<div >
    <button name="So" id="So">stop</button>
	<button name="St" id="St">start</button>
</div>
	<div style="display: block;">
    <button   name="B" id="B">backword</button>
  <button name="F" id="F">forward</button>
</div>
	<button name="L" id="L">left</button>
	<button name="R" id="R">right</button>
	

</form>
 <?php
if (isset($_POST['St'])) {

$sql = " UPDATE `control` SET  `stop`='1' WHERE `ID`='1'";
$result = $conn->query($sql);
 }
 
 ?>


 <?php
 if (isset($_POST['So'])) {

$sql = " UPDATE `control` SET  `stop`='0' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>


 <?php
  if (isset($_POST['B'])) {

$sql = " UPDATE `control` SET  `backward`='B' WHERE `ID`='1'";
$result = $conn->query($sql);
 }
 ?>


 <?php
  if (isset($_POST['L'])) {

$sql = " UPDATE `control` SET  `left`='L' WHERE `ID`='1'";
$result = $conn->query($sql);
 }
 ?>


  <?php
  if (isset($_POST['R'])) {

$sql = " UPDATE `control` SET  `right`='R' WHERE `ID`='1'";
$result = $conn->query($sql);
 }
 ?>


 <?php
  if (isset($_POST['F'])) {

$sql = " UPDATE `control` SET  `forward`='F' WHERE `ID`='1'";
$result = $conn->query($sql);
 }
 ?>
</body>
</html>