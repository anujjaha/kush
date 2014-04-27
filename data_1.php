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
    $query = "SELECT * FROM master_data WHERE name = '$deviceid'";
    $qry_result = mysql_query($query) or die(mysql_error());
    //Build Result String
    // Insert a new row in the table for each person returned
    while($row = mysql_fetch_array($qry_result))
	{
  //  $aux = $row['name'];
	$add = $row['add'];
    }
//    $display_string .= "<input type='text' name='aux' value='$aux'  />";
	//  $display_string = $aux;
	//  $t[0] = $aux;
	 // $t[1] = $add;
	 // echo $t[0];
//	  echo $t[1];
	  
//	  echo $add;
	if(isset($add))
	{
 		 echo trim($add);
 	}
 	else
 	{
 		echo "";
 	}
	
    ?>