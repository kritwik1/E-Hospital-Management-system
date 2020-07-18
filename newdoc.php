<?php
if(isset($_GET['id'])){
  $product_id = $_GET['id'];

} else {
  echo "failed";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="alert alert-success" role="alert">
    <h1 class="mb-0">Enter the details of new Doctor:-</h1>
  </div>
  </div>
    <div class="container">
      <div class="jumbotron">


    <form name="newdoc" action="insedoc.php" method="post" onsubmit=" return formValidation();" >
      <table class="table" border="1" >
          <tr>
              <td><label for="id">Hospital ID:</label></td>
              <td><input type="text" name="id" id="id" value="<?php echo $product_id ?>" readonly></td>
          </tr>
          <tr>
                    <td><label for="nam">Name</label></td>
                    <td><input type="text" name="nam" id="nam" required></td>
                </tr>
                <tr>
                  <td><label for="mob">Mobile</label></td>
                  <td><input type="text" name="mob" id="mob" required></td>
              </tr>
              <tr>
                <td><label for="spec">Speciality</label></td>
                <td><input type="text" name="spec" id="spec" required></td>
            </tr>
              <tr>
                  <td><input class="btn btn-primary" type="submit" value="Submit"/>
                  <td><input  class="btn btn-danger"type="reset" value="Reset"/>
              </tr>
                </table>


    </form>
  </div>

</div>
<script type="text/javascript">
function formValidation()
{
var uname = document.newdoc.nam;
var secl=document.newdoc.spec;
var mobi=document.newdoc.mob;
var phn='^[0-9]+$';
var letters =  /^[a-zA-Z ]+$/;
if(uname.value.match(letters) && spec.value.match(letters) &&  mobi.value.match(phn))
{
return true;
}
else
{
alert('Name or Speciality  must have alphabet characters only and mobile no. contain integers');
uname.focus();
return false;
}
}




</script>
      </body>
    </html>
