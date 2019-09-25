
<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
if(!isset($_SESSION['admin'])){
  echo 'Please login to view this page!';
  header('Location: login_view.php');
  die();
 }
$q=mysqli_query($conn,"SELECT * from notice ");
$rr=mysqli_num_rows($q);
if(!$rr)
{

echo "<h2 style='color:red'>No any Message found !!!</h2>";
echo( "<button  onclick= \"location.href='index.php?page=add_notice'\">Send New Message</button>");
}
else
{
?>
<h2 style="color:#00FFCC">All Message</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=add_notice">Send New Message</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>User</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['user']."</td>";
echo "<td>".$row['Date']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>