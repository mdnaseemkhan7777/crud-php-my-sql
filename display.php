<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- tabel -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
      <th scope="col">update</th>
    </tr>
  </thead>
  <?php
    include "conn.php";
    $query = "SELECT * FROM USER";
    $result = mysqli_query($conn,$query);
    while($res =mysqli_fetch_array($result)){
  ?>
  <tbody>
    <tr>
      <td><?php echo $res['id'] ?></td>
      <td><?php echo $res['username'] ?></td>
      <td><?php echo $res['password'] ?></td>
      <td><a href="delete.php?id=<?php echo $res['id'] ?>"><input type="button" class="btn btn-primary" value="delete"></a></td>
      <td><a href="update.php?id=<?php echo $res['id'] ?>"><input type="button" class="btn btn-primary" value="update"></a></td>
      
    </tr>
    <tr>  
  </tbody>
  <?php } ?>
</table>
            </div>
        </div>
    </div>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>