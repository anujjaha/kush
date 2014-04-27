<?php
include ("menu.php");
include ("cn.php");
include ("val.php");
?>
<?php
if(isset($_REQUEST['search']))
{
	$name = $_POST['name'];
	$month= $_POST['month'];
	$month .= "-".$_POST['year'];
	
?>
	<table align="center" border="2">
	<tr>
		<td colspan="5" align="center">
			<br><br><br>
			<strong>Client Name : <?php echo $name;?></strong>
			<br> For Month of <?php echo $month;?>
		</td>
	<tr>
	<tr>
		<td>
			Sr Num
		</td>
		<td>
			Voucher Number
		</td>
		<td>
			Date
		</td>
		<td>
			Total Amout
		</td>
		<td>
			Details
		</td>
	</tr>
	<?php
	$total = "";
	$sr=1;
	$query = "SELECT * FROM master_data where name='$name' and month='$month'";
	$run = mysql_query($query);
	while($row = mysql_fetch_assoc($run))
	{
	?>
	<tr>
			<td> <?php echo $sr;?> </td>
			<td> <?php echo $row['vnum'];?>
			<td> <?php echo $row['date'];?> </td>
			<td> <?php echo $row['gtot'];?> </td>
			<td> <a href="view_vnum.php?vnum=<?php echo $row['vnum'];?>"> View</a> </td>
		</tr>
		<?php
		$total = $total + $row['gtot'];
		$sr++;
		}
		?>
	<tr>
	<td colspan="3" align="right">
		Total :
	</td>
	<td>
		<?php echo $total;?>
	</td>
	</tr>
	</table>
<?php
	
}
else
{

?>
<table align="center" border="2">
<form action="#" method="POST">
		<tr>
			<td align="right">
				Client Name :
			</td>
			<td>
			<select name="name" id="name"  onBlur="ajaxFunction()">
				<option> -- Select Name -- </option>
				<?php
				function show_customers()
				{
					include('cn.php');
					$query = "SELECT * FROM master_customers WHERE status = 'Y' order by name";
					$run = mysql_query($query);
					while($row = mysql_fetch_assoc($run))
					{
					?>
					<option> <?php echo $row['name'];?> </option>
					<?php
					}
					
				}
					show_customers();
				?>
			</select>
			<!--<input type="text" name="name" id="name" onBlur="ajaxFunction()" size="50" width="55" >-->
			</td>
			
		</tr>
		<tr>
			<td align="right">
				Select Month :
			</td>
			<td>
				<select name="month">
					<option>Jan</option>
					<option>Feb</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>Aug</option>
					<option>Sept</option>
					<option>Oct</option>
					<option>Nov</option>
					<option>Dec</option>
					
					
				</select>
			</td>
		<tr>
		<tr>
			<td align="right">
				Select Year:
			</td>
			<td>
				<select name="year">
					<option>2013</option>
					<option>2014</option>
					<option>2015</option>
					
					
				</select>
			</td>
		<tr>
		<Tr>
			<td colspan="2" align="center">
				<input type="hidden" name="search" value="true">
				<input type="submit" name="Search" value="Search">
			</td>
		</tr>
		</form>
	</table>
<?php
}
?>