<?php
require_once 'vendor/autoload.php';
define("PROJECT_NAME", "http://localhost/Faculty-Evaluation-Management-System/");
$mail = new PHPMailer\PHPMailer\PHPMailer;
//Enable SMTP debug mode
$mail->SMTPDebug = 0;
//set PHPMailer to use SMTP
$mail->isSMTP(); // commented
//set host name
$mail->Host = "Enter Your Host Address";// EDIT
// set this true if SMTP host requires authentication to send mail
$mail->SMTPAuth = true;
//Provide username & password
$mail->Username = "Enter Your Email ID";//EDIT
$mail->Password = "Enter Your Password";//EDIT
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->From = "Enter Your Email ID";//EDIT
$mail->FromName = "Faculty Evaluation Management System [Team]";//EDIT
$mail->addAddress($_POST["user_email"]);
$mail->isHTML(true);

$mail->Subject = "Forgot Password Recovery";
$body = "<div>"."<h2>Faculty Evaluation Management System</h2>"."<p>Hello,</p>".$user[0]["name"]."<br><br><p>Click here to recover your password<br>
    <a href='".PROJECT_NAME."index.php?option=reset_password&email=".$user[0]["email"]."&id=".$user[0]["forgot_password"]." '> ".PROJECT_NAME.
        "index.php?option=reset_password&email=".$user[0]["email"]."&id=".$user[0]["forgot_password"]."</a><br><br></p></div>";
$body .= '<table id="zs-output-sig" style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse; width: 550px;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<table style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<table style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<table style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<table style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; font-weight: normal; color: #282828;"><strong style="font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; color:	#FF0000; display: inline;">Thanks & Regards,</strong></td>
</tr>
<tr>
<td style="border-collapse: collapse; padding-bottom: 7px; height: 7px;">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td>
<table style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="92">
<table style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="border-collapse: collapse; line-height: 0px;"><img src="https://avatars1.githubusercontent.com/u/44359568?s=460&v=4/-/resize/105x120/img.png" width="105" height="120" border="0" /></td>
</tr>
</tbody>
</table>
</td>
<td style="border-collapse: collapse; padding-right: 7px; width: 7px;" width="7">&nbsp;</td>
<td>
<table style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<table style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<table style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 25.0px; font-style: normal; line-height: 32px; font-weight: normal; color: #282828;"><span style="font-family: Calibri, Helvetica, sans-serif; font-size: 30.0px; font-style: normal; line-height: 32px; font-weight: normal; color: #282828; display: inline;">PRADIP KUMAR RAUSHAN</span></td>
</tr>
<tr>
<td style="border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 21.0px; font-style: normal; line-height: 23px; font-weight: bold; color: #282828;"><span style="font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 23px; font-weight: bold; color: #282828; display: inline;">CSE - SDM College Of Engineering And Technology.</span></td>
</tr>
<tr>
<td style="border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; font-weight: normal; color: #282828;"><span style="font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; font-weight: normal; color: #282828; display: inline;">( Full Stack Developer ).</span></td>
</tr>
<tr>
<td style="border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; font-weight: normal; color: #282828;">


	<span style="font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; font-weight: normal; color: #282828; display: inline;">



<a style="text-decoration: none;" href="http://pradip.epizy.com">pradip.epizy.com</a></span>
</td>
</tr>
<tr>
<td style="border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; font-weight: normal; color: #282828;"><span style="font-family: Calibri, Helvetica, sans-serif; font-size: 14.0px; font-style: normal; line-height: 16px; font-weight: normal; color: #5e4036; display: inline;">Mobile:</span> <span style="font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; font-weight: normal; color: #282828; display: inline;">+919035867192</span></td>
</tr>
<tr>
<td style="border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; font-weight: normal; color: #282828;"><span style="font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; font-weight: normal; color: #5e4036; display: inline;">Address:</span> <span style="font-family: Calibri, Helvetica, sans-serif; font-size: 15.0px; font-style: normal; line-height: 17px; font-weight: normal; color: #282828; display: inline;">Karnataka,India.</span></td>
</tr>
<tr>
<td style="border-collapse: collapse; padding-bottom: 3px; height: 3px;">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
<td style="border-collapse: collapse; padding-right: 8px; width: 8px;">&nbsp;</td>
<td style="border-collapse: collapse; background-color: #000000; width: 3px;">&nbsp;</td>
<td style="border-collapse: collapse; padding-right: 8px; width: 8px;">&nbsp;</td>
<td>
<table style="font-family: Arial,Helvetica,sans-serif; line-height: 0px; font-size: 1px; padding: 0px; border-spacing: 0px; margin: 0px; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td><a style="font-size: 0px; line-height: 0px;"  title="Facebook" href="https://www.facebook.com/pradipkumarraushan" rel="nofollow noopener"><img src="https://gimm.io/assets/social/24/171616/04facebook.gif" alt="facebook" width="24" height="24" border="0" /></a></td>
</tr>
<tr>
<td style="border-collapse: collapse; padding-bottom: 5px; height: 5px;">&nbsp;</td>
</tr>
<tr>
<td><a style="font-size: 0px; line-height: 0px;"  title="Github" href="https://github.com/pradipkumarraushan" rel="nofollow noopener"><img src="https://gimm.io/assets/social/24/000000/04github.gif" alt="github" width="24" height="24" border="0" /></a></td>
</tr>
<tr>
<td style="border-collapse: collapse; padding-bottom: 5px; height: 5px;">&nbsp;</td>
</tr>
<tr>
<td><a style="font-size: 0px; line-height: 0px;"  title="LinkedIn" href="https://www.linkedin.com/in/pradipkumarraushan/" rel="nofollow noopener"><img src="https://gimm.io/assets/social/24/000000/04linkedin.gif" alt="linkedin" width="24" height="24" border="0" /></a></td>
</tr>
<tr>
<td style="border-collapse: collapse; padding-bottom: 5px; height: 5px;">&nbsp;</td>
</tr>
<tr>
<td><a style="font-size: 0px; line-height: 0px;" title="Email" href="mailto:admin@pradip.epizy.com" rel="nofollow"><img src="https://ucarecdn.com/33ed08dc-a3e0-451f-afaf-4091eb842ffb/-/crop/426x280/236,119/-/preview/" alt="https://ucarecdn.com/33ed08dc-a3e0-451f-afaf-4091eb842ffb/-/crop/426x280/236,119/-/preview/" width="26" height="17" border="0" /></a></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="border-collapse: collapse; padding-bottom: 8px; height: 8px;">&nbsp;</td>
</tr>
<tr>
<td style="border-collapse: collapse;">&nbsp;</td>
</tr>
</tbody>
</table>';

$mail->MsgHTML($body);


        if(!$mail->send()) {
            $error_message = "Mailer Error : ". $mail->ErrorInfo;
        } else {
            $success_message = "Check your email inbox , and click the link in the email you received to reset your password. 
            Note :- [Sometimes you will get email in Spam Folder] .";

             header("Refresh:10; url=index.php");
        }
        


?>
