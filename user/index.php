<?php 
session_start();
include('../connection.php');
if(!isset($_SESSION["user"])){
  echo 'Please login to view this page!';
  header('Location: login_view.php');
  die();
}
$user= $_SESSION['user'];
$sql=mysqli_query($conn,"SELECT * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SDMCET &#8211; Faculty Evaluation Management System,SDM College of Engineering and Technology  Dharwad, Karnataka 580002">
    <meta name="keywords" content="Faculty,Evaluation,Management,SDMCET,SDM,SDM COLLEGE">
    <meta name="author" content="PRADIP KUMAR RAUSHAN">
    <!-- The above  meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SDMCET &#8211; Faculty Evaluation Management System</title>
    <link rel="icon" href="../favicon.ico">
     <!-- Bootstrap core CSS -->   
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <link rel='stylesheet' id='iworks_position-css'  href='../css/iworks_position.min.css' type='text/css' media='handheld, projection, screen' />
     <!--Script-->
    <script type='text/javascript' src='../js/iworks_position.min.js'></script>
    <script src="../js/jquery1.11.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/holder.min.js"></script>
    <script src="../js/calculation.js"></script>
      
  </head>

<body>
   <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#000">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">FACULTY EVALUATION MANAGEMENT SYSTEM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php?page=Fill_Form">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MENU<span class="caret"></span></a>
          <ul class="dropdown-menu" style="width: 500%;height: 700%">

            <!-- check users profile image -->
      <?php 
      $q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
      $row=mysqli_fetch_assoc($q);
      if($row['image']=="")
      {
      ?>
            <li><a  href="index.php?page=update_profile_pic"><img  title="Update Your profile pic Click here" style="border-radius:60px" src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
      <?php 
      }
      else
      {
      ?>
       <li><a title="Click here to Update Your profile Picture " href="index.php?page=update_profile_pic"><img title="Update Your profile pic Click here"  style="border-radius:50px;margin-left: 130px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a> </li>
      <?php 
      }
      ?>
            <li><a href="#"><font size="6%"><?php echo $users['name'];  ?></font></a></li>     
            <li><a title="Click here to Update Your Profile " href="index.php?page=update_profile"><span class="glyphicon glyphicon-user"></span> Update Profile</a></li>
            <li><a title="Click here to Update Your Password " href="index.php?page=update_password"><span  class="glyphicon glyphicon-lock"></span> Update Password</a></li>

            <li><a title="Click here to Check Your Notification / Message " href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Notification / Message</a></li>
            <li><a title="Click here to Fill out / Update Forrm " href="index.php?page=Fill_Form"><span class="glyphicon glyphicon-pencil"></span> Fill-Out / Update  your form </a></li>
            <li><a title="Click here to Preview & Generate PDF " href="index.php?page=pdf_preview"><span class="glyphicon glyphicon-print"></span> Preview & Generate PDF </a></li>
          </ul>
        </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
   

    
    
           <!-- <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
             
			 find users' image if image not found then show dummy image -->
			
			
			
			
			 
       
      
      
       
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
			if($page=="notification")
			{
				include('notification.php');
			
			}
			if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			if($page=="update_profile_pic")
			{
				include('update_profile_pic.php');
			
			}
      if($page=="pdf_preview")
      {
        include('pdf_preview.php');
      
      }
      if($page=="Fill_Form")
      {
        include('new.php');// Academic.php
      
      }
		  }
		  else
		  {
		  //include('notification.php');
        include('new.php');
		  ?>
		  <!-- container end-->

		  
		  
<?php } ?>
 <br/>



<!-- footer-->



<nav class="navbar navbar-inverse navbar-bottom" style="background:black">

  <div class="container">

  

  <ul class="nav navbar-nav navbar-left">

    <li><a href="http://www.pradip.ml">Developed by  PRADIP KUMAR RAUSHAN</a></li>
</ul>

<ul class="nav navbar-nav navbar-right">

  <li>

 <a href="">Copyright © 2018 - Faculty Evaluation Management System - All Rights Reserved</a> 

</li>

</ul> 

</div>

</nav>         
   

<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(101104855); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101104855ns.gif" /></p></noscript>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115318002-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115318002-1');
</script>


<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
  </body>
</html>
