<?php
include('menu.php');
include('cn.php');
if(isset($_GET['cus_name']))
{
	$cus_name = $_GET['cus_name'];
	//print $cus_name;
	?>
	<table align="center" border="1" style="margin-top:30px;">
		<tr>
		<td width="5%">
			Sr No.
		</td>
		<td width="15%">
			Bill Date
		</td>
		<td width="25%">
			Bill Number
		</td>
		<td width="25%">
			Bill Amount
		</td>
		<td width="35%">
			Voucher List
		</td>
		</tr>
	<?php
	$sr = 1;
	$query = "SELECT * FROM voucher_pay Where cus_name = '$cus_name' order by p_id";	
	$run = mysql_query($query);
	while($row = mysql_fetch_assoc($run))
	{
	?>
	<tr>
		<td width="5%">
			<?php echo $sr;?>
		</td>
		<td width="15%">
			<?php echo $row['bill_date'];?>
		</td>
		<td width="25%">
			<?php echo $row['bill_num'];?>
		</td>
		<td width="25%">
			<?php echo $row['bill_amount'];?>
		</td>
		<td width="35%">
			<?php echo $row['v_nums'];?>
		</td>
		</tr>
	<?php
	$sr++;
	}
}
else
{
$p_id = $_REQUEST['p_id'];
?>
<?php
$query = "SELECT * FROM voucher_pay where p_id = '$p_id'";
$run = mysql_query($query);
$allData = mysql_fetch_assoc($run);
?>
<table align="center" border="2" width="90%" style="margin-top:35px;">
<tr>
	<td colspan="5">
	<center>
		Customer Name : <?php echo $allData['cus_name'];?>
	</center>
	<a href="view_bill_ref.php?cus_name=<?php echo $allData['cus_name'];?>">
	View All
	</a>
	</td>
</tr>
<tr>
	<td width="5%">
		Sr No.
	</td>
	<td width="15%">
		Bill Date
	</td>
	<td width="25%">
		Bill Number
	</td>
	<td width="25%">
		Bill Amount
	</td>
	<td width="35%">
		Voucher List
	</td>
</tr>


<tr>
	<td>
		1
	</td>
	<td>
		<?php echo $allData['bill_date'];?>
	</td>
	<td>
		<?php echo $allData['bill_num'];?>
	</td>
	<td>
		<?php echo $allData['bill_amount'];?>
	</td>
	<td>
		<?php echo $allData['v_nums'];?>
	</td>
</tr>
</table>
<?php
}
?>