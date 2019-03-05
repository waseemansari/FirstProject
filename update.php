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
  <h2>Update</h2>
<?php
$con = mysqli_connect('localhost','root','','crud');
if(isset($_GET['update'])){
    $id = $_GET['update'];
    $query=mysqli_query($con,"SELECT * FROM user WHERE id='$id'");
    while ($key=mysqli_fetch_array($query)) { ?>
    	<form action="edit.php" method="GET">
    		<input type="hidden"  name="id" value="<?php echo $key['id']; ?>">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $key['email']; ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password" value="<?php echo $key['password']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
   </div>
   </body>
   </html> 	
 <?php }}?>