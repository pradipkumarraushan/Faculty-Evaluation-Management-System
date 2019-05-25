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
$mail->addAddress($_POST["e"]); // TO email id (Receiver)
$mail->isHTML(true);

$mail->Subject = "Registration Successful";
$mail->Body="<div>"."<h2>Faculty Evaluation Management System</h2>"."<p>Hello,</p>".$user[0]["name"]."<br><h3>Your Registration is Successful</h3><br><p>Click here to Login<br>

    <a href=' ".PROJECT_NAME."index.php?option=login'>".PROJECT_NAME."index.php?option=login</a><br><br></p>Regards<br> Admin.</div>";

        if(!$mail->send()) {
            $error_message = "Mailer Error : ". $mail->ErrorInfo;
        } else {
            $success_message = "A Confirmation email has been sent to you. @ ".$user[0]["email"]." ";

             header("Refresh:10; url=index.php");//Refresh:6;
        }
        


?>