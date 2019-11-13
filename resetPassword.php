<?php
require_once 'connection.php';
if (isset($_POST["reset-password"]))
{
    $token = bin2hex(random_bytes(16));
    if (@$_GET["email"] == "" || @$_GET["id"] == "")
    {
        $error_message = "Failed : <br>Don't Modify Url  !!";
    }
    else
    {
        $email = trim($_GET["email"]);
        $id    = trim($_GET["id"]);
        // Validate e-mail
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $email = mysqli_real_escape_string($conn, $email);
            $id    = mysqli_real_escape_string($conn, $id);
            $sql   = mysqli_query($conn, "SELECT * from user where email='$email' and  forgot_password ='$id'"); //Checking Is user Allowed or not 
            $r     = mysqli_num_rows($sql);
            if ($r == true)
            {
                
                
                $password = ($_POST["password"]);
                
                $confirmPassword = ($_POST["confirmPassword"]);
                $password        = mysqli_real_escape_string($conn, $password);
                $confirmPassword = mysqli_real_escape_string($conn, $confirmPassword);
                
                if ($password != "" && $confirmPassword != "") // check for null
                {
                    
                    if ($password == $confirmPassword)
                    {
                        date_default_timezone_set("Asia/Kolkata");
                        $login_time       = date('Y-m-d H:i:s');
                        $password         = md5($password);
                        $sql              = mysqli_query($conn, "UPDATE user SET pass = '$password',last_login = '$login_time' WHERE email= '$email' AND forgot_password ='$id' ");
                        $success_message  = "Password is updated successfully.";
                        $sql              = mysqli_query($conn, "UPDATE user SET forgot_password = '$token' WHERE email= '$email' "); //After Updating Password changing id to prevent user

                        //Checking Is user Allowed or not for login
                        $check = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND status = 'allowed' AND email_verified = '1'"); 
                        $row     = mysqli_num_rows($check);
                      if ($row == true)
                      {

                        $_SESSION['user'] = $email;
                        echo '<SCRIPT type="text/javascript">
                        alert("Password Changed successfully.\nNow you are redirecting to Dashboard");
                        window.location.replace("https://localhost/Faculty-Evaluation-Management-System/user/index.php");
                        </SCRIPT>';
                       }else{
                            $success_message = "Password Changed successfully.<br>
                            <font color='red'>But, Your account is currenty blocked.<br>Contact Admin</font>";
                       }
                        
                    }
                    else
                    {
                        
                        $error_message = "Failed : Password not updated (confirm Password Mismatch)";
                    }
                    
                }
                
                else
                {
                    $error_message = "Failed : Fill all field First";
                }
                
            }
            else
            {
                
                $error_message = "Failed : Your forgot password Link Expired !!";
            }
        }
        else
        {
            $error_message = "Failed : <br>Invalid Email Id Format !!";
        }
    }
    
}
?>        
<h2>Reset Password</h2>
<form method="post">
  
  <div class="row">
    <div class="col-sm-4"></div>
                <?php
if (!empty($success_message))
{
?>
               <div class="col-sm-4" style="font-weight: bold;color:green;"><?php
    echo $success_message;
?></div>
                <?php
}
?>
               <?php
if (!empty($error_message))
{
?>
               <div class="col-sm-4" style="font-weight: bold;color:red;"><?php
    echo $error_message;
?></div>
                <?php
}
?>
 </div>
  
  
  
  <div class="row">
    <div class="col-sm-4">Enter Your New Password</div>
    <div class="col-sm-5">
    <input type="password" name="password" class="form-control"/></div>
  </div>
  
  <div class="row">
    <div class="col-sm-4">Confirm Your New Password</div>
    <div class="col-sm-5">
    <input type="password" name="confirmPassword" class="form-control"/></div>
  </div>
  <div class="row" style="margin-top:10px ;margin-left:150px">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
  
  
  <input type="submit" value="Update Password" name="reset-password" class="btn btn-success"/>
    </div>

        </div>
</form>
