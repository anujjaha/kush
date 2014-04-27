<?php
//	session_start();
?>
 <?php
    $dbhost = "localhost";
    $dbuser = "cybera_adm";
    $dbpass = "cbymsde#2a";
    $dbname = "cybera_db";
    //Connect to MySQL Server
    mysql_connect($dbhost, $dbuser, $dbpass);
    //Select Database
    mysql_select_db($dbname) or die(mysql_error());
	?>