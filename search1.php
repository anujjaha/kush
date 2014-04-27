<?php
//include ("cn.php");
include ("val.php");
include ("menu.php");
include ("cn.php");
?>
<script type="text/javascript">
function st()
{
document.getElementById("num").focus();
}
</script>
<body onload="st();">
<table align="center" border="0">
<form action="search.php" method="post">
<tr>
	<td colspan="2" align="center">
	<br />

		<img src="img/sr.jpg" />
		
	</td>
</tr>
	<tr>
		<td align="right">
			Enter The Order Form Number :
		</td>
		<td>
			<input type="text" name="num" id="num" />
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="Search" value="Search" />
		</td>
	</tr>
</form>
</table>
<br />

<hr />
<?php
	$data = $_POST['num'];
	if ( $data != NULL )
	{
	$q = "select * from master_data where id ='$data'";
	$r = mysql_query($q);
	while ($row = mysql_fetch_assoc($r))
	{
		$p_num = $row['p_num'];
		$date = $row['date'];
		$name = $row['name'];
		$mob = $row['txt_num'];
		$add = $row['txt_add'];
		$job = $row['j_name'];
		$mach = $row['m_name'];
		$pap = $row['p_name'];
		$cs = $row['c_size'];
		$more = $row['more'];
		
	}
	?>
	<br />

	<table align="center" border="2">
	<tr>
		<td style="color:#0066CC; font-size:16px" align="center" colspan="2">
			Job Details By Form Number 
		</td>
	</tr>
	<tr>
	 	<td colspan="2" align="center">
			<font style="color:#FF0000; font-size:16px; font-weight:bold;">
				Form Number: <?php echo $data;?>
			</font>
		</td>
	</tr>
		<tr>
			<td align="right">
				Computer Name : 
			</td>
			<td>	
				<?php echo $p_num;?>
			</td>
		</tr>
		<tr>
			<td align="right">
				Date : 
			</td>
			<td>
			<?php echo $date;?>
			</td>
		</tr>
		<tr>
			<td align="right">
				Client Name :
			</td>
			<td>	
				 <?php echo $name;?>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Contact Number :
			</td>
			<td>
			 <?php echo $mob;?>
			</td>
		</tr>
		<tr>
			<td align="right">
				Address :
			</td>
			<td>
			 <?php echo $add;?>
			</td>
		</tr>
		<tr>
			<td align="right">
				Job Name : 
			</td>
			<td>	
			<?php echo $job;?>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Machine Name :
			</td>
			<td>	
			 <?php echo $mach;?>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Paper Name :
			</td>
			<td>	
				 <?php echo $pap;?>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Cutting Size  :
			</td>
			<td>	
			 <?php echo $cs;?>
			</td>
		</tr>
		
	</table>
<?php	
	}
?>