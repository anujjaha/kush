<?php
include ("menu.php");
include ("cn.php");
?>
<?php

$sec = $_POST['key_c'];
$u_sec = $_POST['key'];

if ( $sec == $u_sec )
{

$a =trim($_POST['f_num']);

$b = $_POST['p_num'];

$c = $_POST['date'];

$d = $_POST['name'];

$e = trim($_POST['txt_num']);

$f =trim($_POST['txt_add']);

$g = $_POST['j_name'];

$h = $_POST['m_name'];

$i = $_POST['p_name'];

$j = $_POST['c_size'];

$k = $_POST['more'];
/*
$k1 = $_POST['m1'];
$k2 = $_POST['m2'];
$k3 = $_POST['m3'];
$k4 = $_POST['m4'];
$k5 = $_POST['m5'];
$k6 = $_POST['m6'];

$k = $k1 . $k2 . $k3. $k4 . $k5. $k6;
*/



$l = $_POST['print_det'];

$m = $_POST['lami_det'];

$n = $_POST['tot_shet'];

$o = $_POST['p_ling'];

$p = $_POST['p_by'];

//echo strlen($g);
while ( strlen($g) < 35)
{
	$g = $g . "  ";
//	echo $g;
}

//echo "<br> Job name :";
//echo strlen($g);
//echo $g;
while ( strlen($i) < 35)
{
	$i = $i . "  ";
//	echo $g;
}
//echo "<br> Paper Det :  ";
//echo strlen($i);
//echo $i;
//echo $g;
//echo "<br>";
//echo strlen($g);
//}

while ( strlen($f) < 35)
{
	$f = $f . "  ";
}
//echo "<br> Add : ";
//echo strlen($f);
//echo $f;

while ( strlen($d) < 35)
{
	$d = $d . "  ";
}
//echo "<br> Name :";
//echo strlen($d);
//echo $d;


/*
}
if ( strlen($g) > 30 and strlen($i) > 30 and strlen($f) > 30 and strlen($d) > 30 )
{
	echo "<br>true";
	
}
else
{
	echo "<br>false";
}
*/

//commetns start frm here
if ( strlen($i) > 30 and strlen($g) >30 and strlen($f) > 30 and strlen($d) > 30 )
{
$qr = "Insert into master_data values ('','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','y')";

$qr = "Update master_data set id='$a' , p_num ='$b', date='$c' , name = '$d',txt_num = '$e',txt_add = '$f', j_name ='$g', m_name ='$h',p_name = '$i' , c_size = '$j' , more = '$k' , print_det = '$l' , lami_det = '$m', tot_shet = '$n', p_ling ='$o',paper_by ='p', val='y' where id ='$a'";

//echo $qr;
if ( mysql_query($qr))
{
echo "<center>	<h1>		Data Updated Succesfully	</h1></center>";
?>
<center>
	<h2>
		<a href="print.php?data=<?php echo $d;?>&f_num=<?php echo $a;?>&user=<?php echo $b;?>&date=<?php echo $c;?>&add=<?php echo $f;?>&mob=<?php echo $e;?>&j_name=<?php echo $g;?>&m_name=<?php echo $h;?>&p_name=<?php echo $i;?>&c_size=<?php echo $j;?>&p_num=<?php echo $b;?>&print_det=<?php echo $l;?>&lami_det=<?php echo $m;?>&tot_shet=<?php echo $n;?>&p_ling=<?php echo $o;?>&p_by=<?php echo $p;?>&m1=<?php echo $k1;?>&m2=<?php echo $k2;?>&m3=<?php echo $k3;?>&m4=<?php echo $k4;?>&m5=<?php echo $k5;?>" target="_blank">
		Click here to take Print
		</a>
	</h2>
</center>
<?php
	}
}
else
{
echo "<center>	<h1>	Error Occured	 Please Try Again Data Not Stored. </h1></center>";
}

}

else
{
echo "<center>	<h1> 	Security Key Not Matched Try Again. </h1></center>";
}

?>