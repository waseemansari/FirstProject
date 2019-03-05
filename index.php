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
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
  <!-- end -->
  <div id="records_content"></div>
</div>
<script type="text/javascript">
  
  $(document).ready(function(){
    function readRecords(){
     var readrecords = "readrecords";
    $.ajax({
      url:"read.php",
      type:"POST",
      data:{readrecords:readrecords},
      success:function(data,status){
        $('#records_content').html(data);
      },

    });
  }
    readRecords();
    $('#submit').click(function(){
      var email = $('#email').val();
      var password = $('#password').val();
      
      $.ajax({
        url:'create.php',
        method:'GET',
        data:{
          email:email,
          password:password
        },
        success:function(data){
   
          readRecords();
        }
      });

    });
  });
</script>
</body>
</html>
