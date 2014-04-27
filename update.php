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

<link rel="stylesheet" type="text/css" href="css/jkmegamenu.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type='text/javascript' src='js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />

<script type="text/javascript">
var J = jQuery.noConflict();

J().ready(function() {
	J("#num").autocomplete("job_name.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
});
</script> 
<body onLoad="st();">
<table align="center" border="0">
<form action="update.php" method="post">
<tr>
	<td colspan="2" align="center">
	<br />

		<img src="img/sr.jpg" />
		
	</td>
</tr>
	<tr>
		<td align="right">
			Enter The Job Name  :
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
	$q = "select * from master_data where j_name ='$data' order by id desc";
	$r = mysql_query($q);
	//echo $q;
?>
<table align="center" border="2">
	<tr>
		<td style="color:#0066CC; font-size:18px" align="center" colspan="14">
			Job Details By Job Name
		</td>
	</tr>
	<tr>
		<td>
			Update
		</td>
		<td>
			Date
		</td>
		<td>
			Name
		</td>
		<td>
			Mobile
		</td>
		<td>
			Address
		</td>
		<td>
			Job Name
		</td>
		<td>
			Machine
		</td>
		<td>
			Paper Details
		</td>
		<td>
			Cutting
		</td>
		<td>
			Print
		</td>
		<td>
			Lamination
		</td>
		<td align="center">
			 Shits
			<br>
			Pulling
		</td>
		<td>
			Paper By
		</td>
		<td>
			More Details
		</td>
	</tr>
<?php
	while ($row = mysql_fetch_assoc($r))
	{
	/*
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
	*/
	$d_id = $row['name'];
	?>


	
	<!--<tr>
	 	<td colspan="2" align="center">
			<font style="color:#FF0000; font-size:16px; font-weight:bold;">
				Form Number: <?php // echo $data;?>
			</font>
		</td>
	</tr>
		<!--<tr>
			<td align="right">
				Computer Name : 
			</td>
			<td>	
				
			</td>
		</tr>-->
		<tr>
			
			<td>
			<a href="update_data.php?id=<?php echo $row['id'];?>">
				Update
			</a>
			</td>
			<td>
			<?php echo $row['date'];?>
			</td>
			<td>	
				 <?php echo $row['name'];?>
			</td>
			<td>
			 <?php echo $row['txt_num'];?>
			</td>
			<td>
			 <?php echo $row['txt_add'];?>
			</td>
			<td>	
			<?php echo $row['j_name'];?>
			</td>
			<td>	
			 <?php echo $row['m_name'];?>
			</td>
			<td>	
				 <?php echo $row['p_name'];?>
			</td>
			<td>	
			 <?php echo $row['c_size'];?>
			</td>
			<td>	
			 <?php echo $row['print_det'];?>
			</td>
			<td>	
			 <?php echo $row['lami_det'];?>
			</td>
			<td align="center">	
			 <?php echo $row['tot_shet'];?>
			 <br>
			<?php echo $row['p_ling'];?>
			</td>
			<td>	
			 <?php echo $row['paper_by'];?>
			</td>
			<td>	
			 <?php echo $row['more'];?>
			</td>
		</tr>
<?php
}
?>
<tr>
	<td colspan="14" align="right">
		<a href="data_r.php?name=<?php echo $d_id;?>">
		Generate Report
		</a>
	</td>
</tr>		
	</table>
<?php	
	}
?>