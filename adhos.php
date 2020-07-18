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
    <h1>Enter the details of new Hospital:</h1>
  </div>
  </div>
    <div class="container">
      <div class="jumbotron">


    <form  action="insehos.php"method="post">
      <table class="table" >

          <tr>
                    <td><label for="type">Name</label></td>
                    <td><input type="text" name="name" id="nam" required></td>
                </tr>
                <tr>
                  <td><label for="price">Location</label></td>
                  <td><input type="text" name="loc" id="loc" required></td>
              </tr>
              <tr>
                <td><label for="price">Telephone</label></td>
                <td><input type="text" name="tel" id="tel" required></td>
            </tr>
              <tr>
                  <td><input class="btn btn-warning" type="submit" value="Submit"/>
                  <td><input class="btn btn-success" type="reset" value="Reset"/>
              </tr>
                </table>


    </form>
  </div>

</div>
