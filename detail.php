<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>CRUD</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Email</th>
        <th>Password</th>
        <th>Detail</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
       $con = mysqli_connect('localhost','root','','crud');
       if(isset($_GET['detail'])){
        $id = $_GET['detail'];
        $query = mysqli_query($con,"SELECT * FROM user WHERE id='$id'");
        while($key = mysqli_fetch_array($query)){
      ?>
      <tr>
        <td><?php echo $key[0]; ?></td>
        <td><?php echo $key[1]; ?></td>
        <td><?php echo $key[2]; ?></td>
        <td><a href="detail.php?update=<?php echo $key[0];?>" class="btn btn-primary">Detail</a></td>
         <td><a href="update.php?update=<?php echo $key[0];?>" class="btn btn-primary">Update</a></td>
        <td><a href="delete.php?delete=<?php echo $key[0];?>" class="btn btn-danger">Delete</a></td>
      </tr>
      <?php  } }?>
    </tbody>
  </table>
</div>
</body>
</html>