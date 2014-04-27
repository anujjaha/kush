<?php
include ("menu.php");
include ("cn.php");
include ("val.php");

$cname = $_GET['cname'];

?>
<table align="center" border="2">
<tr>
	<td colspan="9" align="center">
   		Client Name : <?php echo $cname;?>
    </td>
</tr>
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
	$q ="select * from master_pay where name='$cname'";
	$r = mysql_query($q);
	while($row = mysql_fetch_assoc($r))
	{
	?>
	<tr>
		<td>
			<?php echo $sr;?>
		</td>
		<td>
			<?php echo $row['name'];?>
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