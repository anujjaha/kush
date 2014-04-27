<?php
//	include ("ck.php");
	include ("val.php");
	include ("menu.php");

	include ("cn.php");
	$vnum = $_GET['vnum'];
	$q ="select * from master_data where vnum='$vnum'";
	$r = mysql_query($q);
	$arrInfo = mysql_fetch_assoc($r);
?>
<table align="center" border="2">
 <form action="paid_voucher.php" method="post">
	<tr>
    	<td align="right">
        	Client Name : 
        </td>	
        <td>
        	<?php echo $arrInfo['name'];?>
        </td>
      </tr>
     <tr>
        <td align="right">
        	Voucher Number : 
        </td>	
        <td>
        	<?php echo $vnum;?>
        </td>
    </tr>	
     <tr>
        <td align="right">
        	Voucher Date : 
        </td>	
        <td>
        	<?php echo $arrInfo['date'];?>
        </td>
    </tr>
     <tr>
        <td align="right">
        	Voucher Amount : 
        </td>	
        <td>
        	<?php echo $arrInfo['gtot'];?>
        </td>
    </tr>	
    <tr>
        <td align="right">
        	View Again
        </td>	
        <td>
        	<a href="view_vnum.php?vnum=<?php echo $vnum;?>" target="_blank">
            	Verify
            </a>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="2">
        	If You sure and Want to Pay Voucher Number <?php echo $vnum;?> then Click on Pay Button.
       
        </td>
    </tr>	
    <tr>
    	<td colspan="2" align="center">
       	<br />
       
        <input type="hidden" name="vnum" value="<?php echo $vnum;?>" />
        <input type="submit" name="Pay Voucher Confirm" value="Pay Voucher" style="width:200px; font-size:22px;" />
        </td>
    </tr>
    </form>
</table>
	