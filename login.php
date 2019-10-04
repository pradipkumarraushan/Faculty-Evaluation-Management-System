<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$error_message="Fill all the fileds first";	
	}
	else
	{
		$pass = mysqli_real_escape_string($conn, $p);
		$email = mysqli_real_escape_string($conn, $_POST['e']); 

         $password=md5($pass);

         
        
//Checking Login Credential
$sql=mysqli_query($conn,"SELECT * from user where email='$email' and pass='$password' ");

$r=mysqli_num_rows($sql);

if($r==true)
{ 
   //Checkin email verified by client or not 
 $sql=mysqli_query($conn,"SELECT * from user where email='$email' and email_verified='1' ");

$r=mysqli_num_rows($sql);

if($r==true)
{ 
  
//Checking Is user Allowed by Admin or not 
$sql=mysqli_query($conn,"SELECT * from user where email='$email' and pass='$password' and status='allowed' "); 
$r=mysqli_num_rows($sql);
if($r==true)
{

	                 date_default_timezone_set("Asia/Kolkata");
	                $login_time=date('Y-m-d H:i:s');
                     mysqli_query($conn,"UPDATE user SET last_login = '$login_time' WHERE email ='$email'");
                    $_SESSION['user']=$email;
               
             
             
//header('location:user');
header("Location:user\index.php");
}
else 
{

	$error_message='ACCOUNT BLOCKED:<br><p style="color:blue">Your account is currently bloked by an administrator.<br>
	                You can write an email to Admin, if it is done by mistake.</p>';
}
}else{
      $error_message='Please Verify Your Email. OR,<br>
      <b><a style="color: blue" href="index.php?option=resend-email-verification">Resend Email Verification Link</a></b>
                     ';

     }

}
else
{

$error_message="Invalid login Credential";

}
}
}

?>
<h2>Login Form</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			
<?php if(isset($error_message)) { ?> <div style="font-weight: bold;color:red;"><?php echo $error_message; ?></div> <?php } ?>


		</div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Your Email</div>
		<div class="col-sm-5">

			<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            
<input type="email" name="e" class="form-control"/></div>
           </div>

	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Your Password</div>
		<div class="col-sm-5">


<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

         
		<input type="password" name="p" class="form-control"/></div>
</div>




	</div>
	<div class="row" style="margin-top:10px ;margin-left:150px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	
	
	<input type="submit" value="Login" name="save" class="btn btn-success"/>
	<b><a style="color: red" href="index.php?option=forgot_password">Forgot Password ? Click here!</a></b>
		
		</div>
		
	</div>
</form>	