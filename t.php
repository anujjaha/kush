<?php

include ('val.php');
include ('cn.php');
include ('menu.php');
?>
<script language="javascript">
function download()
{
	window.location='report.xls';
}
</script>
<a href="report.php" style="text-decoration:none; font-size:28px; color:#33CC33">
			<center>
			Reset Parameter
			</center>
		
		</a>
	<?php
	?>
</table>

<?php
/*
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	* Developed By : www.smartcoderszone.com [ Amit Kumar Paliwal ] *
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
*/
if ( $_POST['name'] != NULL  )
{
	
$apdate = $_POST['name'];//echo $apdate;


?>

<h1 align="center">
<a href="javascript:void(0);" onClick="download();">
Download Excel Report
</a>
</h1>
<?php

//require_once("config.php");
require_once("excelwriter.class.php");

$excel=new ExcelWriter("report.xls");
if($excel==false)	
echo $excel->error;

$myArr=array("S.No.","Client Name","Date","Month","Mobile Number","Voucher Number","Reciever Name","Total");
$excel->writeLine($myArr);

$qry=mysql_query("select * from master_data where name = '$apdate'");



//echo $qry;
if($qry!=false)
{
	$i=1;
	while($res=mysql_fetch_array($qry))
	{
		$myArr=array($i,$res['name'],$res['date'],$res['month'],$res['mob'],$res['vnum'],$res['rname'],$res['dis']);
		$excel->writeLine($myArr);
		$i++;
	}
}

}
?>