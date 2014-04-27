<?php
include('cn.php');
include("menu.php");
$id = $_REQUEST['id'];
function allData($id)
{
	$query = "SELECT * FROM master_data M ,master_customers C where 
		 M.name = C.name
		 and
		 C.id = '$id'
		 order by M.id
		";
	$data = mysql_fetch_assoc(mysql_query($query));
	return $data;
}
if(isset($_REQUEST['confirm']) or $_REQUEST['confirm'] == "true")
{
	$name = $_POST['cname'];
	$mob = $_POST['mob'];
	$id = $_REQUEST['id'];
	$oname = $_POST['oldname'];
	$query = "UPDATE master_customers 
		 SET
		 name = '$name'
		 WHERE id = '$id'
		 ";
	mysql_query($query);

	$query1 = "UPDATE master_data
		  SET
		  name = '$name'
		  WHERE
		  name = '$oname'
		  ";
	
	$query2 = "UPDATE master_data
		  SET
		  mob = '$mob'
		  WHERE
		  name = '$name'
		  ";
	mysql_query($query1);

	mysql_query($query2);
	echo "<center><h1>Record Updated Succesufully </h1></center>";
}
else
{
$data = allData($id);
?>
<table align="center" border="2" style="margin-top:20px;"> 
<form action="#" method="POST">
	<tr>
		<td align="right">
			Customer Name :
		</td>
		<td>
			<input type="text" name="cname" value="<?php echo $data['name']; ?>">
		</td>
	</tr>
	<tr>
		<td align="right">
			Contact Number :
		</td>
		<td>
			<input type="text" name="mob" value="<?php echo $data['mob']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="hidden" name="confirm" value="true">
			<input type="hidden" name="oldname" value="<?php echo $data['name']; ?>">
			<input type="hidden" name="mid" value="<?php echo $data['id']; ?>">
			<input type="submit" name="Update" value="Update">
			<input type="Reset" name="reset" value="Reset">
		</td>	
	</tr>
</form>	
</table>
<?php
}
?>