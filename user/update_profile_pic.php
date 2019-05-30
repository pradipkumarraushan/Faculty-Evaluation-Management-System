<?php 
if(!isset($_SESSION["user"])){
  echo 'Please login to view this page!';
  header('Location: login_view.php');
  die();
}
$user= $_SESSION['user'];
extract($_POST);
if(isset($update))
{
$img=$_FILES['f']['name'];
echo $img; 

$query="UPDATE user set image='$img' where email='".$_SESSION['user']."'";
mysqli_query($conn,$query);

move_uploaded_file($_FILES['f']['tmp_name'],"../images/$user/".$_FILES['f']['name']);

$err="<font color='blue'>Profie Pic updated successfully !!</font>";

}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h2 align="center">Update Your Image</h2>

		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Choose Your pic</td>
					<Td><input class="form-control"  type="file" name="f"/></td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Update My Profile Pic" name="update"/>
				
					</td>
				</tr>
			</table>
		</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>