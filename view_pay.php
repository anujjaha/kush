<?php
//	include ("ck.php");
include ("val.php");
	include ("menu.php");

	include ("cn.php");
	$cname = $_GET['cname'];
	$month = $_GET['month'];
	?>
<body onLoad="gtot()">
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
		
		document.getElementById('pltot').innerHTML = ltot;
		document.getElementById('pmtot').innerHTML = Math.ceil(mtot);

		//alert(gtot);
		//alert (vat);
		//alert (tax);
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

function bone()
{
	var bone = document.getElementById('bone').value;
	
	document.getElementById('pone').innerHTML = bone;
	//alert('test');	
}
function btwo()
{
	var btwo = document.getElementById('btwo').value;
	
	document.getElementById('ptwo').innerHTML = btwo;
	//alert('test');	
}

function bthree()
{
	var bthree = document.getElementById('bthree').value;
	
	document.getElementById('pthree').innerHTML = bthree;
	//alert('test');	
}

function bno()
{
	var bno = document.getElementById('bno').value;
	//alert(bno);
	document.getElementById('bill').innerHTML = bno;
	//alert('test');	
}
</script>



<?php
 	$myq = "select * from master_pay where bill_type ='Retailer Invoice'";
	$myr = mysql_query($myq);
	while($mrow = mysql_fetch_assoc($myr))
	{
		$mybill_num_retail = $mrow['bill_num'];
	}
	$mybill_num_retail = $mybill_num_retail +1;
	
	$mytq = "select * from master_pay where bill_type ='Tax Invoice'";
	$mytr = mysql_query($mytq);
	while($mrow = mysql_fetch_assoc($mytr))
	{
		$mybill_num_tax = $mrow['bill_num'];
	}
	$mybill_num_tax = $mybill_num_tax + 1;
	
 ?>




<table align="center" border="2">
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
</script>
<form action="sel_pay.php" method="post" onsubmit="return pay_sel()">
	<tr>
		<td align="center" colspan="7">
		<h2>
			Client Name : <?php echo $cname;?>
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
			Total Amout
		</td>
		<td>
			Details
		</td>
        <td>
			Pay
		</td>
		<td>
			Selected Pay
		</td>
	</tr>
	<?php
	$sr = 1;
	$q ="select distinct(vnum) from master_data where name='$cname' and ctype='Credit'";
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
				$q1 ="select * from master_data where vnum='$dtemp' and ctype='Credit'";
				$r1 = mysql_query($q1);
				while ( $row1 = mysql_fetch_assoc($r1))
				{
					$date = $row1['date'];
					$gtot = $row1['gtot'];
					$ctin = $row1['tinnum'];
				}
			?>
			<td> <?php echo $date;?> </td>
			<td> <?php echo $gtot;?> </td>
			<td> <a href="view_vnum.php?vnum=<?php echo $row['vnum'];?>"> View</a> </td>
            <td> <a href="voucher_pay.php?vnum=<?php echo $row['vnum'];?>"> Pay</a> </td>
            <td>
            	<input type='checkbox' name='pay[]' value='<?php echo $row['vnum'];?>'>
            </td>
		</tr>
	<?php
	$sr = $sr + 1;
	}
	?>
	<tr>
		<td colspan="7" align="right">
		<input type="submit" value="Pay Selected" name="paysel">
		<input type="reset" name="reset" value="Reset">
		 
		</td>
	</tr>
	<tr>
		<td colspan="7" align="right">
		<?php
		$total = 0;
		$qtot ="select distinct(vnum) from master_data where name='$cname' and ctype='Credit'";
		$rtot = mysql_query($qtot);
		while( $rowt = mysql_fetch_assoc($rtot))
		{
			$ttemp = $rowt['vnum'];
			//echo $ttemp;
			
			$q2 ="select * from master_data where vnum='$ttemp' and ctype='Credit'";
			$r2 = mysql_query($q2);
				while ( $row2 = mysql_fetch_assoc($r2))
				{
					$total = $total + $row2['gtot'];
				}
			
		}
		echo "Voucher Total : " . $total;
		?>
		<br>

		Vat (4%) :<span id="vat"></span>
		<br>

		Tax (1%) :<span id="tax"></span>
        <br>

        Line Total : <span id="ltot"></span>
		<hr>
		Grand Total : <span id="mtot"></span>
		<input type="hidden" name="gtot" id="gtot" value="<?php echo $total;?>">
		</td>	
	</tr>
	</table>
	<table align="center" border="2">
    <form action="pay.php" method="post" onSubmit="return chk()">
		<tr>
			<Td align="center" colspan="2">
			 	<h2> Payment Details </h2>
			 </Td>
		</tr>
		<tr>
			<td align="right">
				Payment Type :
			</td>
			<td>
				<select name="type">
					<option> Cheque </option>
					<option> Cash </option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Customer Name :
			</td>
			<td>
				<input type="text" name="name" value="<?php echo $cname;?>">
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Bank Name :
			</td>
			<td>
				<input type="text" name="bname" >
			</td>
		</tr>
		<tr>
			<td align="right">
				Bank Branch Name :
			</td>
			<td>
				<input type="text" name="bbname" >
			</td>
		</tr>
		<tr>
			<td align="right">
				Cheque Number :
			</td>
			<td>
				<input type="text" name="cnum" >
			</td>
		</tr>
		<tr>
			<td align="right">
				Cheque Date :
			</td>
			<td>
				<input type="text" name="cdate" >
			</td>
		</tr>
		<tr>
			<td align="right">
				Amount :
			</td>
			<td>
				<input type="text" name="camt" id="camt" value="" >
			</td>
		</tr>
        
        <tr>
    	<td align="right">
        	Enter Invoice Type :
        </td>
        <td>
       
        <select name="btype" id="btype">
        	<option> Tax Invoice </option>
			<option> Retailer Invoice </option>
    	 </select>
        </td>
    </tr>
        
		<tr>
			<td align="right">
				Payment for Month : 
			</td>
			<td>
				<input type="text" name="mn" value="<?php echo $month;?>" disabled="disabled">
			</td>
		</tr>
		<tr>
			<td align="right">
				Enter Security Key : 
			</td>
			<td>
			<font style="color:#FF0000; font-size:18px;">
				<?php
					$rnd = rand(1111,9999);
					echo $rnd;
				?>
			</font>
				<input type="text" name="key" id="key" maxlength="4" size="3">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="month" value="<?php echo $month;?>">
				<input type="hidden" name="flag" value="true">
				<input type="hidden" name="key_c" id="key_c" value="<?php echo $rnd;?>">
                <input type="hidden" name="myprintaj" id="myprintaj">
                <input type="hidden" name="retailbnum" id="retailbnum" value="<?php echo $mybill_num_retail;?>">
               <input type="hidden" name="taxbnum" id="taxbnum" value="<?php echo $mybill_num_tax;?>">
				<input type="submit" value="Pay Now" name="Pay">
				<input type="reset"  value="Reset"  name="Reset">
				
				
			</td>
		</tr>
        </form>
	</table>
    
    
 <center>
 <br>
 
 <table align="center" border="2">
	
 	 <tr>
    	<td colspan="2" align="center">
       	<h1>
        	Set Invoice Details
        </h1>
        </td>
    </tr>
    <tr>
    	<td align="right">
        	Enter Bill No :
        </td>
        <td>
        <input type="text" name="bno" id="bno" onKeyUp="bno()">
        </td>
    </tr>
    <tr>
    	<td align="right">
        	Enter Line One :
        </td>
        <td>
        <input type="text" name="bone" id="bone" onKeyUp="bone()">
        </td>
    </tr>
     <tr>
    	<td align="right">
        	Enter Line Two :
        </td>
        <td>
        <input type="text" name="btwo" id="btwo" onKeyUp="btwo()">
        </td>
    </tr>
    
     <tr>
    	<td align="right">
        	Enter Invoice Type :
        </td>
        <td>
       
        <select name="bthree" id="bthree" onBlur="bthree()">
        	<option> Tax Invoice </option>
			<option> Retailer Invoice </option>
    	 </select>
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        <?php	echo "Retailer Bill Number : ".$mybill_num_retail." &nbsp; Tax Bill Number : ". $mybill_num_tax; ?>
        </td>
    </tr>
   
 </table>
 
<br>

 <input type="button" onClick="printDiv('printableArea')" value="Print INVOICE" name="print" />
 </center>   
 
    <script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
	 
	 document.getElementById('myprintaj').value ="Final Test";
}
</script>
<center>	
<div id="printableArea" style="height:11.7in; width:8.3in">
<br>
<br><br><br><br><br>
      <table align="center" border="2" width="100%">
      	<tr>
        	<td>
            <!-- Inner Table Begin-->
            	<table align="center" border="2" width="100%">
                	<tr>
                    	<td>
                        	BILL NO : 
                          <span id="bill"></span>
                          
                        </td>
                        <td align="center">
                        	<span id="pthree"></span>
                        </td>
                        <td align="right">
                        	DATE : <?php echo date('d-m-Y');?>
                        </td>
                        
                    </tr>
                </table>
            <!-- Inner Table End-->
            </td>
        </tr>
        <tr>
        	<td>
            	<table align="center" border="2" width="100%">
                	<td width="50%">
                    	Name : <?php echo $cname;?>
                    </td>
                    <td align="right" width="50%	">
                    	Tin NO : <?php echo $ctin;?>
                    </td>
                </table>
   
            </td>
        </tr>
        <tr>
        	<td>
            	<table align="center" border="2" width="100%">
                	<tr>
                    	<td align="center">
                        	SR NO.
                        </td>
                        <td align="center">
                        	PARTICULARS
                        </td>
                        <td align="center">
                        	QTY.
                        </td>
                        <td align="center">
                        	RATE/UNIT
                        </td>
                        <td align="center">
                        	AMOUNT(RS)
                        </td>
                    </tr>
                    <tr>
                    	<td align="center">
                        	<div style="height:320px">
                            1
                            </div>
                        </td>
                        <td width="60%">
                        	<div style="height:320px">
                          
                           <span id="pone"></span>
                           <br>
						<span id="ptwo"></span>
                          
                            <br>
							 <?php
							 foreach($mvoucher as $vnum => $mval)
							 {
								//echo $mval."<br>";
								//var_dump($mval);
								foreach($mval as $mkey =>$tval)
								{
									echo $tval." , ";	
								}
							 }
							//var_dump($mvoucher);
							?>
                            </div>	
                           
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td align="right">
                        	<div style="height:320px">
                           
							<?php echo $total;?>
                            </div>
                        </td>
                       </tr>
                     <tr>
                       	<td>&nbsp;
                        	
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td align="right"	> 
                        	VAT (4%) : 
                        </td>
                        <td align="right">
                        	<span id="pvat"></span>
                        </td>
                       </tr>
                       
                     <tr>
                       	<td>&nbsp;
                        	
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td align="right"	> 
                        	TAX (1%) : 
                        </td>
                        <td align="right">
                        <span id="ptax"></span>
                        	
                        </td>
                       </tr>
                       
                        <tr>
                       	<td>&nbsp;
                        	
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td align="right"> 
                        	Line TOTAL : 
                        </td>
                        <td align="right">
                        	<span id="pltot"></span>
                        </td>
                       </tr>
                       
                       <tr>
                       	<td>&nbsp;
                        	
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td align="right"> 
                        	TOTAL : 
                        </td>
                        <td align="right">
                        	 <span id="pmtot"></span>
                            
                        </td>
                       </tr>
                    </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
        	<Td align="center">
            	Tin NUM : 4748338383
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                PAN NO : 983739
            </Td>
        </tr>
        
      </table>
</div>




</body>
</html>
