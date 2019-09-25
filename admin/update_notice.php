<?php 
if(!isset($_SESSION['admin'])){
  echo 'Please login to view this page!';
  header('Location: login_view.php');
  die();
}
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"UPDATE notice set subject='$sub',Description='$details' where notice_id='".$_GET['notice_id']."'");
$err="<font color='blue'>Message updated </font>";

}

//select old notice 

$q=mysqli_query($conn,"SELECT * from notice where notice_id='".$_GET['notice_id']."'");
$res=mysqli_fetch_array($q);

?>
<h2>Update Message</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" value="<?php echo $res['subject']; ?>" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"><?php echo $res['Description']; ?></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Message" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	