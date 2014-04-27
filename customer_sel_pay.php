<?php
include ('cn.php');
include ('menu.php');
if(isset($_REQUEST['op']))
{
	$pay_vnum = $_POST['vlist'];
	$pay_vnum = explode(',',$pay_vnum);
	foreach( $pay_vnum as $key => $value)
{
	$mval = $mval . "'".$value."',";
}
$tlen = strlen($mval);
$start = "0";
$end = $tlen -1;

$pay_myvnum = substr($mval,0,$end);
$billNum = $_POST['billnum'];
$billDate = $_POST['billdate'];
$billAmt = $_POST['billamt'];
$vlist = $_POST['vlist'];
$cusname = $_POST['cusname'];

$td = date('d-m-y');
$savePayment =  "INSERT INTO voucher_pay
		 (p_id,cus_name,bill_num,bill_date,bill_amount,v_nums,date)		
		 VALUES
		 ('',
		 '$cusname',
		 '$billNum',
		 '$billDate',
		 '$billAmt',
		 '$vlist',
		 '$td'
		 )
		";
		

mysql_query($savePayment);
$payId = mysql_insert_id();
//print $payId;
echo "<br><br>";	
//print $pay_myvnum;
$mquery = "UPDATE master_data
		  set 
		  ctype = 'Paid-$payId'
		  WHERE vnum IN ($pay_myvnum)";
mysql_query($mquery);
?>
<h1> Payment Saved </h1>
<?php
}
else
{
$pay_vnum = $_POST['pay'];
$vnums = implode(",",$pay_vnum);

foreach( $pay_vnum as $key => $value)
{
	$mval = $mval . "'".$value."',";
}
$tlen = strlen($mval);
$start = "0";
$end = $tlen -1;
$pay_myvnum = substr($mval,0,$end);
?>
<table  align="Center" border="2">
	<tr>
		<td>Sr No.</td>
		<td>Voucher Number</td>
		<td>Amount</td>
	</tr>
<?php
$total;
foreach($pay_vnum as $key => $value)
{
	$query = "SELECT * FROM master_data where vnum = '$value'";
	$run = mysql_query($query);
	while($row = mysql_fetch_assoc($run))
	{
	$total = $total + $row['gtot'];
	?>
	<tr>
		<td><?php echo ++$key;?></td>
		<td><?php echo $row['vnum'];?></td>
		<td><?php echo $row['gtot'];?></td>
	</tr>
	<?php	
	}
}
?>
<tr>
	<td colspan="2" align="right">
		Total :
	</td>
	<td>
		<?php echo $total;?>
	</td>
</tr>
</table>

<table align="center" border="2">
<form action="#" method="POST">
	<tr>	
		<td align="right">
			Bill Date:
		</td>
		<td>
			<input type="text" name="billdate" value="<?php echo date('d-m-y');?>">
		</td>
	</tr>
	<tr>	
		<td align="right">
			Bill Number :
		</td>
		<td>
			<input type="text" name="billnum">
		</td>
	</tr>
	<tr>	
		<td align="right">
			Bill Amount :
		</td>
		<td>
			<input type="text" name="billamt" value="<?php echo $total;?>">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="hidden" name="vlist" value="<?php echo $vnums;?>">
			<input type="hidden" name="cusname" value="<?php echo $_POST['cusname'];?>">
			<input type="hidden" name="op" value="true">
			<input type="submit" name="pay" value="Pay">
			<input type="reset" name="reset" value="Reset">
		</td>
	</tr>
</form>	
</table>
<?php
/*
foreach( $pay_vnum as $key => $value)
{
	$mval = $mval . "'".$value."',";
}
$tlen = strlen($mval);
$start = "0";
$end = $tlen -1;

$pay_myvnum = substr($mval,0,$end);

print $pay_myvnum;
exit;
*/
}
?>