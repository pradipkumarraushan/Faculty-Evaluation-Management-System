<?php 
if(!isset($_SESSION["user"])){
  echo 'Please login to view this page!';
  header('Location: login_view.php');
  die();
}
extract($_POST);
if(isset($update))
{
//dob
$dob=$yy."-".$mm."-".$dd;
//branch
$branch=implode(",",$branch);

$query="UPDATE user set name='$n',mobile='$mob',gender='$gen',branch='$branch',dob='$dob',empid='$empid' where email='".$_SESSION['user']."'";


mysqli_query($conn,$query);



$err="<font color='blue'>Profie updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h2 align="center">Update Your Profile</h2>

		<form method="post">
			<table class="table table-bordered">
									<table class="table table-bordered">
	<Tr>
		 <span style="color:red; font-size: 25px">*</span><span style=" font-size: 18px">Indicates required field</span> 
	</Tr>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your Name  <span style="color:red; font-size: 25px">*</span></td>
					<Td><input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n" required/></td>
				</tr>
				<tr>
					<td>Enter Your Email  <span style="color:red;font-size: 25px">*</span></td>
					<Td><input size="30"  type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e" style="border:none" /></td>
				</tr>

				<tr>
					<td>Enter Your Employee Id No. <span style="color:red;font-size: 25px">*</span></td>
					<Td><input size="30"  type="text" readonly="true"  style="border:none"  value="<?php echo $res['empid'];?>"  name="empid"/></td>
				</tr>
				
				
				<tr>
					<td>Enter Your Mobile Number  <span style="color:red;font-size: 25px">*</span></td>
					<Td><input class="form-control" type="text" value="<?php echo $res['mobile'];?>"  name="mob" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Gender  <span style="color:red;font-size: 25px">*</span></td>
					<Td>
				Male <input type="radio" <?php if($res['gender']=="Male"){echo "checked";} ?> name="gen" value="Male" required/>
				Female <input type="radio" <?php if($res['gender']=="Female"){echo "checked";} ?> name="gen" value="Female"/>
					
					</td>
				</tr>
				
				<tr>
					<td>Choose Your Branch  <span style="color:red;font-size: 25px">*</span></td>
					<Td>
					<?php 
					$arrr=explode(",",$res['branch']);
					?>
					
					
					CSE <input value="CSE" <?php if(in_array("CSE",$arrr)){echo "checked";} ?> type="radio" name="branch[]"/>
					ECE <input value="ECE" <?php if(in_array("ECE",$arrr)){echo "checked";} ?> type="radio" name="branch[]"/>
					ISE <input value="ISE" <?php if(in_array("ISE",$arrr)){echo "checked";} ?> type="radio" name="branch[]"/>
					EEE <input value="EEE" <?php if(in_array("EEE",$arrr)){echo "checked";} ?> type="radio" name="branch[]"/>
					MECH <input value="MECH" <?php if(in_array("MECH",$arrr)){echo "checked";} ?> type="radio" name="branch[]"/>
					CIVIL <input value="CIVIL" <?php if(in_array("CIVIL",$arrr)){echo "checked";} ?> type="radio" name="branch[]"/>
					CHEM <input value="CHEM" <?php if(in_array("CHEM",$arrr)){echo "checked";} ?> type="radio" name="branch[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td>Enter Your DOB  <span style="color:red;font-size: 25px">*</span></td>
					<?php 
					$arrr1=explode("-",$res['dob']);
					?>
					<Td>
					<select class="form-control" style="width:100px;float:left" name="yy"  required>
					<option value="">Year</option>
					<?php 
					for($i=1900;$i<=2050;$i++)
					{
					?>
					<option <?php if($arrr1[0]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					
					</select>
					
					<select class="form-control" style="width:100px;float:left" name="mm"  required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					?>
					<option <?php if($arrr1[1]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					}					
					?>
					
					</select>
					
 					
					<select class="form-control" style="width:100px;float:left" name="dd"  required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					?>
					<option <?php if($arrr1[2]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Update My Profile" name="update"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	