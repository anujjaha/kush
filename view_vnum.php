<?php
//	include ("ck.php");
include ("val.php");
	include ("menu.php");

	include ("cn.php");
	$vnum = $_GET['vnum'];


	$q = "select * from master_data where vnum='$vnum'";
	$r = mysql_query($q);
	while($row = mysql_fetch_assoc($r))
	{
		$cname = $row['name'];
		$date = $row['date'];
		$mob = $row['mob'];
		$email = $row['email'];
		$rname = $row['rname'];
		$add = $row['add'];
		$ctype = $row['ctype'];
		$p1 = $row['p1'];
		$q1 = $row['q1'];
		$pp1 = $row['pp1'];
		$t1 = $row['t1'];
		$p2 = $row['p2'];
		$q2 = $row['q2'];
		$pp2 = $row['pp2'];
		$t2 = $row['t2'];
		$p3 = $row['p3'];
		$q3 = $row['q3'];
		$pp3 = $row['pp3'];
		$t3 = $row['t3'];
		$p4 = $row['p4'];
		$q4 = $row['q4'];
		$pp4 = $row['pp4'];
		$t4 = $row['t4'];
		
		$p5 = $row['p5'];
		$q5 = $row['q5'];
		$pp5 = $row['pp5'];
		$t5 = $row['t5'];
		$p6 = $row['p6'];
		$q6= $row['q6'];
		$pp6 = $row['pp6'];
		$t6 = $row['t6'];
		$p7 = $row['p7'];
		$q7 = $row['q7'];
		$pp7 = $row['pp7'];
		$t7 = $row['t7'];
		$p8 = $row['p8'];
		$q8 = $row['q8'];
		$pp8 = $row['pp8'];
		$t8 = $row['t8'];
		
		$p9 = $row['p9'];
		$q9 = $row['q9'];
		$pp9 = $row['pp9'];
		$t9 = $row['t9'];
		$p10 = $row['p10'];
		$q10 = $row['q10'];
		$pp10 = $row['pp10'];
		$t10 = $row['t10'];
		$tax = $row['tax'];
		$cour = $row['cour'];
		$gtot = $row['gtot'];
		
		$b1 = $row['d1'];
		$b2 = $row['d2'];
		$b3 = $row['d3'];
		$b4 = $row['d4'];
		$b5 = $row['d5'];
		$b6 = $row['d6'];
		$b7 = $row['d7'];
		$b8 = $row['d8'];
		$b9 = $row['d9'];
		$b10 = $row['d10'];
		
		
		$e1 = $row['dis'];
		$e2 = $row['vat'];
		$e3 = $row['msg'];
		$e4 = $row['user'];
	}	
?>
<body>
<center>
	<table align="center" border="2">
		<tr>
			<td align="right">
				Client Name : <?php echo $cname;?>
			</td>
			<td>	
				Voucher Date : <?php echo $date;?>
			</td>	
		</tr>
		<tr>
			<td align="right">
				Contact Number : <?php echo $mob;?> 
			</td>
			<td align="right"> 	
				Voucher Number : <?php echo $vnum;?>
			</td>	
		</tr>
		
		<tr>
			<td align="right">
				Email Id : <?php echo $email;?>
			</td>
			<td align="right">	
				Receiver Name : <?php echo $rname;?>
			</td>	
		</tr>
		
		<tr>
			<td align="right">
				Address : <?php echo $add;?>
			</td>
			<td align="right">	
				Payment Type : <?php echo $ctype;?>
			</td>	
		</tr>
		<tr>
			<td colspan="2" align="center">
				<h2> Purchased Item List </h2>
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
			<!-- Center Data Here-->
				<table align="center" border="2">
					<tr>
						<td align="center"> Sr No.</td>
						<td align="center"> Product Name </td>
						<!--<td align="center"> Product Description </td>-->
						<td align="center"> Quantity </td>
						<td align="center"> Price <br> Per/Piece</td>
						<td align="center"> Total</td>
					</tr>
					<tr>
						<td> 1. </td>
						<td> <?php echo $p1;?>  </td>
						
						<td> <?php echo $q1;?> </td>
						<td> <?php echo $pp1;?> </td>
						<td> <?php echo $t1;?> </td>
					</tr>
					<tr>
						<td> 2. </td>
						<td> <?php echo $p2;?>  </td>
					
						<td> <?php echo $q2;?> </td>
						<td> <?php echo $pp2;?> </td>
						<td> <?php echo $t2;?> </td>
					</tr>
					<tr>
						<td> 3. </td>
						<td> <?php echo $p3;?>  </td>
					
						<td> <?php echo $q3;?> </td>
						<td> <?php echo $pp3;?> </td>
						<td> <?php echo $t3;?> </td>
					</tr>
					<tr>
						<td> 4. </td>
						<td> <?php echo $p4;?>  </td>
					
						<td> <?php echo $q4;?> </td>
						<td> <?php echo $pp4;?> </td>
						<td> <?php echo $t4;?> </td>
					</tr>
					<tr>
						<td> 5. </td>
						<td> <?php echo $p5;?>  </td>
					
						<td> <?php echo $q5;?> </td>
						<td> <?php echo $pp5;?> </td>
						<td> <?php echo $t5;?> </td>
					</tr>
					<tr>
						<td> 6. </td>
						<td> <?php echo $p6;?>  </td>
					
						<td> <?php echo $q6;?> </td>
						<td> <?php echo $pp6;?> </td>
						<td> <?php echo $t6;?> </td>
					</tr>
					<tr>
						<td> 7. </td>
						<td> <?php echo $p7;?>  </td>
					
						<td> <?php echo $q7;?> </td>
						<td> <?php echo $pp7;?> </td>
						<td> <?php echo $t7;?> </td>
					</tr>
					<tr>
						<td> 8. </td>
						<td> <?php echo $p8;?>  </td>
					
						<td> <?php echo $q8;?> </td>
						<td> <?php echo $pp8;?> </td>
						<td> <?php echo $t8;?> </td>
					</tr>
					<tr>
						<td> 9. </td>
						<td> <?php echo $p9;?>  </td>
					
						<td> <?php echo $q9;?> </td>
						<td> <?php echo $pp9;?> </td>
						<td> <?php echo $t9;?> </td>
					</tr>
					<tr>
						<td> 10. </td>
						<td> <?php echo $p10;?>  </td>
					
						<td> <?php echo $q10;?> </td>
						<td> <?php echo $pp10;?> </td>
						<td> <?php echo $t10;?> </td>
					</tr>
					<tr>
						<td colspan="6" align="right">
							Transport Charges  : <?php echo $cour;?>
						</td>
					</tr>
					
					
					<tr>
						<td colspan="6" align="right">
							Vat   : <?php echo $e4;?>
						</td>
					</tr>
					
					<tr>
						<td colspan="6" align="right">
							Tax : <?php echo $tax;?>
						</td>
					</tr>
					<tr>
						<td colspan="6" align="right">
							Grand Total : <?php echo $e1;?>
						</td>
					</tr>
					<tr>
						<td colspan="6" align="right">
							Remarks  : <?php echo $e2;?>
						</td>
					</tr>
					<tr>
						<td colspan="6" align="right">
							Voucher Created By : <?php echo $e3;?>
						</td>
					</tr>
					
			</table>
			<!-- Center Data Ends-->
			</td>
		</tr>
	</table>
</center>
</body>

