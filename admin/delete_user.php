<?php 

include('connection.php');
$email=$_GET['email'];

$q=mysqli_query($conn,"DELETE from user where email='$email'");
mysqli_query($conn,$q);
header('location:index.php?page=manage_users');

?>