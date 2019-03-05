<?php
$con = mysqli_connect('localhost','root','','crud');
if(isset($_GET['submit'])){
	 $id = $_GET['id'];
     $email = $_GET['email'];
     $password = $_GET['password'];
     $q=mysqli_query($con,"UPDATE  user SET email='$email',password='$password'
     	WHERE id='$id'");
    if($q){
    	echo  "Update";
    }else{
    	echo "not Update";
    }

}
?>