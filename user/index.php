<?php 
session_start();
include('../connection.php');
if(!isset($_SESSION["user"])){
  echo 'Please login to view this page!';
  header('Location: login_view.php');
  die();
}
$user= $_SESSION['user'];
$sql=mysqli_query($conn,"select * from user where email='$user' ");
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
      
  </head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

           <a class="navbar-brand" href="index.php">SDMCET</a>
          <a title="Click here To Choose Option" class="navbar-brand" style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; MENU</a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">
        	 <ul class="nav navbar-nav navbar-left">
        	 	<li></li>
        	 	 </ul>
          <ul class="nav navbar-nav navbar-right">
           
            <li><a title="Click here to Logout" style="font-size:20px" href="logout.php">Logout</a></li>
            
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    
    <div id="myNav" class="overlay">
      
  <a title="Click here to Close MENU"  href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">

          <ul class="nav">
           <!-- <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
             
			 find users' image if image not found then show dummy image -->
			
			<!-- check users profile image -->
			<?php 
			$q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")
			{
			?>
            <li><a href="index.php?page=update_profile_pic"><img title="Update Your profile pic Click here" style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			else
			{
			?>
			<a href="index.php?page=update_profile_pic"><img title="Update Your profile pic Click here"  style="border-radius:50px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a>
			<?php 
			}
			?>
			<a href="#"><font size="15%"><?php echo $users['name'];  ?></font></a>
			
			<!--<li><a href="#"><?php echo $users['name'];  ?></a></li> -->

			<a title="Update Your Password Click here" href="index.php?page=update_password"><span  class="glyphicon glyphicon-user"></span> Update Password</a>
      <a title="Update Your Profile Click here" href="index.php?page=update_profile"><span class="glyphicon glyphicon-user"></span> Update Profile</a>
			 <a title="check Your Notification Click here" href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Notification</a>
       <a title="Fill up Forrm Click here" href="index.php?page=Fill_Form"><span ></span>Fill up your form </a>
      <a title="Preview & Generate PDF Click here" href="index.php?page=pdf_preview"><span ></span>Preview & Generate PDF </a>
            
          </ul>
         
         
        </div></div>
       
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
		   
		  
		 <!-- <h1 align="center" class="page-header">Dashboard</h1>
      <marquee direction="left" scrollamount="7"  onMouseOver="this.stop();" onMouseOut="this.start();"><font color="red" size="+1">WELCOME <?php echo $users['name'];?></font></marquee> -->

		  
		  
<?php } ?>
          
   

    <style type="text/css">

.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 10%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: red;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>
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
