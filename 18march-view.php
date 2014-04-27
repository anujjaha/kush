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
			View
		</td>
		<td>
			Pay
		</td>
	</tr>
		
	<?php
	$sr = 1;
	$q ="select distinct name from master_data where ctype='Credit'";
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
	$sr = $sr + 1;	
	}
	?>
</table>
</center>
</body>
</html>