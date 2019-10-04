<?php
ob_start();
require_once 'connection.php';
if (isset($_POST["forgot-password"]))
{
    $user_email = mysqli_real_escape_string($conn, $_POST["user_email"]);
    if (!empty($user_email))
    {
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL))
        {
            
            $token = bin2hex(random_bytes(16));
            $query = mysqli_query($conn, "SELECT email FROM user WHERE email = '$user_email' ");
            $sql   = mysqli_fetch_assoc($query);
            //$r=mysqli_num_rows($query);
            //if ($r > 0) 
            if (!empty($sql))
            {
                $query = mysqli_query($conn, "SELECT email_verified FROM user WHERE email = '$user_email' AND email_verified = '1' ");
                $sql   = mysqli_fetch_assoc($query);
                
                //$r=mysqli_num_rows($query);
                //if ($r > 0) 
                if (!empty($sql))
                {
                    
                    
                    
                    mysqli_query($conn, "UPDATE user SET forgot_password='$token'   WHERE email = '$user_email' ");
                    $query = mysqli_query($conn, "SELECT name, email , forgot_password FROM user WHERE email = '$user_email' ");
                    $user  = mysqli_fetch_assoc($query);
                    //if (!empty($user))
                        require_once("forgot-password-mail.php");
                    
                }
                else
                {
                    $error_message = 'Please Verify Your Email First. OR,<br>
                  <b><a style="color: blue" href="index.php?option=resend-email-verification">Resend Email Verification Link</a></b>
                     ';
                }
                
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
    else
    {
        $error_message = 'Email is required';
    }
}
?>



                  <h2 class="text-center">Forgot Password</h2><br><br>
                <form id="frmForgot" name="frmForgot" method="post">
                    
          <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">        
        
    <?php
if (!empty($success_message))
{
?><div style="font-weight: bold;color:green;"><?php
    echo $success_message;
?> </div><?php
}
?>
   <?php
if (isset($error_message))
{
?> <div style="font-weight: bold;color:red;"><?php
    echo $error_message;
?></div> <?php
}
?>          
        
    
        </div>
    </div>
    

    
        <div class="row">
        <div class="col-sm-4"><b>Enter Your Registered email Id</b></div>
        <div class="col-sm-5">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="email" class="form-control" name="user_email" placeholder="Enter Your Registered email Id" required></div>
                     </div>

        

                    <input type="submit" class="btn btn-success" style="margin-top:10px ;margin-left:45%" value="submit" name="forgot-password" id="forgot-password">
                </form>
           </div>