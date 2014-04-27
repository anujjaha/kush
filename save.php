<?php
include ("menu.php");
include ("cn.php");
include ("val.php");

?>
<style>
		td{ font-size:9px; font-family:Arial;}
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
$month = date('M')."-".date('Y');
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

$addJob = $_POST['addjob'];



$myShowtin = $_POST['times'];

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


$smonth = date('M');
$syear = date('Y');

//comment is started from here
if($a4 != "")
{
	$qr = "Insert into master_data values ('','$a1','$a2','$month','$a3','$a4','$a5','$a6','$a7','$tin','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$a41','$a42','$a43','$a44','$a45','$a46','$a47','$a48','$a49','$a50','$a51','$b1','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9','$b10','$e5','$e2','$e3','$e4','$smonth','$syear')";
}
else
{
	$qr = "";
}


if ( mysql_query($qr))
{

if($addJob == "true")
{
	include('process_cn.php');
$tjdate = date('d-m-y');
$jq = "SELECT * FROM job_details order by j_id desc";
$jr = mysql_query($jq);
$jd = mysql_fetch_assoc($jr);
$jobName = "Voucher Num ".$a4;
$j_num = $jd['j_id']+1;
$process_query = "INSERT INTO job_details
		(j_id,type,date,cusname,mob,jname)
		VALUES
		('$j_num','Voucher Ref','$tjdate','$a1','$a3','$jobName')";
	mysql_query($process_query);	
}

?>
		
  <center>	<h1>		Data Saved Succesfully	</h1></center>


	<center>
	<h2>
<?php
	/*if ( $a16 == "0")
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
<!-- div and table begin from here --->
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
            	Delivery Before : <?php echo $_POST['times'];?>
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
            	Receiver Name : <?php echo $a6;?>
            </td>
        </tr>
        <tr>
        	<td colspan="2" align="center">
            	<table align="center"  border="2">
                	<tr>
                    	<td align="center">Description</td>
                        <td align="center">
                        	Page
                        </td>
                        <td align="center">
                        	Sets
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
                    
                  <?php
                  /*  <!-- <tr>
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
                    </tr>-->
                    
                    <!--<tr>
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
                    </tr>-->*/?>
                    
                    
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
                    
                   <!--  <tr>
                    	<td colspan="5" align="right">
                       VAT (4%) :
                       </td>
                       <td align="right">
					   <?php // echo $e4;?>
                        </td>
                    </tr>
                    
                     <tr>
                    	<td colspan="5" align="right">
                        	TAX (1%) :
                         </td>
                         <td align="right">
						  <?php // echo $a49;?>
                        </td>
                    </tr>-->
                    
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
            Receiver Signature 
            <br /><br>
            &nbsp;
            
            </td>
            <td align="right">
            For Cybera.
            </td>
        </tr>
        <tr>
       		<td colspan="2" align="right">
       		Time : 
       			 <script type="text/javascript">
<!--
	var currentTime = new Date()
	var hours = currentTime.getHours()
	var minutes = currentTime.getMinutes()

	if (minutes < 10)
	minutes = "0" + minutes

	var suffix = "AM";
	if (hours >= 12) {
	suffix = "PM";
	hours = hours - 12;
	}
	if (hours == 0) {
	hours = 12;
	}

	document.write("<b>" + hours + ":" + minutes + " " + suffix + "</b>")
//-->
</script>
       		</td>
        </tr>
      </table>
</div>


<!-- Div and table will end here-->
<?php
?>
<?php
	}

else
{
	print ($qr);
echo "<center>	<h1>	Error Occured	 Please Try Again Data Not Stored. </h1></center>";
}

}
?>