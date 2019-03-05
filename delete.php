<?php
$con = mysqli_connect('localhost','root','','crud');
if(isset($_GET['delete'])){
	$id = $_GET['delete'];
    $q=mysqli_query($con,"DELETE FROM user WHERE id='$id'");
    if($q){
    	echo "delete";
    }else{
    	echo "not delete";
    }

}
?>