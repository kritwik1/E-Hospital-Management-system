<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Home</title>
  </head>
  <body>
    <div class="container">


    <h2 class="alert alert-warning alert-dismissible fade show">Doctor Details:-</h2>
      </div>
<div class="container">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
  <table class="table" border="1">
    <tr>
      <td class="table-warning">Hospital ID</td>
      <td class="table-warning">Doctor ID</td>
      <td class="table-warning"> Name</td>
      <td class="table-warning">Mobile</td>
      <td class="table-warning">Speciality</td>

    </tr>


<?php
if(isset($_GET['id'])){
  $hospital_id = $_GET['id'];
} else {
  echo "failed";
}
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hospital";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM doctors where hId='$hospital_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
      echo "<tr><td>";
    echo $row['hId'];
     echo "</td><td>";
    echo $row['DId'];
     echo "</td><td>";
    echo$row['Name'];
     echo "</td><td>";
    echo $row['Mobile'];
     echo "</td><td>";
    echo $row['Speciality'];
     echo "</td><td>";
      echo "</td></tr>";
  }
}
?>
</table>
</div>

      <a  class="btn btn-info btn-lg btn-block" href="newdoc.php?id=<?php echo $hospital_id; ?>">Click Here TO Add New Doctor</a>




</body>
</html>
