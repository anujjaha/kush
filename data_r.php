<?php
session_start();
include ('val.php');
include ('cn.php');
include ('menu.php');

?>
<html>
<head>
<script language="javascript">
function download()
{
	window.location='report.xls';
}
</script>

<title>
	Maheetee.com Report Station
</title>
</head>

<body alink="#00FF66" link="#00CC00">
<table align="center" border="0">

<form action="report.php" method="post">
	
		<a href="report.php" style="text-decoration:none; font-size:28px; color:#33CC33">
			<center>
			Reset Parameter
			</center>
		
		</a>
	


<?php
/*
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	* Developed By : www.smartcoderszone.com [ Amit Kumar Paliwal ] *
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
*/
if ( $_GET['name'] != NULL )
{
	
$apdate = $_GET['name'];

?>
<h1 align="center"><a href="javascript:void(0);" onClick="download();">Download Excel Report</a></h1>
<?php

//require_once("config.php");
require_once("excelwriter.class.php");

$excel=new ExcelWriter("report.xls");
if($excel==false)	
echo $excel->error;

$myArr=array("S.No.","Form Number","Executive Name","Date","Client Name","Contact Number","Address","Job Name","Machine Name","Paper Details","Cutting Size","Print Details","Lamination Details","Total Sheets","Pulling","Paper By","More Details");
$excel->writeLine($myArr);

$qry=mysql_query("select * from master_data where name = '$apdate'");



//echo $qry;
if($qry!=false)
{
	$i=1;
	while($res=mysql_fetch_array($qry))
	{
		$myArr=array($i,$res['id'],$res['p_num'],$res['date'],$res['name'],$res['txt_num'],$res['txt_add'],$res['j_name'],$res['m_name'],$res['p_name'],$res['c_size'],$res['print_det'],$res['lami_det'],$res['tot_shet'],$res['p_ling'],$res['paper_by'],$res['more']);
		$excel->writeLine($myArr);
		$i++;
	}
}

}
?>
</body>
</html>