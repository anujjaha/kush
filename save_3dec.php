<?php
include ("menu.php");
include ("cn.php");
include ("val.php");
?>
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


$e1 = $_POST['mtot'];
$e2 = $_POST['msg'];
$e3 = $_POST['user'];
$e4 = $_POST['vat'];
$e5 = $_POST['gtot'];








/*
while ( strlen($g) < 35)
{
	$g = $g . "  ";
//	echo $g;
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


$qr = "Insert into master_data values ('','$a1','$a2','$month','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$a41','$a42','$a43','$a44','$a45','$a46','$a47','$a48','$a49','$a50','$a51','$b1','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9','$b10','$e5','$e2','$e3','$e4')";

if ( mysql_query($qr))
{
echo "<center>	<h1>		Data Saved Succesfully	</h1></center>";
?>
<?php
/*
while ( strlen($a1) < 35)
{
	$a1 = $a1 . "  ";
}*/
while ( strlen($a9) < 31)
{
	$a9 = $a9 . "  ";
}
//echo strlen($a9);
//echo "<br>";
//echo $a9;
//echo "<br>";
while ( strlen($a13) < 31)
{
	$a13 = $a13 . "  ";
}
//echo strlen($a13);
//echo "<br>";
//echo $a13;
//echo "<br>";
while ( strlen($a17) < 31)
{
	$a17 = $a17 . "  ";
}
//echo strlen($a17);
//echo "<br>";
//echo $a17;

while ( strlen($a21) < 31)
{
	$a21 = $a21 . "  ";
}
//echo strlen($a21);
//echo "<br>";
//echo $a21;

while ( strlen($a25) < 31)
{
	$a25 = $a25 . "  ";
}
//echo strlen($a25);
//echo "<br>";
//echo $a25;

while ( strlen($a29) < 31)
{
	$a29 = $a29 . "  ";
}
//echo strlen($a29);
//echo "<br>";
//echo $a29;

while ( strlen($a33) < 31)
{
	$a33 = $a33 . "  ";
}
//echo strlen($a33);
//echo "<br>";
//echo $a33;

while ( strlen($a37) < 31)
{
	$a37 = $a37 . "  ";
}
//echo strlen($a37);
//echo "<br>";
//echo $a37;

while ( strlen($a41) < 31)
{
	$a41 = $a41 . "  ";
}
//echo strlen($a41);
//echo "<br>";
//echo $a41;


while ( strlen($a45) < 31)
{
	$a45 = $a45 . "  ";
}
//echo strlen($a45);
//echo "<br>";
//echo $a45;

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
	}
?>
<?php
header("location:print.php?a1=<?php echo $a1;?>&a2=<?php echo $a2;?>&a3=<?php echo $a3;?>&a4=<?php echo $a4;?>&a5=<?php echo $a5;?>&a6=<?php echo $a6;?>&a7=<?php echo $a7;?>&a8=<?php echo $a8;?>&a9=<?php echo $a9;?>&a10=<?php echo $a10;?>&a11=<?php echo $a11;?>&a12=<?php echo $a12;?>&a13=<?php echo $a13;?>&a14=<?php echo $a14;?>&a15=<?php echo $a15;?>&a16=<?php echo $a16;?>&a17=<?php echo $a17;?>&a18=<?php echo $a18;?>&a19=<?php echo $a19;?>&a20=<?php echo $a20;?>&a21=<?php echo $a21;?>&a22=<?php echo $a22;?>&a23=<?php echo $a23;?>&a24=<?php echo $a24;?>&a25=<?php echo $a25;?>&a26=<?php echo $a26;?>&a27=<?php echo $a27;?>&a28=<?php echo $a28;?>&a29=<?php echo $a29;?>&a30=<?php echo $a30;?>&a31=<?php echo $a31;?>&a32=<?php echo $a32;?>&a33=<?php echo $a33;?>&a34=<?php echo $a34;?>&a35=<?php echo $a35;?>&a36=<?php echo $a36;?>&a37=<?php echo $a37;?>&a38=<?php echo $a38;?>&a39=<?php echo $a39;?>&a40=<?php echo $a40;?>&a41=<?php echo $a41;?>&a42=<?php echo $a42;?>&a43=<?php echo $a43;?>&a44=<?php echo $a44;?>&a45=<?php echo $a45;?>&a46=<?php echo $a46;?>&a47=<?php echo $a47;?>&a48=<?php echo $a48;?>&a49=<?php echo $a49;?>&a50=<?php echo $a50;?>&a51=<?php echo $a51;?>&b1=<?php echo $b1;?>&b2=<?php echo $b2;?>&b3=<?php echo $b3;?>&b4=<?php echo $b4;?>&b5=<?php echo $b5;?>&b6=<?php echo $b6;?>&b7=<?php echo $b7;?>&b8=<?php echo $b8;?>&b9=<?php echo $b9;?>&b10=<?php echo $b10;?>&e1=<?php echo $e1;?>&e2=<?php echo $e2;?>&e3=<?php echo $e3;?>&e4=<?php echo $e4;?>&e5=<?php echo $e5;?>");
/*
		<a href="print.php?a1=<?php echo $a1;?>&a2=<?php echo $a2;?>&a3=<?php echo $a3;?>&a4=<?php echo $a4;?>&a5=<?php echo $a5;?>&a6=<?php echo $a6;?>&a7=<?php echo $a7;?>&a8=<?php echo $a8;?>&a9=<?php echo $a9;?>&a10=<?php echo $a10;?>&a11=<?php echo $a11;?>&a12=<?php echo $a12;?>&a13=<?php echo $a13;?>&a14=<?php echo $a14;?>&a15=<?php echo $a15;?>&a16=<?php echo $a16;?>&a17=<?php echo $a17;?>&a18=<?php echo $a18;?>&a19=<?php echo $a19;?>&a20=<?php echo $a20;?>&a21=<?php echo $a21;?>&a22=<?php echo $a22;?>&a23=<?php echo $a23;?>&a24=<?php echo $a24;?>&a25=<?php echo $a25;?>&a26=<?php echo $a26;?>&a27=<?php echo $a27;?>&a28=<?php echo $a28;?>&a29=<?php echo $a29;?>&a30=<?php echo $a30;?>&a31=<?php echo $a31;?>&a32=<?php echo $a32;?>&a33=<?php echo $a33;?>&a34=<?php echo $a34;?>&a35=<?php echo $a35;?>&a36=<?php echo $a36;?>&a37=<?php echo $a37;?>&a38=<?php echo $a38;?>&a39=<?php echo $a39;?>&a40=<?php echo $a40;?>&a41=<?php echo $a41;?>&a42=<?php echo $a42;?>&a43=<?php echo $a43;?>&a44=<?php echo $a44;?>&a45=<?php echo $a45;?>&a46=<?php echo $a46;?>&a47=<?php echo $a47;?>&a48=<?php echo $a48;?>&a49=<?php echo $a49;?>&a50=<?php echo $a50;?>&a51=<?php echo $a51;?>&b1=<?php echo $b1;?>&b2=<?php echo $b2;?>&b3=<?php echo $b3;?>&b4=<?php echo $b4;?>&b5=<?php echo $b5;?>&b6=<?php echo $b6;?>&b7=<?php echo $b7;?>&b8=<?php echo $b8;?>&b9=<?php echo $b9;?>&b10=<?php echo $b10;?>&e1=<?php echo $e1;?>&e2=<?php echo $e2;?>&e3=<?php echo $e3;?>&e4=<?php echo $e4;?>&e5=<?php echo $e5;?>"  target="_blank">
		
		Click here to take Print
		</a> 
	</h2>
*/
?>
</center>
	
</center>
<?php
	}

else
{
echo "<center>	<h1>	Error Occured	 Please Try Again Data Not Stored. </h1></center>";
}

}
?>