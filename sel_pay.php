<?php
include ('cn.php');
include ('menu.php');


$pay_vnum = $_POST['pay'];
foreach( $pay_vnum as $key => $value)
{
	$mval = $mval . "'".$value."',";
}
$tlen = strlen($mval);
$start = "0";
$end = $tlen -1;

$pay_myvnum = substr($mval,0,$end);


	
	$mquery = "UPDATE master_data
		  set 
		  ctype = 'Paid'
		  WHERE vnum IN ($pay_myvnum)";
		  
	if(mysql_query($mquery))
	{
		echo "<br><br><center><h2> The Seleted Vouchers has been Paid Succesfully </h2></center>";
	}
	else
	{
		echo "<br><br><center><h2> Error Occur During Paid of Selected Vouchers Please Try Again.</h2></center>";
	}
?>
