<?php
include ("menu.php");
include ("val.php");
	include ("cn.php");
//	error_reporting(0);
?>
  <body>

<?php
$year = date('Y');
if(!empty($_POST['gobyYear'])){
	$year = $_POST['year'];
}
$query = "SELECT * FROM master_customers order by name";
$master_data = "";
$sr =0;
$run = mysql_query($query);
while($row = mysql_fetch_assoc($run)){
	$name = $row['name'];
	$queryData = "SELECT sum(dis) AS total,month FROM master_data where
				 name = '$name'
					AND month like '%$year%'
				 group by month
				 ";
	$rundata = mysql_query($queryData);
	while($rundatac = mysql_fetch_assoc($rundata)){
	$master_data[$name][] = array($rundatac['total'],$rundatac['month']);
	}
$customer[] = array($row['name']);
$sr++;
}
//echo "<pre>";
//print_r($master_data);
?>
<table align="center" border="2" style="margin-top:40px; background-color:#FFFFFF;">
	<tr>
    	<td colspan="13" align="center">
        	<form action="#" method="post">
            Select Year : <select  name="year">
                          <option <?php if($year=="2014") echo "selected";?>> 2014 </option>
                          <option <?php if($year=="2013") echo "selected";?>> 2013 </option>
                          </select>
                              <br />
                    <input type="hidden" name="gobyYear" value="true" />
                    <input type="submit" name="yearSearch" value="Search By Year" />
			</form>
        </td>	
    </tr>
	<tr>
    	<td align="center">Client Name</td>
        <td align="center">Jan</td>
        <td align="center">Feb</td>
        <td align="center">March</td>
        <td align="center">April</td>
        <td align="center">May</td>
        <td align="center">June</td>
        <td align="center">July</td>
        <td align="center">August</td>
        <td align="center">September</td>
        <td align="center">October</td>
        <td align="center">November</td>
        <td align="center">December</td>
    </tr>
    <?php
	foreach($master_data as $clientName => $value){
	$showJan="-";
	$showFeb="-";
	$showMar="-";
	$showApril="-";
	$showMay="-";
	$showJune="-";
	$showJuly="-";
	$showAug="-";
	$showSept="-";
	$showOct="-";
	$showNov="-";
	$showDec="-";
	
		//print_r($value);
		foreach($value as $vkey => $data){
			$total = $data[0];
			$month = explode("-",$data[1]);	
			$month = $month[0];
			$grandTotal = $grandTotal + $total;
			if($month == "Jan") $showJan = $total;
			if($month == "Feb") $showFeb = $total;
			if($month == "Mar") $showMar = $total;
			if($month == "Apr") $showApril = $total;
			if($month == "May") $showMay = $total;
			if($month == "Jun") $showJune = $total;
			if($month == "Jul") $showJuly = $total;
			if($month == "Aug") $showAug = $total;
			if($month == "Sep") $showSept = $total;
			if($month == "Oct") $showOct = $total;
			if($month == "Nov") $showNov = $total;
			if($month == "Dec") $showDec = $total;
		}
		
	?>
    <tr>
    	<td align=""><?php echo $clientName;?></td>
        <td align="center"><?php echo $showJan;?></td>
        <td align="center"><?php echo $showFeb;?></td>
        <td align="center"><?php echo $showMar;?></td>
        <td align="center"><?php echo $showApril;?></td>
        <td align="center"><?php echo $showMay;?></td>
        <td align="center"><?php echo $showJune;?></td>
        <td align="center"><?php echo $showJuly;?></td>
        <td align="center"><?php echo $showAug;?></td>
        <td align="center"><?php echo $showSept;?></td>
        <td align="center"><?php echo $showOct;?></td>
        <td align="center"><?php echo $showNov;?></td>
        <td align="center"><?php echo $showDec;?></td>
    </tr>
    <?php
	}
	?>
</table>
</center>
    </body>
    </html>