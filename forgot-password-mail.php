<?php
require_once 'vendor/autoload.php';
define("PROJECT_NAME", "http://localhost/project/");
//define("PROJECT_NAME", "https://sdmcet.ml/");
$mail = new PHPMailer\PHPMailer\PHPMailer;
//Enable SMTP debug mode
$mail->SMTPDebug = 0;
//set PHPMailer to use SMTP
$mail->isSMTP();
//set host name
$mail->Host = "Enter Host name ";
// set this true if SMTP host requires authentication to send mail
$mail->SMTPAuth = true;
//Provide username & password
$mail->Username = "Enter ypur Email Id";
$mail->Password = "Enter Your Password";
$mail->SMTPSecure = "tls";
$mail->Port = 587;// Enter  port number 

$mail->From = "Sender email id";
$mail->FromName = "Faculty Evaluation Management System [Team]";
$mail->addAddress($_POST["user_email"]);
$mail->isHTML(true);

$mail->Subject = "Forgot Password Recovery";
$mail->Body="<div>"."<h2>Faculty Evaluation Management System</h2>"."<p>Hello,</p>".$user[0]["name"]."<br><br><p>Click here to recover your password<br>
    <a href='".PROJECT_NAME."index.php?option=reset_password&email=".$user[0]["email"]."&id=".$user[0]["forgot_password"]." '> ".PROJECT_NAME.
        "index.php?option=reset_password&email=".$user[0]["email"]."&id=".$user[0]["forgot_password"]."</a><br><br></p>Regards<br> Admin.</div>";

        if(!$mail->send()) {
            $error_message = "Mailer Error : ". $mail->ErrorInfo;
        } else {
            $success_message = "Check your email inbox , and click the link in the email you received to reset your password. 
            Note :- [Sometimes you will get email in Spam Folder] .";

             header("Refresh:10; url=index.php");
        }
        


?>