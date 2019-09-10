<?php 

session_start();

include('connection.php');

$admin= $_SESSION['admin'];

if($admin=="")

{

header('location:login.php');

}

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
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147567710-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147567710-1');
</script>


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

          <a class="navbar-brand" href="#">Welcome Admin !</a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">

           <li><a href="logout.php" title="Click here to Logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>

           

          </ul>

          <!--<form class="navbar-form navbar-right">

            <input type="text" class="form-control" placeholder="Search...">

          </form>-->

        </div>

      </div>

    </nav>



    <div class="container-fluid">

      <div class="row">

        <div class="col-sm-3 col-md-2 sidebar">

          <ul class="nav nav-sidebar">

            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>

			<!-- find users' image if image not found then show dummy image -->

			

			

            <li><a href="#"><img src="../images/admin2.jpg" width="150" height="150" alt="not found"/></a></li>

			

			

			

			

			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>

            <li><a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"></span> Manage Users</a></li>

            <li><a href="index.php?page=user_status"><span class="glyphicon glyphicon-user"></span>Activate/Deactivate Users</a></li>

             <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Manage Message</a></li>

            <li><a href="index.php?page=Modify_Weightage_Value">Modify Form Values </a></li>

            <li><a href="index.php?page=Modify_Particular_Text">Modify Particular Text </a></li>

            <li><a href="index.php?page=Mail"><span class="glyphicon glyphicon-envelope"></span> Mail </a></li>

			



            

          </ul>

         

         

        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <!-- container-->

		  <?php 

		@$page=  $_GET['page'];

		  if($page!="")

		  {

		  	if($page=="manage_users")

			{

				include('manage_users.php');

			

			}

      if($page=="user_status")

      {

        include('user_status.php');

      

      }

			

			if($page=="update_password")

			{

				include('update_password.php');

			

			}

     

			if($page=="notification")

			{

				include('display_notification.php');

			

			}

			

			if($page=="update_notice")

			{

				include('update_notice.php');

			

			}

      if($page=="Modify_Weightage_Value")

      {

        include('modify_weightage.php');

      

      }



      if($page=="Modify_Particular_Text")

      {

        include('modify_particular_text.php');

      

      }



      

			

			if($page=="add_notice")

			{

				include('add_notice.php');

			

			}

			if($page=="Mail")

			{

				include('mail.php');

			

			}

		  }

		  

		  else

		  {

		  ?>

		  <!-- container end-->

		  

		  

		

		  

		  <h1 class="page-header">Dashboard</h1>

		  

	

		  

		  <?php } ?>

		  



         

        </div>

      </div>

    </div>



    

    

    

   







<script id="_wauvmb">var _wau = _wau || []; _wau.push(["small", "f1oy2rnu8b", "vmb"]);</script><script async src="//waust.at/s.js"></script>


<script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101205423);</script>
<script async src="//static.getclicky.com/js"></script>

  </body>

</html>

