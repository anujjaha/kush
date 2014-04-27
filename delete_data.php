<?php
include ("val.php");
	include ("menu.php");

	include ("cn.php");
	$vnum = $_GET['vnum'];
	$q = "delete from master_data where vnum = '$vnum'";
	if(mysql_query($q))
	{
		header('location:view.php');	
	}
	
?>