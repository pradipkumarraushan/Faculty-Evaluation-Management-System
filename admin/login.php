<?php

	include('connection.php');

	session_start();

	extract($_POST);

	if(isset($login))

	{

        $email = mysqli_real_escape_string($conn, $_POST['email']); 

        $pass = mysqli_real_escape_string($conn, $_POST['pass']); 

        $que = mysqli_query($conn,"SELECT * FROM admin WHERE user='$email' AND pass='$pass'");

         

		$row=mysqli_num_rows($que);

		if($row)

			{	

                

                date_default_timezone_set("Asia/Kolkata");

                  

                  $login_time=date('Y-m-d H:i:s');



                mysqli_query($conn,"UPDATE admin SET last_login = '$login_time'  WHERE user ='$email'");

				$_SESSION['admin']=$email;



				header('location:index.php');

			}

		else

			{

				$err="<font color='red'>Invalid login Credential !</font>";

			}

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

    

       <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="../css/bootstrap.min.css" >

    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">



    <!--Script-->

    <script src="../js/jquery1.11.3.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>
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





<nav class="navbar navbar-inverse navbar-fixed-top" style="background:#000">

 <div class="container-fluid">

    <div class="navbar-header">



    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

             <span class="sr-only"></span><a style="color: white">&#9776;  MENU</a>

          </button>

      <a class="navbar-brand" href="../index.php">SDMCET</a>

      </div>

  <div id="navbar" class="navbar-collapse collapse">

  <ul class="nav navbar-nav navbar-left">

    <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>

      

      

      <li><a href="../index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>

   

   

    

    <li><a href="../index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>

    

    </ul>





<ul class="nav navbar-nav navbar-right">

      <li><a href="../index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

      <li><a href="../index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

      <li><a href="../index.php?option=Adminlogin"><span class="glyphicon glyphicon-log-in"></span>Admin Login</a></li>

    </ul>





</div>

</div>

</nav><br><br><br>

<a href='https://sdmcet.ac.in/' title='SDMCET &mdash; Engineering college in Dharwad,Karnataka | College for Mba and MTech in Dharwad,Karnataka' rel='home'>

<img style="padding-bottom:10px; margin-left: 3% ; width:70px;height:85px; " src='../images/sdmcet.png' alt='SDMCET'><b style="color: red;font-size: 15px">SDM College of Engineering and Technology  Dharwad, Karnataka 580002</b></a>

<b style="margin-left: 4%;font-size: 50px">| </b><b style="margin-left: 3%;font-size: 25px"> Faculty Evaluation Management System</b>





<div class="container">



       

             <div class="col-md-4 col-md-offset-4">



                <div class="login-panel panel panel-default">



<h2 align="center" style="font-size: 30px;">Admin Login</h2>





                                <div style="margin-left: 20%">

                                    <img  src="../images/download.jpg"  height="200" width="200">

                                </div>

                              

<form method = "POST">

  <div class="panel-body"> 

    <fieldset>

        <div class="form-group ">





      

        

           <b> Enter Your Email : </b>

            <div class="input-group ">

            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

  <input type="email" placeholder="Enter Your Email Id" name="email" required class="form-control"/>          



           </div>



       </div>



 







   <div class="form-group ">

                                    <b>Enter Your Password :</b>







<div class="input-group  ">

    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>



         <input type="password"  class="form-control" placeholder="Enter Your Password" name="pass" required/>

        

    </div> </div> <div style="margin-left: 20%">

  

   

    <input type="submit" value="Login" name="login" class="btn btn-success"/>

    <input type="reset" value="Reset" name="reset" class="btn btn-success"/>    

     </div>

    <div  style="margin-left: 20%" class="form-group">

                                    <label>

                                        <?php echo @$err;?>

                                    </label>

                                </div>

     </fieldset>

      </form>

    </div>

</div>

</div>





















            <!-- container -->

        <div class="col-sm-8">

        <?php 

        @$opt=$_GET['option'];

        

        if($opt!="")

        {

            if($opt=="about")

            {

            include('../about.php');

            }

            else if($opt=="contact")

            {

            include('../contact.php');

            }

            

            else if($opt=="New_user")

            {

            include('../registration.php');

            }

            

            

            else if($opt=="login")

            {

            include('../login.php');

            }

            else if($opt=="Adminlogin")

            {

                header('location:login.php');

           

            }

        }

        

        ?>

        

        </div>

    </div>

    </div>

   

    <!-- footer-->



         





			 <nav class="navbar navbar-inverse navbar-bottom" style="background:black">

  <div class="container">

  

  <ul class="nav navbar-nav navbar-left">

    <li><a href="http://pradip.epizy.com/">Developed by  PRADIP KUMAR RAUSHAN</a></li>

     

      

  </ul>

<ul class="nav navbar-nav navbar-right">

  <li>

 <a href="">Copyright © <script>document.write(new Date().getFullYear());</script> - Faculty Evaluation Management System - All Rights Reserved</a> 

</li>
<li><script id="_wauvmb">var _wau = _wau || []; _wau.push(["small", "f1oy2rnu8b", "vmb"]);</script><script async src="//waust.at/s.js"></script> </li>

</ul> 

</div>

</nav>



<script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101205423);</script>
<script async src="//static.getclicky.com/js"></script>


</body>



</html>

