<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Home</title>
  </head>
  <body>
      <div class="alert alert-primary" role="alert">
    <div class="container">

    <h1>List Of Hospitals:-</h1>
  </div>
</div>
<div class="container">


  <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hospital";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM hospitaln";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    $hospital_id = $row['hId'];
    $name=$row['Name'];
?>
<div class="container">


<br>
<br>

<a  class="btn btn-info btn-lg btn-block" href="doctors.php?id=<?php echo $hospital_id; ?>"><?php echo $name;?></a>
</div>


<?php
}
}
?>
<br>
<br>
<form  action="adhos.php" method="post">
  <div style="text-align:center">
   <input  class="btn btn-primary" type="submit" name="" value="ADD New Hospital">
 </div>
 </form>
 <br>
 <br>
 <div class="form-group">
    <form method="post">

 <input   class="form-control " type="text" name="ID" id="ID" placeholder="Enter the Name of hospital you want to delete:">

    <br>
    <div style="text-align:center">
    <input  class="btn btn-dark" type="submit" name="sun" value="DELETE">
  </div>
  </form>
</div>


<?php
if(isset($_POST['sun'])){
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "hospital";
    $ti=$_POST['ID'];
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "DELETE FROM hospitaln WHERE Name='$ti'";
  if($result = $conn->query($sql)){
    echo"<b> NOTE:</b>Refresh the page to see update";
  }
  else {
    echo"Name iS not valid";
  }

}

?>
<form name="update" action="update.php" method="post"  onsubmit=" return validateForm();">
  <input  class="form-control" type="text" name="noo" id="noo" placeholder="Enter the Name of hospital you want to update:">
     <br>
     <div style="text-align:center">
     <input  class="btn btn-dark" type="submit" name="sun" value="Click to Open Update form">
 </form>

</div>
<script type="text/javascript">
function validateForm() {
  var uname = document.update.noo;
  var letters =  /^[a-zA-Z ]+$/;
  if(uname.value.match(letters) )
  {
  return true;
  }
  else
  {
  alert('Check the name you mentioned OR Name can not be empty');
  uname.focus();
  return false;
  }
  }



</script>
</body>
</html>
