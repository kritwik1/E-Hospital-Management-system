<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hospital";
$hid = $_POST['id'];
$name = $_POST['name'];
$ptyp = $_POST['loci'];
$pric = $_POST['telee'];

//$contact = $_POST['contact'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$sql = "UPDATE hospitaln
SET Name = '$name', Location= '$ptyp',Telephone='$pric'
WHERE hId = '$hid';";
$result = $conn->query($sql);
if($result){
  echo "Hospital Updated Succcessfully";
  echo "<br>";

  echo "<br>";
  echo "<a href='Displayhospital.php'>GO to Home</a>";
}
else {
  echo "Invalid";
}


$conn->close();
?>
