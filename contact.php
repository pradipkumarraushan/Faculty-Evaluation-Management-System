<?php 
require_once 'connection.php';
extract($_POST);
if (isset($_POST['save'])) 
{
if ( $Name =="" || $email =="" || $Mobile =="" || $subject =="" || $msg =="") 
 {
	$error_message="Fill all the fileds first";	
  }
	else
	{
require_once 'vendor/autoload.php';
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
$mail->Username = "Enter your Email Id";
$mail->Password = "Enter Your Password";
$mail->SMTPSecure = "tls";
$mail->Port = 587;// Enter  port number 

$mail->From = "Sender email id";

$mail->FromName = "Faculty Evaluation Management System [Team]";
$mail->addAddress("email address "); // Enter email id
$mail->isHTML(true);

$mail->Subject = "Query/Issue";
$mail->Body="  
            <html>
                <head></head>
            <body>

           <div>"."<h2>Faculty Evaluation Management System</h2>

           "."<b><p>Mail By,</p>Name : ".$_POST['Name']." </b> <br>
           "."<b><p>Email Id : ".$_POST['email']." </b> <br>
           "."<b><p>Contact Number : </b> ".$_POST['Mobile']." 
           "."<b><p>Subject : </b>".$_POST['subject']." 
           "."<h4><p>Message : </h4>".$_POST['msg']." 


    <br><br></p>Regards<br> Admin.
      </div>
      </body>";

        if(!$mail->send()) {
            $error_message = "Mailer Error : ". $mail->ErrorInfo;
        } else {
            $success_message = "Thank You  @ ".$_POST['Name']." ";

             header("Refresh:7; url=index.php");//Refresh:6;
        }
        
 }
}
?>


<h2>Quick Contact</h2>
<form method="post">
 
 
	<div class="row">
		<div class="col-md-8">
		<div class="row">
		<div class="col-sm-4"></div>
		<?php if(!empty($success_message)) { ?>
                <div class="col-sm-4" style="font-weight: bold;color:green;"><?php echo $success_message ?></div>
                <?php } ?>
                <?php if(!empty($error_message)) { ?>
                <div class="col-sm-4" style="font-weight: bold;color:red;"><?php echo $error_message ?></div>
                <?php } ?>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Your Name</div>
		<div class="col-sm-5">
		<input type="text" name="Name" class="form-control" required="true" /><br></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Your Email</div>
		<div class="col-sm-5">
		<input type="email" name="email" class="form-control"  required="true"/><br></div>
	</div>

	<div class="row">
		<div class="col-sm-4">Enter Your Contact Number</div>
		<div class="col-sm-5">
		<input type="Number" name="Mobile" class="form-control" required="true" /><br></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Your Subject</div>
		<div class="col-sm-5">
		<input type="text" name="subject" class="form-control"  required="true"/><br></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Your Message</div>
		<div class="col-sm-5">
		<textarea name="msg" class="form-control"  required="true"/> </textarea> </div>
	</div>
	
	<div class="row" style="margin-top:10px ;margin-left:90px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input  type="submit" value="Send Query" name="save" class="btn btn-success"/>
		
		</div>
	</div>
		
		</div>
		<div class="col-md-4">
		<h2>Contact us</h2>
		
		<b>Name:</b> Faculty Evaluation Management System [Team] <br/>
		<b>Mobile:</b> +919035867192<br/>
		<b>Email:</b><a href="#">dharwadsdmcet@gmail.com</a><br/>
		<b>Website:</b> <a href="">Faculty Evaluation Management System</a>
		</div>
	</div>
	
	
</form>	