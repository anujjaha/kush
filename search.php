<?php



include ("val.php");

	include ("menu.php");



	include ("cn.php");

?>

<head>

	

<script type="text/javascript">

function st()

{

document.getElementById("num").focus();

}

</script>



<link rel="stylesheet" type="text/css" href="css/jkmegamenu.css" />



<script type="text/javascript" src="js/jquery.js"></script>

<script type='text/javascript' src='js/jquery.autocomplete.js'></script>

<link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />



<script type="text/javascript">

var J = jQuery.noConflict();



J().ready(function() {

	J("#num").autocomplete("get_name.php", {

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

<body onLoad="st();">

<table align="center" border="0">

<form action="#" method="post">

<tr>

	<td colspan="2" align="center">

	<br />



		<img src="img/sr.jpg" />

		

	</td>

</tr>

	<tr>

		<td align="right">

			Enter The Client Name  :

		</td>

		<td>

			<input type="text" name="num" id="num" />

		</td>

	</tr>
	
<tr>

		<td align="right">

			Enter The Date :

		</td>

		<td>

			<input type="text" name="date" id="date" />
			<span> Format : dd-mm-YYYY </span>

		</td>

	</tr>
	

	

	<tr>

		<td colspan="2" align="center">

			<input type="submit" name="Search" value="Search" />

		</td>

	</tr>

</form>

</table>

<br />

<a href="search_num.php">

	<center>

		Search By Voucher Number

	</center>

</a>

<hr />







<?php

//	include ("ck.php");


	if(!empty($_POST['num']))
	{
	$cname = $_POST['num'];
		$s_date  = "false";
	}
	else
	{
		$cname = $_POST['date'];
		$s_date  = "true";
	}

///	echo $cname;

if ( $cname != NULL )

{



	?>

<body>



<table align="center" border="2">

	<tr>

		<td align="center" colspan="6">
		<center>
			<a href="search.php">
				Back
			</a>
		</center>
		<h2>
		<?php
			if($s_date == "true")
			{
			echo "Date :";			
			}
			else
			{
			echo "Client Name :";
			}
			?>
			 <?php echo $cname;?>

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

			Client Name

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

			Update

		</td>

	</tr>

	<?php

	$sr = 1;
	if($s_date == "true")
	{
	$q ="select distinct(vnum) from master_data where date='$cname' order by id";
	}
	else
	{
	$q ="select distinct(vnum) from master_data where name='$cname' order by id";
	}
	print $q;
	$r = mysql_query($q);

	?>

	<?php

	while ( $row = mysql_fetch_assoc($r))

	{

	?>

		<tr>

			<td> <?php echo $sr;?> </td>

			<td> <?php echo $row['vnum'];

					$dtemp = $row['vnum'];	

			?> </td>
			

			<?php

				$q1 ="select * from master_data where vnum='$dtemp' ";

				//echo $q1;

				

				$r1 = mysql_query($q1);

				while ( $row1 = mysql_fetch_assoc($r1))

				{
				

					$date = $row1['date'];
					$mcname = $row1['name'];
					$gtot = $row1['gtot'];
					$total = $total + $row1['gtot'];

				}

			?>
			<td>
				<?php echo $mcname;?>
			</td>
			<td> <?php echo $date;?> </td>

			<td align="right"> <?php echo $gtot;?> </td>

			<td> <a href="view_vnum.php?vnum=<?php echo $row['vnum'];?>"> View</a> </td>

			<td> <a href="update_rec.php?vnum=<?php echo $row['vnum'];?>"> Update </a> </td>

		</tr>

	<?php

	$sr = $sr + 1;

	}

	?>

	<tr>

		<td colspan="4" align="right">
		
		Grand Total :  
		</td>
		<td align="right">
		
		<?php
		echo $total;

		?>

		</td>	

	</tr>

	</table>

</body>

</html>

<?php

}

?>