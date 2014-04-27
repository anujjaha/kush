<?php
include ("menu.php");
include ("cn.php");
include ("val.php");


?>
<meta HTTP-EQUIV="REFRESH" content="5; url=view.php">
<?php
if ( $jflag == NULL )
{
	$jflag = $_POST['flag'];
}
$a = $_POST['name'];
$b = $_POST['bname'];
$c = $_POST['bbname'];
$d = $_POST['cnum'];
$e = $_POST['cdate'];
$f = $_POST['camt'];
$g = $_POST['month'];

$h = $_POST['type'];

$brnum =$_POST['retailbnum'];
$btnum =$_POST['taxbnum'];
$btype = $_POST['btype'];

if( $_POST['btype'] == 'Tax Invoice')
{
	$bnumsave = $btnum;
}
if( $_POST['btype'] == 'Retailer Invoice')
{
	$bnumsave = $brnum;
}
	
	if ( $jflag == "true")
	{
	$jflag = "false";
	$qr = "Insert into master_pay values ('','$bnumsave','$btype','$a','$h','$b','$c','$d','$e','$f','$g')";
		if( mysql_query($qr))
		{
			$qq = "Update master_data set ctype='Paid' where name='$a' and month='$g'";
			$rr = mysql_query($qq);
			echo "<center>	<h1>	Payment Saved. Just Wait Few Seconds.. </h1></center>";
		}
		else
		{
			echo "<center>	<h1>	Please Try Late Error Occur. </h1></center>";	
		}
		
	}



?>