<?php
include ("menu.php");
include ("cn.php");
include ("val.php");
?>
<table align="center" border="2">
	<tr>
	<td>
		Sr No.
	</td>
		<td align="center">
			Client Name
		</td>
		<td align="center">
			Payment Type
		</td>
		
		<td align="center">
			Bank Name
		</td>
		
		<td align="center">
			Bank Branch
		</td>
		
		<td align="center">
			Cheque Number
		</td>
		
		<td align="center">
			Cheque Date
		</td>
		
		<td align="center">
			Amount
		</td>
		
		<td align="center">
			Month
		</td>
	</tr>
	
	<?php
	$sr =1;
	$q ="select * from master_pay";
	$r = mysql_query($q);
	while($row = mysql_fetch_assoc($r))
	{
	?>
	<tr>
		<td>
			<?php echo $sr;?>
		</td>
		<td>
			<a href="cledger.php?cname=<?php echo $row['name'];?>">
			<?php echo $row['name'];?>
            </a>
		</td>
		<td>
			<?php echo $row['ptype'];?>
		</td>
		
		<td>
			<?php if($row['bname'] != ""){echo $row['bname'];}else{echo "-";}?>
		</td>
		
		<td>
			<?php if($row['bbname'] != ""){echo $row['bbname'];}else{echo "-";}?>
		</td>
		
		<td>
			<?php if($row['cnum'] != ""){echo $row['cnum'];}else{echo "-";}?>
		</td>
		
		<td>
			<?php if($row['cdate'] != ""){echo $row['cdate'];}else{echo "-";}?>
		</td>
		
		<td>
			<?php echo $row['camt'];?>
		</td>
		
		<td>
			<?php echo $row['mon'];?>
		</td>
	</tr>
	<?php
	$sr = $sr +1;}
	?>
</table>