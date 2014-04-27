<?php
	include ("val.php");
	include ("cn.php");
?>

   <?php
    // Retrieve data from Query String
    $deviceid = $_GET['name'];
    // Escape User Input to help prevent SQL Injection
    $deviceid = mysql_real_escape_string($deviceid);
    //build query
    $query = "SELECT * FROM master_data WHERE name = '$deviceid' and mob != '' order by id desc";

    $qry_result = mysql_query($query) or die(mysql_error());
    //Build Result String
    // Insert a new row in the table for each person returned
    while($row = mysql_fetch_array($qry_result))
	{
     $mob_num_show =$row['mob'];
//	$add = $row['add'];
    }

echo   trim($mob_num_show); 
	
    ?>