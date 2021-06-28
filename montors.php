<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>control panal</title>
	<style >

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
    margin-top: 15%;
    margin-right: 20%;
    font-family: sans-serif;
   
  }
	.slider {
  w-webkit-appearance: none;  /* Override default CSS styles */
  appearance: none;
  width: 50%; /* Full-width */
  height: 15px; /* Specified height */
 margin-top: 5%;
  outline: none; /* Remove outline */
  opacity: 5; /* Set transparency (for mouse-over effects on hover) */
  -webkit-transition: .5s; /* 0.2 seconds transition on hover */
  transition: opacity .5s;
}


	</style>

</head>
<body >

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



	<center>
<div class="slider" style="color:#ffffff;">
	<form action="montors.php" method="post" >
 <p>montor 1<input type="range" min="0" max="90"  class="slider" id="myRange" name="sliderN1"><label> <span id="demo"></span></label></p>
  <p>montor 2<input type="range" min="0" max="90"  class="slider" id="myRange2" name="sliderN2"><label> <span id="demo2"></span></label></p>
  <p> montor 3 <input type="range" min="0" max="90"  class="slider" id="myRange3" name="sliderN3"><label> <span id="demo3"></span></label></p>
   <p>montor 4 <input type="range" min="0" max="90"  class="slider" id="myRange4" name="sliderN4"><label> <span id="demo4"></span></label></p>
   <p>montor 5<input type="range" min="0" max="90"  class="slider" id="myRange5" name="sliderN5"><label> <span id="demo5"></span></label></p>
    <p>montor 6 <input type="range" min="0" max="90"  class="slider" id="myRange6" name="sliderN6"><label> <span id="demo6"></span></label></p>
     
   <input type="submit"  name="on" id="on" value="on">
   <input type="submit" name="off" id="off" value="off">
   <input type="submit" name="send" value="send">
</form>


<?php 

if (isset($_POST['send'])) {
 
$sql = " UPDATE `arm` SET `arm1`='".$_POST['sliderN1']."', `arm2`='".$_POST['sliderN2']."', `arm3`='".$_POST['sliderN3']."', `arm4`='".$_POST['sliderN4']."', `arm5`='".$_POST['sliderN5']."', `arm6`='".$_POST['sliderN6']."'  WHERE `ID`='1'";

$result = $conn->query($sql);
 }

 ?>
<?php

if (isset($_POST['on'])) {

$sql = " UPDATE `arm` SET  `start`='1' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 
 ?>
 <?php

if (isset($_POST['off'])) {

$sql = " UPDATE `arm` SET  `start`='' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>


</div>
</center>

<script>
var slider1 = document.getElementById("myRange");
var output1 = document.getElementById("demo");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}

var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}

var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
}
var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
}

var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider4.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
}

var slider6 = document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.innerHTML = slider4.value;

slider6.oninput = function() {
  output6.innerHTML = this.value;
}

</script>



</body>
</html>