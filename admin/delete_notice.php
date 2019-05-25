<?php 


include('connection.php');

$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from notice where notice_id='$nid'");

header('location:index.php?page=notification');

?>