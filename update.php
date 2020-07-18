<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hospital";
$pric = $_POST['noo'];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM hospitaln where Name='$pric';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
  $hospital_id = $row['hId'];
  $name=$row['Name'];
  $loc=$row['Location'];
  $tel=$row['Telephone'];
}
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>


<div class="container">
  <div class="alert alert-info" role="alert">
<h1>Enter the details of new Hospital:</h1>
</div>
</div>
<div class="container">
  <div class="jumbotron">


<form   action="newupdate.php" method="post" >
  <table   class="table" >
      <tr>
          <td><label for="id">Hospital ID:</label></td>
          <td><input type="text" name="id" id="id" value="<?php echo $hospital_id ?>" readonly></td>
      </tr>
      <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name" placeholder="<?php echo $name ?>" required></td>
            </tr>
            <tr>
              <td><label for="loci">Location</label></td>
              <td><input type="text" name="loci" id="loci" placeholder="<?php echo $loc ?>" required></td>
          </tr>
          <tr>
            <td><label for="telee">Telephone</label></td>
            <td><input type="text" name="telee" id="telee" placeholder="<?php echo $tel ?>" required></td>
        </tr>
          <tr>
              <td><input class="btn btn-primary" type="submit" value="Submit"/>
              <td><input class="btn btn-danger" type="reset" value="Reset"/>
          </tr>
            </table>


</form>
</div>
</div>

</body>
</html>
