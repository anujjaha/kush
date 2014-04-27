<?php
//	include ("ck.php");
include ("val.php");
include ("menu.php");
	include ("cn.php");
	?>
<body>
<center>
<h2>
	Payment Pending Client List	
</h2>
<table align="center" border="2">
	<tr>
		<td>
			Sr Num
		</td>
		<td>
			Client Name
		</td>
		<td>
			Contact Number
		</td>
		<td>
			Month
		</td>
		<td>
			Due Amount
		</td>
        <td>
			View
		</td>
		<td>
			Pay
		</td>
	</tr>
		
	<?php
$grandTotal = 0;
$sr = 1;
	$q ="select distinct name from master_data where ctype='Credit' order by name";
	//print $q;
	$r = mysql_query($q);
	while ( $row = mysql_fetch_assoc($r))
	{
	?>
	<tr>
		<td>
			<?php echo $sr;?>
		</td>
		<td>
			<?php echo $row['name'];?>
			<?php $temp = $row['name'];?>
		</td>
		<?php
		$total = 0;
		$q1 ="select * from master_data where name='$temp' and ctype = 'Credit' order by name"; 
	$r1 = mysql_query($q1);
	while ( $row1 = mysql_fetch_assoc($r1))
		{
			$total = $total + $row1['dis'];
			$mob = $row1['mob'];
			$month = $row1['month'];
		}
	?>
		<td>
			<?php echo $mob;?>
		</td>
		<td>
			<?php echo $month;?>
		</td>
        <td align="right">
			<?php echo $total;?>
		</td>
		<td>
			<a href="view_det.php?cname=<?php echo $row['name'];?>">
				view
			</a>
		</td>
		<td>
			<a href="view_pay.php?cname=<?php echo $row['name'];?>&month=<?php echo $month;?>">
				Pay
			</a>
		</td>
	</tr>
	<?php
	$grandTotal = $grandTotal + $total;
	$sr = $sr + 1;	
	}
	?>
	<tr>
		<td colspan="5" align="right">
			<?php echo $grandTotal;?>
		</td>
		<td colspan="2">
			&nbsp;
		</td>
	</tr>
</table>
</center>
</body>
</html>