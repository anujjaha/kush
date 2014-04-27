<?php
	include ("menu.php");
	include ("val.php");
	include ("cn.php");
	error_reporting(0);
?>
<body onLoad="gtot()">
<?php
if(isset($_REQUEST['op']))
{
	$customer = $_REQUEST['customer'];
	$month = $_REQUEST['month'];
	$year = $_REQUEST['year'];
	$query = "SELECT * FROM master_data where name='$customer' and smonth ='$month' and syear ='$year'";
	?>
	
<script type="text/javascript">
	function gtot()
	{
		var gtot = document.getElementById('gtot').value;
		var vat;
		var tax;
		var mtot;
		vat  = ((gtot * 4)/100);
		tax = ((gtot * 1)/100);
		document.getElementById('vat').innerHTML = vat;
		document.getElementById('tax').innerHTML = tax;
		
		document.getElementById('pvat').innerHTML = vat;
		document.getElementById('ptax').innerHTML = tax;
		
		mtot = parseInt(gtot) + parseFloat(vat) + parseFloat(tax);
		ltot = mtot;
		ltot = ltot.toFixed(4);
		document.getElementById('ltot').innerHTML = ltot;
		mtot = Math.ceil(mtot);
		//alert(mtot);
		document.getElementById('mtot').innerHTML = Math.ceil(mtot);
		document.getElementById('camt').value = mtot;
		
		document.getElementById('ptot').innerHTML = ltot;
		document.getElementById('pmtot').innerHTML = Math.ceil(mtot);

		alert(gtot);
		alert (vat);
		alert (tax);
	}
	function chk()
	{
		var key;
//		alert("Key PRes");
		key = document.getElementById("key").value;
		skey = document.getElementById("key_c").value;
		if ( key == "" )
		{
			alert("Please Insert Security Key");
			document.getElementById("key").focus();
			return false;
		}
		if ( key != skey)
		{
			alert("Please Insert Valid Security Key");
			document.getElementById("key").value ="";
			document.getElementById("key").focus();
			return false;
		}
	}

</script>
<table align="center" border="2" style="margin-top:35px;">
<script type="text/javascript">
function pay_sel()
{
	
	if (confirm("You want to Pay Selected Vouchers?") )
	 {
   	return true;
	}
	 else
	  {
	  return false;
	}
}

function toggle(source) {

  var inputs = document.getElementsByTagName('input'); 

   for(var i =0; i<inputs.length; i++) {
     if (inputs[i].type == 'checkbox' && inputs[i].name.indexOf('pay') === 0) { 
       inputs[i].checked = source.checked;
     }
   }
 }

</script>


	<table align="center" border="2">
	<form action="customer_sel_pay.php" method="post" onsubmit="return pay_sel()">
	<tr>
		<td align="center" colspan="9">
		<h2>
			Client Name : <?php echo $customer;?>
		</h2>
		</td>
	</tr>
	<tr>
		<td>
			Sr Num
		</td>
		<td>
			Voucher Number
		</td>
		<td>
			Date
		</td>
		<td>
			Voucher Amout
		</td>
		<td>
			Balance
		</td>
		<td>
			Details
		</td>
        <td>
			Pay
		</td>
		<td>
			Pay All
			<br>
			 <input type='checkbox' onClick='toggle(this)' />
		</td>
		<td align="center">
			Paid Reference
		</td>
	</tr>
	<?php
	$balance = 0;
	$sr = 1;
	$q ="select distinct(vnum),ctype from master_data where name='$customer'  and smonth ='$month' and syear ='$year'";
	//print $q;
	$r = mysql_query($q);
	?>
	<?php
	while ( $row = mysql_fetch_assoc($r))
	{
		
		$mvoucher[]= array($row['vnum']);
	?>
		<tr>
			<td> <?php echo $sr;?> </td>
			<td> <?php echo $row['vnum'];
					$dtemp = $row['vnum'];	
			?> </td>
			<?php
				$q1 ="select * from master_data where vnum='$dtemp'  and smonth ='$month' and syear ='$year'";
				$r1 = mysql_query($q1);
				while ( $row1 = mysql_fetch_assoc($r1))
				{
					$date = $row1['date'];
					$type = $row1['ctype'];
					$ctin = $row1['tinnum'];
					if($row1['ctype'] == "Credit")
					{
						$gtot = $row1['gtot'];
						$balance = $balance + $row1['gtot'];
					
					}
				}
			?>
			<td> <?php  echo $date;?> </td>
			<td> <?php echo $gtot;?> </td>
			<td> <?php echo $balance;?></td>
			<td> <a href="view_vnum.php?vnum=<?php echo $row['vnum'];?>"> View</a> </td>
            <td>
		<?php if($row['ctype'] == "Credit")
		{
		?>
            	<a href="voucher_pay.php?vnum=<?php echo $row['vnum'];?>"> Pay</a> 
            	<?php
            	}
            	else
            	{
            		echo "Paid";
            	}
            	?>
            	</td>
            <td>
            	<?php
            	if($row['ctype'] == "Credit")
            	{
            	?>
		<input type='checkbox' id='checkall' name='pay[]' value='<?php echo $row['vnum'];?>' />
		<?php
		}
		?>

            </td>
            <td>
            	<?php
            	$payRef = $row['ctype'];
            	$payRef = explode('-',$payRef);
            	$payRefCk = array_pop($payRef);
            	
            	if($payRefCk > 0)
            	{
            		$payQuery = "SELECT bill_num,p_id FROM voucher_pay where p_id  ='$payRefCk'";
            		$runPayQuery = mysql_query($payQuery);
            		while($prow = mysql_fetch_assoc($runPayQuery))
            		{
            		?>
            			<a href="view_bill_ref.php?p_id=<?php echo $prow['p_id'];?>" targent="_blank">
            		<?php
            			echo "Bill Number:".$prow['bill_num'];
            			echo "</a>";
            		}
            	}
            	else
            	{
            		echo "&nbsp;";
            	}
            	?>
            </td>
		</tr>
	<?php
	$sr = $sr + 1;
	}
	?>
	<tr>
		<td colspan="7" align="right">
		<input type="hidden" name="cusname" value="<?php echo $customer;?>">
		<input type="submit" value="Pay Selected" name="paysel">
		<input type="reset" name="reset" value="Reset">
		
		</td>
	</tr>
	<tr>
		<td colspan="9" align="right">
		<?php
		$total = 0;
		$qtot ="select distinct(vnum) from master_data where name='$customer' and ctype='Credit' and smonth ='$month' and syear ='$year'";
		$rtot = mysql_query($qtot);
		while( $rowt = mysql_fetch_assoc($rtot))
		{
			$ttemp = $rowt['vnum'];
			//echo $ttemp;
			
			$q2 ="select * from master_data where vnum='$ttemp' and ctype='Credit' and smonth ='$month' and syear ='$year'";
			
			$r2 = mysql_query($q2);
				while ( $row2 = mysql_fetch_assoc($r2))
				{
					$total = $total + $row2['gtot'];
				}
			
		}
		echo "Voucher Total : " . $total;
		?>
		<br>


		Vat (4%) <?php $vatTotal = $total * 0.05; echo $vatTotal;?>
		<br>

		Tax (1%) :<?php $taxTotal = $total * 0.01; echo $taxTotal;?>
        <br>

        Line Total :<?php $lineTotal = $total + $vatTotal + $taxTotal; echo $lineTotal;?>
		<hr>
		Grand Total : <?php echo ceil($lineTotal);?>
		<input type="hidden" name="gtot" id="gtot" value="<?php echo $total;?>">
		<input type="hidden" name="cusname" value="<?php echo $customer;?>">
		</td>	
	</tr>
	</table>
	
	
	
	
<?php	
}
else
{
?>
<table align="center" border="1">
<form action="#" method="post">
<tr>
	<td align="right">
	Select Customer :
	</td>
	<td>
<select name="customer">
<?php
$query = "SELECT distinct(name) FROM master_customers order by name";
$run = mysql_query($query);
while($row = mysql_fetch_assoc($run))
{
?>
<option> <?php echo $row['name'];?></option>
<?php
}
?>
</select>
</td>
</tr>
<tr>
	<td align="right">
	Select Month :
	</td>	
	<td>
		<select name="month">
			<option> Jan </option>
			<option> Feb </option>
			<option value="Mar"> March </option>
			<option> April </option>
			<option> May </option>
			<option> June </option>
			<option> July </option>
			<option> Aug </option>
			<option> Sept </option>
			<option> Oct </option>
			<option> Nov </option>
			<option> Dec </option>
		</select>
	</td>
</tr>
<tr>
	<td align="right">
		Select Year : 
	</td>
	<td>
		<select name="year">
			<option> 2013 </option>
			<option> 2014 </option>
		</select>
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" name="history" Value="History">
		<input type="reset" name="reset" Value="Reset">
		<input type="hidden" name="op" value="true">
	</td>
</tr>	
</table>
<?php
}
?>