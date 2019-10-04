<?php
session_start();
if (isset($_GET['email'], $_GET['id']))
{
    include('connection.php');
    $token = bin2hex(random_bytes(16));
    $email = trim($_GET['email']);
    $id    = trim($_GET['id']);
    $email = mysqli_real_escape_string($conn, $email);
    $id    = mysqli_real_escape_string($conn, $id);
    $sql   = mysqli_query($conn, "SELECT email_verified FROM user WHERE email='$email' AND  email_verified = '0'");
    $r     = mysqli_num_rows($sql);
    if ($r > 0)
    {
        
        $sql = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND  forgot_password ='$id'");
        $r   = mysqli_num_rows($sql);
        if ($r > 0)
        {
            
            $sql             = mysqli_query($conn, "UPDATE user SET email_verified = '1'  WHERE email= '$email' AND forgot_password ='$id' ");
            $success_message = "Email Verification Successful";
            //After Verification Email changing id to prevent user
            $sql             = mysqli_query($conn, "UPDATE user SET forgot_password = '$token'  WHERE email= '$email' ");
            
            date_default_timezone_set("Asia/Kolkata");
            $login_time = date('Y-m-d H:i:s');
            mysqli_query($conn, "UPDATE user SET last_login = '$login_time' WHERE email ='$email'");
            $_SESSION['user'] = $email;
            echo '<SCRIPT type="text/javascript">
                    alert("Email Verification Successful.\n Now you are redirecting to Dashboard");
                    window.location.replace("https://localhost/Faculty-Evaluation-Management-System/user/index.php");
                    </SCRIPT>';
        }
        else
        {
            echo '<script language="javascript">
                 alert("Email Verification Failed / Link Expired !!");
                 </script>';
            
        }
    }
    else
    {
        echo '<script language="javascript">
                 alert("Your Email is already verified");
                 </script>';
        
    }
}
else
{
    echo '<script language="javascript">
                 alert("Email Verification Failed");
                 </script>';
    
}
?>