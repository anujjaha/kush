<?php

include ('val.php');
include ('cn.php');
include ('menu.php');
$td =  date('d-m-Y');
//echo $td;
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />
<link rel="stylesheet" type="text/css" href="css/jkmegamenu.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type='text/javascript' src='js/jquery.autocomplete.js'></script>
<script type="text/javascript">
var J = jQuery.noConflict();

J().ready(function() {
	J("#name").autocomplete("get_name.php", {
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
<script type="text/javascript">
	function data(tk)
	{
	//	var ch = document.getElementById("t").value;
	//var test = document.getElementById("t").value;
	
	//	alert(tk);
	if (tk == "date")
	{



var d = new Date();

var curr_date = d.getDate();

var curr_month = d.getMonth();

var curr_year = d.getFullYear();

curr_month = curr_month + 1;
if ( curr_month < 10 )
{
	curr_month = "0" + curr_month;
}
//alert( curr_month);


		document.getElementById("apdate").value = curr_date + "-" + curr_month + "-" + curr_year;

	}
	else
	{
		document.getElementById("apdate").value="";
	}
	}
</script>
<body alink="#00FF66" link="#00CC00">
<table align="center" border="0">

<form action="report.php" method="post">
	<?php
	if ( $_POST['apdate'] == NULL )
	{
	?>
	<!--<tr>
		<td>
			Enter The Appropriate Value : <input type="text" name="apdate" value="<?php // echo date('d-m-Y');?>">
		</td>
	</tr>-->
	<tr>
		<td align="center">
		<br>

			<img src="img/rp.jpg">
		</td>
	</tr>
	<tr>
		<td align="center">
			
			<input type="radio"  name="t" value="date"  onBlur="data(this.value);" checked="checked" >Date
			
		</td>
	</tr>
	
	<tr>
		<td align="center">
			Enter The Appropriate Value : <input type="text" name="apdate" id="apdate" value="<?php echo date('d-m-Y');?>" >
		</td>
	</tr>
	
	
	<tr>	
		<td align="center">
			<input type="submit" name="Report" value="Report" onClick="download();">
			<input type="reset" name="Reset" value="Reset">
		</td>
	</tr>
	<tr>
		<td>
		<br>
		<br>

		<a href="report_name.php">
		<center>
			Report By Client Name 
		</center>
	</a>
		</td>
	</tr>
	
	<?php
	}
	else
	{
	?>
		<a href="report.php" style="text-decoration:none; font-size:28px; color:#33CC33">
			<center>
			Reset Parameter
			</center>
		
		</a>
	<?php
	}
	?>
</table>

<?php
/*
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	* Developed By : www.smartcoderszone.com [ Amit Kumar Paliwal ] *
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
*/
if ( $_POST['apdate'] != NULL  )
{
	
$apdate = $_POST['apdate'];

?>
<h1 align="center"><a href="javascript:void(0);" onClick="download();">Download Excel Report</a></h1>
<?php

//require_once("config.php");
require_once("excelwriter.class.php");

$excel=new ExcelWriter("report.xls");
if($excel==false)	
echo $excel->error;

$myArr=array("S.No.","Client Name","Date","Month","Mobile Number","Voucher Number","Reciever Name","Total");
$excel->writeLine($myArr);

$f_name = $_POST['t'];
if ( $f_name == "date")
{
$qry=mysql_query("select * from master_data where date = '$apdate'");
}

if ( $f_name == "m_name")
{
$qry=mysql_query("select * from master_data where m_name = '$apdate'");
}
if ( $f_name == "j_name")
{
$qry=mysql_query("select * from master_data where j_name = '$apdate'");
}


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

/*

if ( $_POST['name'] != NULL  )
{
	
$apdate = $_POST['name'];

?>
<h1 align="center">
<a href="javascript:void(0);" onClick="download();">Download Excel Report</a></h1>
<?php

//require_once("config.php");
require_once("excelwriter.class.php");

$excel=new ExcelWriter("report.xls");
if($excel==false)	
echo $excel->error;

$myArr=array("S.No.","Client Name","Date","Month","Mobile Number","Voucher Number","Reciever Name","Total");
$excel->writeLine($myArr);

$f_name = $_POST['t'];
if ( $f_name == "date")
{
$qry=mysql_query("select * from master_data where name = '$apdate'");
}

if ( $f_name == "m_name")
{
$qry=mysql_query("select * from master_data where name = '$apdate'");
}
if ( $f_name == "j_name")
{
$qry=mysql_query("select * from master_data where name = '$apdate'");
}


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
*/
?>
</body>
</html>