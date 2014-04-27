<?php
include ("menu.php");
include ("cn.php");
include ("val.php");
$vnum = $_POST['vnum'];

?>

<style>
		td{ font-size:10px; font-family:Arial, Helvetica, sans-serif;}
</style>
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<?php


$sec = $_POST['key_c'];
$u_sec = $_POST['key'];

if ( $sec == $u_sec )
{
$month = date('M');
$a1 = $_POST['name'];
$a2 = $_POST['date'];
$a3 = trim($_POST['mob']);
$a4 = $_POST['vnum'];
$a5 = trim($_POST['email']);
$a6 = trim($_POST['rname']);
$a7 = trim($_POST['add']);
$a8 = $_POST['ctype'];
$a9 = $_POST['p1'];
$a10 = $_POST['q1'];
$a11 = $_POST['pp1'];
$a12 = $_POST['t1'];
$a13 = $_POST['p2'];
$a14 = $_POST['q2'];
$a15 = $_POST['pp2'];
$a16 = $_POST['t2'];
$a17 = $_POST['p3'];
$a18 = $_POST['q3'];
$a19 = $_POST['pp3'];
$a20 = $_POST['t3'];
$a21 = $_POST['p4'];
$a22 = $_POST['q4'];
$a23 = $_POST['pp4'];
$a24 = $_POST['t4'];
$a25 = $_POST['p5'];
$a26 = $_POST['q5'];
$a27 = $_POST['pp5'];
$a28 = $_POST['t5'];
$a29 = $_POST['p6'];
$a30 = $_POST['q6'];
$a31 = $_POST['pp6'];
$a32 = $_POST['t6'];
$a33 = $_POST['p7'];
$a34 = $_POST['q7'];
$a35 = $_POST['pp7'];
$a36 = $_POST['t7'];
$a37 = $_POST['p8'];
$a38 = $_POST['q8'];
$a39 = $_POST['pp8'];
$a40 = $_POST['t8'];
$a41 = $_POST['p9'];
$a42 = $_POST['q9'];
$a43 = $_POST['pp9'];
$a44 = $_POST['t9'];
$a45 = $_POST['p10'];
$a46 = $_POST['q10'];
$a47 = $_POST['pp10'];
$a48 = $_POST['t10'];
$a49 = $_POST['tax'];
$a50 = $_POST['cour'];
$a51 = $_POST['gtot'];


$b1 = $_POST['d1'];
$b2 = $_POST['d2'];
$b3 = $_POST['d3'];
$b4 = $_POST['d4'];
$b5 = $_POST['d5'];
$b6 = $_POST['d6'];
$b7 = $_POST['d7'];
$b8 = $_POST['d8'];
$b9 = $_POST['d9'];
$b10 = $_POST['d10'];



$s1= $_POST['s1'];
$j1= $_POST['j1'];

$s2= $_POST['s2'];
$j2= $_POST['j2'];

$s3= $_POST['s3'];
$j3= $_POST['j3'];

$s4= $_POST['s4'];
$j4= $_POST['j4'];

$s5= $_POST['s5'];
$j5= $_POST['j5'];
$s6= $_POST['s6'];
$j6= $_POST['j6'];
$s7= $_POST['s7'];
$j7= $_POST['j7'];
$s8= $_POST['s8'];
$j8= $_POST['j8'];
$s9= $_POST['s9'];
$j9= $_POST['j9'];
$s10= $_POST['s10'];
$j10= $_POST['j10'];



$e1 = $_POST['mtot'];
$e2 = $_POST['msg'];
$e3 = $_POST['user'];
$e4 = $_POST['vat'];
$e5 = $_POST['gtot'];


if(trim($_POST['tin']) == "")
{
	$tin="";
	$tin_tax ="Retailer Invoice";
}
else
{
	$tin = $_POST['tin'];
	$tin_tax ="Tax Invoice           &nbsp;&nbsp;&nbsp; Tin Number :";
}






/*
while ( strlen($g) < 35)
{
	$g = $g . "  ";
//	  $g;
}
*/
if ( $_POST['p1'] != NULL )
{
$pp1 = $_POST['p1'];
$qp1 ="Insert into master_service values('','$pp1')";
$rp1 = mysql_query($qp1);
}

if ( $_POST['p2'] != NULL )
{
$pp2 = $_POST['p2'];
$qp2 ="Insert into master_service values('','$pp2')";
$rp2 = mysql_query($qp2);
}

if ( $_POST['p3'] != NULL )
{
$pp3 = $_POST['p3'];
$qp3 ="Insert into master_service values('','$pp3')";
$rp3 = mysql_query($qp3);
}

if ( $_POST['p4'] != NULL )
{
$pp4 = $_POST['p4'];
$qp4 ="Insert into master_service values('','$pp4')";
$rp4 = mysql_query($qp4);
}
if ( $_POST['p5'] != NULL )
{
$pp5 = $_POST['p5'];
$qp5 ="Insert into master_service values('','$pp5')";
$rp5 = mysql_query($qp5);
}

if ( $_POST['p6'] != NULL )
{
$pp6 = $_POST['p6'];
$qp6 ="Insert into master_service values('','$pp6')";
$rp6 = mysql_query($qp6);
}
if ( $_POST['p7'] != NULL )
{
$pp7 = $_POST['p7'];
$qp7 ="Insert into master_service values('','$pp7')";
$rp7 = mysql_query($qp7);
}
if ( $_POST['p8'] != NULL )
{
$pp8 = $_POST['p8'];
$qp8 ="Insert into master_service values('','$pp8')";
$rp8 = mysql_query($qp8);
}
if ( $_POST['p9'] != NULL )
{
$pp9 = $_POST['p9'];
$qp9 ="Insert into master_service values('','$pp9')";
$rp9 = mysql_query($qp9);
}
if ( $_POST['p10'] != NULL )
{
$pp10 = $_POST['p10'];
$qp10 ="Insert into master_service values('','$pp10')";
$rp10 = mysql_query($qp10);
}

//comment is started from here

/*
$qr = "Insert into master_data values ('','$a1','$a2','$month','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$a41','$a42','$a43','$a44','$a45','$a46','$a47','$a48','$a49','$a50','$a51','$b1','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9','$b10','$e5','$e2','$e3','$e4')";
*/
$qr = "update master_data set name='$a1', p1='$a9' , q1='$a10' , pp1='$a11' , t1 ='$a12' , p2='$a13' , q2='$a14' , pp2='$a15' , t2 ='$a16' , p3='$a17' , q3='$a18' , pp3='$a19' , t3 ='$a20' , p4='$a21' , q4='$a22' , pp4='$a23' , t4='$a24' , p5='$a25' , q5='$a26' , pp5='$a27' , t5='$a28' , p6='$a29' , q6='$a30' , pp6='$a31' , t6='$a32' , p7='$a33' , q7='$a34' , pp7='$a35' , t7='$a36' ,  p8='$a37' , q8='$a38' , pp8='$a39' , t8='$a40' , p9='$a41' , q9='$a42' , pp9='$a43' , t9='$a44' , p10='$a45' , q10='$a46' , pp10='$a47' , t10='$a48' , tax='$a49', cour='$a50' , gtot='$a51' ,dis='$a51',vat='$e2' , user='$e4' where vnum='$vnum'";

	//echo $qr;
if ( mysql_query($qr))
{
  "<center>	<h1>		Data Saved Succesfully	</h1></center>";
  
  //virtual end

?>
<?php
/*
while ( strlen($a1) < 35)
{
	$a1 = $a1 . "  ";
} */


/*
while ( strlen($a9) < 31)
{
	$a9 = $a9 . "  ";
}
//  strlen($a9);
//  "<br>";
//  $a9;
//  "<br>";
while ( strlen($a13) < 31)
{
	$a13 = $a13 . "  ";
}
//  strlen($a13);
//  "<br>";
//  $a13;
//  "<br>";
while ( strlen($a17) < 31)
{
	$a17 = $a17 . "  ";
}
//  strlen($a17);
//  "<br>";
//  $a17;

while ( strlen($a21) < 31)
{
	$a21 = $a21 . "  ";
}
//  strlen($a21);
//  "<br>";
//  $a21;

while ( strlen($a25) < 31)
{
	$a25 = $a25 . "  ";
}
//  strlen($a25);
//  "<br>";
//  $a25;

while ( strlen($a29) < 31)
{
	$a29 = $a29 . "  ";
}
//  strlen($a29);
//  "<br>";
//  $a29;

while ( strlen($a33) < 31)
{
	$a33 = $a33 . "  ";
}
//  strlen($a33);
//  "<br>";
//  $a33;

while ( strlen($a37) < 31)
{
	$a37 = $a37 . "  ";
}
//  strlen($a37);
//  "<br>";
//  $a37;

while ( strlen($a41) < 31)
{
	$a41 = $a41 . "  ";
}
//  strlen($a41);
//  "<br>";
//  $a41;


while ( strlen($a45) < 31)
{
	$a45 = $a45 . "  ";
}
//  strlen($a45);
//  "<br>";
//  $a45;

?>

	<center>
	<h2>
<?php
	if ( $a16 == "0")
	{
		$a16 = "%20";
	}
	if ( $a20 == "0")
	{
		$a20 = "%20";
	}
	if ( $a24 == "0")
	{
		$a24 = "%20";
	}
	if ( $a28 == "0")
	{
		$a28 = "%20";
	}
	if ( $a32 == "0")
	{
		$a32 = "%20";
	}
	if ( $a36 == "0")
	{
		$a36 = "%20";
	}
	if ( $a40 == "0")
	{
		$a40 = "%20";
	}
	if ( $a44 == "0")
	{
		$a44 = "%20";
	}
	if ( $a48 == "0")
	{
		$a48 = "%20";
	}*/
?>

<?php

//Final Status

//header("location:print.php?a1=$a1&a2=$a2&a3=$a3&a4=$a4&a5=$a5&a6=$a6&a7=$a7&a8=$a8&a9=$a9&a10=$a10&a11=$a11&a12=$a12&a13=$a13&a14=$a14&a15=$a15&a16=$a16&a17=$a17&a18=$a18&a19=$a19&a20=$a20&a21=$a21&a22=$a22&a23=$a23&a24=$a24&a25=$a25&a26=$a26&a27=$a27&a28=$a28&a29= $a29&a30=$a30&a31=$a31&a32=$a32&a33=$a33&a34=$a34&a35=    $a35 &a36=    $a36 &a37=    $a37 &a38=    $a38 &a39=    $a39 &a40=    $a40 &a41=    $a41 &a42=    $a42 &a43=    $a43 &a44=    $a44 &a45=    $a45 &a46=    $a46 &a47=    $a47 &a48=    $a48 &a49=    $a49 &a50=    $a50 &a51=    $a51 &e1=    $e1 &e2=    $e2 &e3=    $e3 &e4=    $e4 &e5=    $e5 ");

//End of Final Status
/*

<a href="print.php?a1=<?php   echo $a1;?>&a2=<?php  echo $a2;?>&a3=<?php echo $a3;?>&a4=<?php echo  $a4;?>&a5=<?php  echo  $a5;?>&a6=<?php echo   $a6;?>&a7=<?php echo  $a7;?>&a8=<?php echo  $a8;?>&a9=<?php  echo $a9;?>&a10=<?php echo  $a10;?>&a11=<?php  echo $a11;?>&a12=<?php echo  $a12;?>&a13=<?php echo  $a13;?>&a14=<?php echo  $a14;?>&a15=<?php echo  $a15;?>&a16=<?php echo  $a16;?>&a17=<?php echo  $a17;?>&a18=<?php echo  $a18;?>&a19=<?php echo  $a19;?>&a20=<?php echo  $a20;?>&a21=<?php  echo $a21;?>&a22=<?php  echo $a22;?>&a23=<?php echo  $a23;?>&a24=<?php echo  $a24;?>&a25=<?php echo  $a25;?>&a26=<?php echo  $a26;?>&a27=<?php   echo $a27;?>&a28=<?php  echo $a28;?>&a29=<?php echo  $a29;?>&a30=<?php  echo $a30;?>&a31=<?php echo   $a31;?>&a32=<?php  echo $a32;?>&a33=<?php  echo $a33;?>&a34=<?php echo   $a34;?>&a35=<?php echo  $a35;?>&a36=<?php  echo $a36;?>&a37=<?php  echo $a37;?>&a38=<?php  echo $a38;?>&a39=<?php  echo $a39;?>&a40=<?php echo $a40;?>&a41=<?php  echo $a41;?>&a42=<?php  echo $a42;?>&a43=<?php echo  $a43;?>&a44=<?php echo  $a44;?>&a45=<?php  echo $a45;?>&a46=<?php  echo $a46;?>&a47=<?php  echo $a47;?>&a48=<?php  echo $a48;?>&a49=<?php  echo $a49;?>&a50=<?php echo  $a50;?>&a51=<?php  echo $a51;?>&b1=<?php  echo $b1;?>&b2=<?php   $b2;?>&b3=<?php  echo $b3;?>&b4=<?php  echo $b4;?>&b5=<?php  echo $b5;?>&b6=<?php echo  $b6;?>&b7=<?php echo  $b7;?>&b8=<?php echo  $b8;?>&b9=<?php  echo $b9;?>&b10=<?php  echo $b10;?>&e1=<?php   echo $e1;?>&e2=<?php  echo $e2;?>&e3=<?php  echo $e3;?>&e4=<?php echo  $e4;?>&e5=<?php   echo $e5;?>&tin=<?php echo $tin;?>&tin_tax=<?php echo $tin_tax;?>"  target="_blank">

<br />
<br />

		<h1>
		Click here to take Print
		</h1>
		</a> 
	</h2>
</center>
<?php
/*

header("location:print.php?a1=$a1&a2=$a2&a3=$a3&a4=$a4&a5=$a5&a6=$a6&a7=$a7&a8=$a8&a9=$a9&a10=$a10&a11=$a11&a12=$a12&a13=$a13&a14=$a14&a15=$a15&a16=$a16&a17=$a17&a18=$a18&a19=$a19&a20=$a20&a21=$a21&a22=$a22&a23=$a23&a24=$a24&a25=$a25&a26=$a26&a27=$a27&a28=$a28&a29= $a29&a30=$a30&a31=$a31&a32=$a32&a33=$a33&a34=$a34;?>&a35=<?php   $a35;?>&a36=<?php   $a36;?>&a37=<?php   $a37;?>&a38=<?php   $a38;?>&a39=<?php   $a39;?>&a40=<?php   $a40;?>&a41=<?php   $a41;?>&a42=<?php   $a42;?>&a43=<?php   $a43;?>&a44=<?php   $a44;?>&a45=<?php   $a45;?>&a46=<?php   $a46;?>&a47=<?php   $a47;?>&a48=<?php   $a48;?>&a49=<?php   $a49;?>&a50=<?php   $a50;?>&a51=<?php   $a51;?>&b1=<?php   $b1;?>&b2=<?php   $b2;?>&b3=<?php   $b3;?>&b4=<?php   $b4;?>&b5=<?php   $b5;?>&b6=<?php   $b6;?>&b7=<?php   $b7;?>&b8=<?php   $b8;?>&b9=<?php   $b9;?>&b10=<?php   $b10;?>&e1=<?php   $e1;?>&e2=<?php   $e2;?>&e3=<?php   $e3;?>&e4=<?php   $e4;?>&e5=<?php   $e5;?>");

*/
/*
		<a href="print.php?a1=<?php   $a1;?>&a2=<?php   $a2;?>&a3=<?php   $a3;?>&a4=<?php   $a4;?>&a5=<?php   $a5;?>&a6=<?php   $a6;?>&a7=<?php   $a7;?>&a8=<?php   $a8;?>&a9=<?php   $a9;?>&a10=<?php   $a10;?>&a11=<?php   $a11;?>&a12=<?php   $a12;?>&a13=<?php   $a13;?>&a14=<?php   $a14;?>&a15=<?php   $a15;?>&a16=<?php   $a16;?>&a17=<?php   $a17;?>&a18=<?php   $a18;?>&a19=<?php   $a19;?>&a20=<?php   $a20;?>&a21=<?php   $a21;?>&a22=<?php   $a22;?>&a23=<?php   $a23;?>&a24=<?php   $a24;?>&a25=<?php   $a25;?>&a26=<?php   $a26;?>&a27=<?php   $a27;?>&a28=<?php   $a28;?>&a29=<?php   $a29;?>&a30=<?php   $a30;?>&a31=<?php   $a31;?>&a32=<?php   $a32;?>&a33=<?php   $a33;?>&a34=<?php   $a34;?>&a35=<?php   $a35;?>&a36=<?php   $a36;?>&a37=<?php   $a37;?>&a38=<?php   $a38;?>&a39=<?php   $a39;?>&a40=<?php   $a40;?>&a41=<?php   $a41;?>&a42=<?php   $a42;?>&a43=<?php   $a43;?>&a44=<?php   $a44;?>&a45=<?php   $a45;?>&a46=<?php   $a46;?>&a47=<?php   $a47;?>&a48=<?php   $a48;?>&a49=<?php   $a49;?>&a50=<?php   $a50;?>&a51=<?php   $a51;?>&b1=<?php   $b1;?>&b2=<?php   $b2;?>&b3=<?php   $b3;?>&b4=<?php   $b4;?>&b5=<?php   $b5;?>&b6=<?php   $b6;?>&b7=<?php   $b7;?>&b8=<?php   $b8;?>&b9=<?php   $b9;?>&b10=<?php   $b10;?>&e1=<?php   $e1;?>&e2=<?php   $e2;?>&e3=<?php   $e3;?>&e4=<?php   $e4;?>&e5=<?php   $e5;?>"  target="_blank">
		
		Click here to take Print
		</a> 
	</h2>
*/
?>
<center>
<input type="button" onclick="printDiv('printableArea')" value="Take a Print" />
<div id="printableArea" style="height:8.3in; width:5.8in">
<br />
<br /><br />
      <table align="center" border="2" width="60%">
      	<tr>
        	<td align="center" colspan="2">
            	<?php //echo $tin_tax . " &nbsp;&nbsp;" .$tin; ?>
               Delivery Voucher
            </td>
        </tr>
        <tr>
           <td width="50%">
            	Name : <?php echo $a1;?>
            </td>
            <td>
            	Tin : <?php echo $myShowtin;?>
            </td>
        </tr>
        <tr>
        	<td>
            	Date : <?php echo $a2;?>
            </td>
            <td>
            	Number : <?php echo $a4;?>
            </td>
        </tr>
        <tr>
        	<td>
            	Mobile : <?php echo $a3;?>
            </td>
            <td>
            	Reciver Name : <?php echo $a6;?>
            </td>
        </tr>
        <tr>
        	<td colspan="2" align="center">
            	<table align="center"  border="2">
                	<tr>
                    	<td align="center">Description</td>
                        <td align="center">
                        	Q1
                        </td>
                        <td align="center">
                        	Q2
                        </td>
                        <td align="center">
                        	Quantity
                        </td>
                        <td align="center">Rate</td>
                        <td align="center">
                        	Total
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	<?php echo $a9;?>
                        </td>
                        <td>
                        	<?php echo $s1;?>
                        </td>
                        <td>
                        	<?php echo $j1;?>
                        </td>
                        <td align="right">
                        	<?php echo $a10;?>
                        </td>
                        <td align="right">
                        	<?php echo $a11;?>
                        </td>
                        <td align="right">
                        	<?php echo $a12;?>
                        </td>
                    </tr>
                    
                    <tr>
                    	<td>
                        	<?php echo $a13;?>
                        </td>
                         <td>
                        	<?php echo $s2;?>
                        </td>
                        <td>
                        	<?php echo $j2;?>
                        </td>
                        <td align="right">
                        	<?php echo $a14;?>
                        </td>
                        <td align="right">
                        	<?php echo $a15;?>
                        </td>
                        <td align="right">
                        	<?php echo $a16;?>
                        </td>
                    </tr>
                    
                    <tr>
                    	<td>
                        	<?php echo $a17;?>
                        </td>
                         <td>
                        	<?php echo $s3;?>
                        </td>
                        <td>
                        	<?php echo $j3;?>
                        </td>
                        <td align="right">
                        	<?php echo $a18;?>
                        </td>
                        <td align="right">
                        	<?php echo $a19;?>
                        </td>
                        <td align="right">
                        	<?php echo $a20;?>
                        </td>
                    </tr>
                    
                    <tr>
                    	<td>
                        	<?php echo $a21;?>
                        </td>
                         <td>
                        	<?php echo $s4;?>
                        </td>
                        <td>
                        	<?php echo $j4;?>
                        </td>
                        <td align="right">
                        	<?php echo $a22;?>
                        </td>
                        <td align="right">
                        	<?php echo $a23;?>
                        </td>
                        <td align="right">
                        	<?php echo $a24;?>
                        </td>
                    </tr>
                    
                     <tr>
                    	<td>
                        	<?php echo $a25;?>
                        </td>
                         <td>
                        	<?php echo $s5;?>
                        </td>
                        <td>
                        	<?php echo $j5;?>
                        </td>
                        <td align="right">
                        	<?php echo $a26;?>
                        </td>
                        <td align="right">
                        	<?php echo $a27;?>
                        </td>
                        <td align="right">
                        	<?php echo $a28;?>
                        </td>
                    </tr>
                    
                    <tr>
                    	<td>
                        	<?php echo $a29;?>
                        </td>
                         <td>
                        	<?php echo $s6;?>
                        </td>
                        <td>
                        	<?php echo $j6;?>
                        </td>
                        <td align="right">
                        	<?php echo $a30;?>
                        </td>
                        <td align="right">
                        	<?php echo $a31;?>
                        </td>
                        <td align="right">
                        	<?php echo $a32;?>
                        </td>
                    </tr>
                    
                    <tr>
                    	<td>
                        	<?php echo $a33;?>
                        </td>
                         <td>
                        	<?php echo $s7;?>
                        </td>
                        <td>
                        	<?php echo $j7;?>
                        </td>
                        <td align="right">
                        	<?php echo $a34;?>
                        </td>
                        <td align="right">
                        	<?php echo $a35;?>
                        </td>
                        <td align="right">
                        	<?php echo $a36;?>
                        </td>
                    </tr>
                    
                     <tr>
                    	<td>
                        	<?php echo $a37;?>
                        </td>
                         <td>
                        	<?php echo $s8;?>
                        </td>
                        <td>
                        	<?php echo $j8;?>
                        </td>
                        <td align="right">
                        	<?php echo $a38;?>
                        </td>
                        <td align="right">
                        	<?php echo $a39;?>
                        </td>
                        <td align="right">
                        	<?php echo $a40;?>
                        </td>
                    </tr>
                    
                     <tr>
                    	<td>
                        	<?php echo $a41;?>
                        </td>
                         <td>
                        	<?php echo $s9;?>
                        </td>
                        <td>
                        	<?php echo $j9;?>
                        </td>
                        <td align="right">
                        	<?php echo $a42;?>
                        </td>
                        <td align="right">
                        	<?php echo $a43;?>
                        </td>
                        <td align="right">
                        	<?php echo $a44;?>
                        </td>
                    </tr>
                    
                    <tr>
                    	<td>
                        	<?php echo $a45;?>
                        </td>
                         <td>
                        	<?php echo $s10;?>
                        </td>
                        <td>
                        	<?php echo $j10;?>
                        </td>
                        <td align="right">
                        	<?php echo $a46;?>
                        </td>
                        <td align="right">
                        	<?php echo $a47;?>
                        </td>
                        <td align="right">
                        	<?php echo $a48;?>
                        </td>
                    </tr>
                    
                    
                    <tr>
                    	<td colspan="5" align="right">
                       	    Total :
                     </td>
                        <td align="right">
						<?php echo $e1;?>
                        </td>
                    </tr>
                    
                    <tr>
                    	<td colspan="5" align="right">
                       Trasnportation :
					   </td>
                       <td align="right">
					   <?php echo $a50;?>
                        </td>
                    </tr>
                    
                    
                    
                    <tr>
                    	<td colspan="5" align="right">
                        	Grand Total :
                          </td>
						  <td align="right">
						  <?php echo $a51;?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
        	<td colspan="2">
            	Remarks : <?php echo $e2;?>
            </td>
        </tr>
        <tr>
        	<td align="center">
            Reciever Signature 
            <br />
            &nbsp;
            
            </td>
            <td align="right">
            For Cybera.
            </td>
        </tr>
      </table>
</div>


<!-- Div and table will end here-->
<?php
	}

else
{
echo "<center>	<h1>	Error Occured	 Please Try Again Data Not Stored. </h1></center>";
}

}
?>