<?php
    require_once 'connection.php';
    if(isset($_POST["reset-password"]))
    {
      $token = bin2hex(random_bytes(16));
     if($_GET["email"]=="" || $_GET["id"]=="")

       {
      $error_message = "Failed : <br>Don't Modify Url  !!";
      }
    else
    {
        

      $email = trim($_GET["email"]);
       $id =  trim($_GET["id"]);
       // Validate e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 

        {
         $email = mysqli_real_escape_string($conn, $email);
        $id  = mysqli_real_escape_string($conn, $id );
         $sql=mysqli_query($conn,"select * from user where email='$email' and  forgot_password ='$id'"); //Checking Is user Allowed or not 
         $r=mysqli_num_rows($sql);
       if($r==true)
       { 
        
        
        $password = ($_POST["password"]);
        
        $confirmPassword = ($_POST["confirmPassword"]);
        $password = mysqli_real_escape_string($conn,$password);
        $confirmPassword = mysqli_real_escape_string($conn,$confirmPassword);
       
        if($password == $confirmPassword) 
        {
          
            $password = md5($password);
            $sql=mysqli_query($conn,"update user set pass= '$password'  where email= '$email' and forgot_password ='$id' ");
            $success_message = "Password is updated successfully.<br>Now you are redirecting";
            $sql=mysqli_query($conn,"update user set forgot_password = '$token'  where email= '$email' ");//After Updating Password changing id to prevent user
            header("Refresh:6; url=index.php"); //Refresh:6;  redirect in 3 sec
        }
               
           else 
           {
               $error_message = "Failed : <br> Password not updated *(confirm Password Mismatch)";
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
                <?php if(!empty($success_message)) { ?>
                <div class="col-sm-4" style="font-weight: bold;color:green;"><?php echo $success_message ?></div>
                <?php } ?>
                <?php if(!empty($error_message)) { ?>
                <div class="col-sm-4" style="font-weight: bold;color:red;"><?php echo $error_message ?></div>
                <?php } ?>

    <div class="col-sm-4"><?php echo @$err;?></div>
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
