<?php 
if(!isset($_SESSION['admin'])){
  echo 'Please login to view this page!';
  header('Location: login_view.php');
  die();
}
$q=mysqli_query($conn,"select * from user ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>


<script language="JavaScript">
// Code For Searching
var TRange=null;

function findString (str) {
 if (parseInt(navigator.appVersion)<4) return;
 var strFound;
 if (window.find) {

  // CODE FOR BROWSERS THAT SUPPORT window.find

  strFound=self.find(str);
  if (!strFound) {
   strFound=self.find(str,0,1);
   while (self.find(str,0,1)) continue;
  }
 }
 else if (navigator.appName.indexOf("Microsoft")!=-1) {

  // EXPLORER-SPECIFIC CODE

  if (TRange!=null) {
   TRange.collapse(false);
   strFound=TRange.findText(str);
   if (strFound) TRange.select();
  }
  if (TRange==null || strFound==0) {
   TRange=self.document.body.createTextRange();
   strFound=TRange.findText(str);
   if (strFound) TRange.select();
  }
 }
 else if (navigator.appName=="Opera") {
  alert ("Opera browsers not supported, sorry...")
  return;
 }
 if (!strFound) alert ("String '"+str+"' not found!")
 return;
}
//End Of Searching Code
</script>



<form style="text-align: center;" action="javascript:void();" onsubmit="if(this.t1.value!='')parent.findString(this.t1.value);return(false);">
	<input style="border-width: 3px ; border-color: black; "  type="text" id="t1" name="t1" placeholder="Enter Text To Find "   size="35">
	<button type="submit" value="Search" class="btn btn-info">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
</form> <br>




<h2 style="color:#00FFCC">All Users</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>User's Name</th>
		<th>User's Photo</th>
		<th>Email</th>
		<th>Branch</th>
		<th>Mobile</th>

		<th>Gender</th>
		<th>Last Login</th>
		<th>Delete</th>

	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{
	
echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['name']."</td>";

 echo  "<td>" .'<img  style="border-radius:50px" src="../images/'.$row['email'].'/'.$row['image'].'" width="100" height="100" alt="not found"/>'  ."</td>" ;

echo "<td>".$row['email']."</td>";
echo "<td>".$row['branch']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['last_login']."</td>";
?>

<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>
	<?php 

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>