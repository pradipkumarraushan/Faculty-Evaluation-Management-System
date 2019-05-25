<?php 
include('connection.php');
ob_start();
session_start();
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
    <link rel="icon" href="favicon.ico">
     <!-- Bootstrap core CSS -->   
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel='stylesheet' id='iworks_position-css'  href='css/iworks_position.min.css' type='text/css' media='handheld, projection, screen' />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
  </head>
<body>

 <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#000">
  <div class="container-fluid">
    <div class="navbar-header">
  	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only"></span><a style="color: white">&#9776;  MENU</a>
          
    </button>
      <a class="navbar-brand" href="index.php">SDMCET</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="index.php?option=Adminlogin"><span class="glyphicon glyphicon-log-in"></span>Admin Login</a></li>
    </ul>

</div>

</div>
</nav>	
<br><br><br>
<!-- college logo and name -->

<a href='https://sdmcet.ac.in/' title='SDMCET &mdash; Engineering college in Dharwad,Karnataka | College for Mba and MTech in Dharwad,Karnataka' rel='home'>
<img style="padding-bottom:10px; margin-left: 3% ; width:70px;height:85px; " src='images/sdmcet.png' alt='SDMCET'><b style="color: red;font-size: 15px">SDM College of Engineering and Technology  Dharwad, Karnataka 580002</b></a>
<b style="margin-left: 4%;font-size: 50px">| </b><b style="margin-left: 3%;font-size: 25px"> Faculty Evaluation Management System</b>

			        







<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img height="300" width="1300" src="images/1.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img height="300" width="1300"  src="images/2.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <img height="300" width="1300" src="images/3.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			else if($opt=="reset_password")
			{
			include('resetPassword.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			else if($opt=="forgot_password")
			{
			include('forgotPassword.php');
			}
			
			else if($opt=="login")
			{
			include('login.php');
			}
			else if($opt=="Adminlogin")
			{
				header("Location:admin\login.php");
			//include('admin\login.php');
			}
		}
		else
		{
		echo "<h2></h2>
		Welcome 
		";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		<div class="col-sm-4">
  <div class="panel panel-default">
  <div class="panel-heading">Latest news</div>
  <div class="panel-body">
    Faculty Evaluation Management System
  </div>
</div>

  <div class="panel panel-default">
<div class="panel-heading">Page View</div>
  <div class="panel-body">
<script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=5eznm6yqt2r&amp;m=6&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=0" async="async"></script>
               
  </div>
</div>

		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>


<!-- footer-->



      <nav class="navbar navbar-inverse navbar-bottom" style="background:black">

  <div class="container">

  

  <ul class="nav navbar-nav navbar-left">

    <li><a href="https://www.facebook.com/pradeepkumarraushan">Developed by  PRADIP KUMAR RAUSHAN</a></li>

     

      

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

  </body>

</html>