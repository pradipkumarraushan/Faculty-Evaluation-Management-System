<?php
ob_start();
require_once 'connection.php';
    if(isset($_POST["forgot-password"]))
    {
          $user_email = mysqli_real_escape_string($conn, $_POST["user_email"]);
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL))
        
        {
        $token = bin2hex(random_bytes(16));
       
        if(!empty($_POST["user_email"]))
        {
            $email = trim($_POST["user_email"]);
        } else {
            $error_message = "<li>Email is required</li>";
        }
        if(empty($error_message))
        {
            $sql=mysqli_query($conn,"update user set forgot_password='$token'   WHERE email = '$email' ");
        	  $query=mysqli_query($conn,"SELECT name, email , forgot_password FROM user WHERE email = '$email'");
        	   $user=mysqli_fetch_all($query,MYSQLI_BOTH);

            //mysqli_num_rows($query);
            
        }
        if(!empty($user))
        {

            require_once ("forgot-password-mail.php");
        } 
        else 
           {
            $error_message = 'No Email Id Found';
           }
    }
    else 
           {
            $error_message = 'Invalid Email Id Format';
           }
}
?>



                  <h2>Forgot Password ? </h2>
                <form id="frmForgot" name="frmForgot" method="post">
                	 
          <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">        
         
    <?php if(!empty($success_message)) { ?><div style="font-weight: bold;color:green;"><?php echo $success_message ?> </div><?php } ?>
    <?php if(isset($error_message)) { ?> <div style="font-weight: bold;color:red;"><?php echo $error_message; ?></div> <?php } ?>          
		
	 
        </div>
    </div>
	

    
        <div class="row">
		<div class="col-sm-4"><b>Enter Your Email Id</b></div>
		<div class="col-sm-5">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="email" class="form-control" name="user_email" placeholder="Enter Your Registered email Id" required></div>
                     </div>

		

                    <input type="submit" class="btn btn-success" style=" margin-left: 50%" value="submit" name="forgot-password" id="forgot-password">
                </form>
           </div>


