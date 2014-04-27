<?php
//	include ("ck.php");
	include ("val.php");
	include ("menu.php");

	include ("cn.php");
	$vnum = $_POST['vnum'];
	$q = "Update master_data set ctype='Paid' where vnum='$vnum'";
	if(mysql_query($q))
	{
		echo "<center><h1> Your Voucher Paid Succesfully.. </h1></center>";	
	}
	else
	{
		echo "<center><h1> Error Occured </h1></center>";	
	}
?>
