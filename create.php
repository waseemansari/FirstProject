<?php
$con = mysqli_connect('localhost','root','','crud');
if(isset($_GET['email']) && isset($_GET['password'])){
    $email = $_GET['email'];
    $password = $_GET['password'];
            $q=mysqli_query($con,"INSERT INTO user(email,password) VALUES('$email',$password)");

}
?>