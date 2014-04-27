<?php

include ('val.php');
include ('cn.php');
include ('menu.php');

//echo $td;
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />
<link rel="stylesheet" type="text/css" href="css/jkmegamenu.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type='text/javascript' src='js/jquery.autocomplete.js'></script>
<script type="text/javascript">
var J = jQuery.noConflict();

J().ready(function() {
	J("#name").autocomplete("get_name.php", {
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

<title>
	 Report Station
</title>
</head>

<body alink="#00FF66" link="#00CC00">


<table align="center" border="0">

<form action="t.php" method="post">
	
	
	
	<tr>
		<td align="center">
		<br>

			<img src="img/rp.jpg">
		</td>
	</tr>
	
	
	
	
	<tr>
		<td align="center">
			Enter The Client Name : <input type="text" name="name" id="name" >
		</td>
	</tr>
	
	<tr>	
		<td align="center">
			<input type="submit" name="Report" value="Report" onClick="download();">
			<input type="reset" name="Reset" value="Reset">
		</td>
	</tr>
<?php
	
?>
</body>
</html>