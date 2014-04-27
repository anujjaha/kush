<?php

include ("val.php");
	include ("menu.php");

	include ("cn.php");
?>
<head>
	
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
	J("#num").autocomplete("vouch_num.php", {
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
<form action="#" method="post">
<tr>
	<td colspan="2" align="center">
	<br />

		<img src="img/sr.jpg" />
		
	</td>
</tr>
	<tr>
		<td align="right">
			Enter The Voucher Number  :
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
//	include ("ck.php");

	$cname = $_POST['num'];
///	echo $cname;
if ( $cname != NULL )
{

	?>
<body>

<table align="center" border="2">
	<tr>
		<td align="center" colspan="6">
		<h2>
			Voucher Number : <?php echo $cname;?>
		</h2>
		</td>
	</tr>
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
		<td>
			Update
		</td>
	</tr>
	<?php
	$sr = 1;
	$q ="select distinct(vnum) from master_data where vnum='$cname'";
	$r = mysql_query($q);
	?>
	<?php
	while ( $row = mysql_fetch_assoc($r))
	{
	?>
		<tr>
			<td> <?php echo $sr;?> </td>
			<td> <?php echo $row['vnum'];
					$dtemp = $row['vnum'];	
			?> </td>
			<?php
				$q1 ="select * from master_data where vnum='$dtemp' and ctype='Credit'";
//				echo $q1;
				
				$r1 = mysql_query($q1);
				while ( $row1 = mysql_fetch_assoc($r1))
				{
					$date = $row1['date'];
					$gtot = $row1['gtot'];
				}
			?>
			<td> <?php echo $date;?> </td>
			<td> <?php echo $gtot;?> </td>
			<td> <a href="view_vnum.php?vnum=<?php echo $row['vnum'];?>"> View</a> </td>
			<td> <a href="update_rec.php?vnum=<?php echo $row['vnum'];?>"> Update </a> </td>
		</tr>
	<?php
	$sr = $sr + 1;
	}
	?>
	<tr>
		<td colspan="6" align="right">
		<?php
		$total = 0;
		$qtot ="select distinct(vnum) from master_data where name='$cname' and ctype='Credit'";
		$rtot = mysql_query($qtot);
		while( $rowt = mysql_fetch_assoc($rtot))
		{
			$ttemp = $rowt['vnum'];
			//echo $ttemp;
			
			$q2 ="select * from master_data where vnum='$ttemp' and ctype='Credit'";
			$r2 = mysql_query($q2);
				while ( $row2 = mysql_fetch_assoc($r2))
				{
					$total = $total + $row2['gtot'];
				}
			
		}
		echo "Grand Total : " . $total;
		?>
		</td>	
	</tr>
	</table>
</body>
</html>
<?php
}
?>