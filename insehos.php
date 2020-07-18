<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hospital";
$name = $_POST['name'];
$ptyp = $_POST['loc'];
$pric = $_POST['tel'];

//$contact = $_POST['contact'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$sql = "insert into hospitaln(Name,Location,Telephone) values('$name','$ptyp','$pric');";
$result = $conn->query($sql);
if($result){
  echo "Doctor Added Succcessfully";
  echo "<br>";

  echo "<br>";
  echo "<a href='Displayhospital.php'>GO to Home</a>";
}

else{
  echo"Invalid Name";
}
$conn->close();
?>
