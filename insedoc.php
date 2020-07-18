<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hospital";
$na = $_POST['id'];
$name = $_POST['nam'];
$ptyp = $_POST['mob'];
$pric = $_POST['spec'];

//$contact = $_POST['contact'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$sql = "insert into doctors(hId,Name,Mobile,Speciality) values('$na','$name','$ptyp','$pric');";
$result = $conn->query($sql);
if($result){
  echo "Doctor Added Succcessfully";
  echo "<br>";
  
  echo "<br>";
  echo "<a href='Displayhospital.php'>GO to Home</a>";
}


$conn->close();
?>
