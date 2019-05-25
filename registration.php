<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
     $token = bin2hex(random_bytes(17));

     $n = mysqli_real_escape_string($conn, $n);
     $empid = mysqli_real_escape_string($conn, $empid);
     $p = mysqli_real_escape_string($conn, $p);
     $mob = mysqli_real_escape_string($conn, $mob);
     
     
      if($n =="" || $e =="" || $empid =="" || $p =="" || $mob =="" || $branch =="" || $_FILES['image']['name'] =="" || $yy."-".$mm."-".$dd =="" )
	{
	$error_message="Fill all the fileds first";	
	}
	else
	{
	
    
   //if (preg_match("/^[a-zA-Z .]*$/",$n))  //Only letters and white space allowed for Name
   if (preg_match("/^[a-zA-Z][a-zA-Z .]*$/",$n))
   {
    

// Validate e-mail
if (filter_var($e, FILTER_VALIDATE_EMAIL)) 

{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$error_message = "This Email Id already exists";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//Branch
$branch=implode(",",$branch);

//image
$imageName=$_FILES['image']['name'];


//encrypt your password
$pass=md5($p);


                   date_default_timezone_set("Asia/Kolkata");
	              $signup_time=date('Y-m-d H:i:s');
                     //mysqli_query($conn,"UPDATE user SET last_login = '$signup_time' WHERE email ='$e'");
 
$query="insert into user values('','$n','$e','$empid','$pass','$mob','$gen','$branch','$imageName','$dob','blocked','$token','$signup_time')";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['image']['tmp_name'],"images/$e/".$_FILES['image']['name']);


$success ="<font color='blue'>Your Registration is successful !!</font>";

$query=mysqli_query($conn,"SELECT name, email  FROM user WHERE email = '$e'");
$user=mysqli_fetch_all($query,MYSQLI_BOTH);
 require_once ("registration-success-mail.php");
}

}
else
{
$error_message ="Invalid Email Id Format !!";
}

}

else
{
    $error_message = "Only letters ,Dots and white space allowed for Name"; 
}
   


}

}
?>
<h2>Registration Form</h2>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
						<table class="table table-bordered">
	<Tr>
		 <span style="color:red; font-size: 25px">*</span><span style=" font-size: 18px">Indicates required field</span> 
	</Tr>
	   
	<Tr>
		<Td colspan="2">


        <?php if(!empty($success_message)) { ?><div style="font-weight: bold;color:green;"><?php echo $success_message ?> </div><?php } ?>
    <?php if(isset($error_message)) { ?> <div style="font-weight: bold;color:red;"><?php echo $error_message; ?></div> <?php } ?>

			<?php echo @$success;?>
				




			</Td>
	</Tr>
				
				<tr>
					<td>Enter Your Name  <span style="color:red; font-size: 25px">*</span></td>
					<Td><input  type="text" placeholder="Enter Your Full Name" pattern="^[a-zA-Z][a-zA-Z .]*$" title="Only letters , Dots and white space allowed for Name" class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Enter Your Email  <span style="color:red;font-size: 25px">*</span></td>
					<Td><input type="email"  class="form-control" placeholder="Enter Your Email Id" name="e" required/></td>
				</tr>

				<tr>
					<td>Enter Your Employee Id No. <span style="color:red;font-size: 25px">*</span></td>
					<Td><input type="text"  class="form-control" placeholder="Enter Your Employee Id No." name="empid" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password  <span style="color:red;font-size: 25px">*</span></td>
					<Td><input type="password"  class="form-control" placeholder="Enter Your Password" name="p" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile Number  <span style="color:red;font-size: 25px">*</span></td>
					<Td><input  class="form-control" type="number" placeholder="Enter Your Mobile Number Without Country Code" min ="1000000000" max="9999999999" name="mob" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Gender  <span style="color:red;font-size: 25px">*</span></td>
					<Td>
				Male <input type="radio" name="gen" value="Male" required/>
				Female <input type="radio" name="gen" value="Female"/>
					
					</td>
				</tr>
				
				<tr>
					<td>Choose Your Branch  <span style="color:red;font-size: 25px">*</span></td>
					<Td>
					CSE <input value="CSE" type="radio" name="branch[]" required="true" />
					ECE <input value="ECE" type="radio" name="branch[]"/>
					EEE <input value="EEE" type="radio" name="branch[]"/>
					ISE <input value="ISE" type="radio" name="branch[]"/>
					MECH <input value="MECH" type="radio" name="branch[]"/>
					CIVIL <input value="CIVIL" type="radio" name="branch[]"/>
					CHEM <input value="CHEM" type="radio" name="branch[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td>Upload  Your Image  <span style="color:red;font-size: 25px">*</span> </td>
					<Td><input class="form-control" type="file"  id="img" name="image" onchange="validateImage()" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your DOB  <span style="color:red;font-size: 25px">*</span></td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1940;$i<=2018;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Register" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
<style type="text/css">
	
</style>


<!-- Give and ID to this field and bind it with the javascript function. -->
<!-- Bind the function onchange event -->



<script type="text/javascript">
function validateImage() {
    var formData = new FormData();

    var file = document.getElementById("img").files[0];

    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png") {
        alert('Please select a valid image file');
        document.getElementById("img").value = '';
        return false;
    }
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("img").value = '';
        return false;
    }
    return true;
}
</script>

	</body>
</html>