<?php 
include('connection.php');

if($_GET['id'])
{
$nid=$_GET['id'];



$q=mysqli_query($conn,"UPDATE user set status = 'allowed' where email='$nid'");
mysqli_query($conn,$q);

	header('location:index.php?page=user_status');
}
else
{

$nid=$_GET['id1'];



$q=mysqli_query($conn,"update user set status = 'blocked' where email='$nid'");
mysqli_query($conn,$q);

	header('location:index.php?page=user_status');
}


?>