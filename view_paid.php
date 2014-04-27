<?php
//	include ("ck.php");
include ("val.php");
	include ("menu.php");

	include ("cn.php");
	
	?>
<body>
<center>
<h2>
	Paid Voucher Client List	
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
			View
		</td>
		
	</tr>
		
	<?php
	$sr = 1;
	$q ="select distinct name from master_data where ctype='Paid' order by name";
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
		$q1 ="select * from master_data where name='$temp'";
		$r1 = mysql_query($q1);
		while ( $row1 = mysql_fetch_assoc($r1))
		{
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
		<td>
			<a href="view_det_paid.php?cname=<?php echo $row['name'];?>">
				view
			</a>
		</td>
		
	</tr>
	<?php
	$sr = $sr + 1;	
	}
	?>
</table>
</center>
</body>
</html>