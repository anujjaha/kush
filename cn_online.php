<?php
//	session_start();
?>
 <?php
    $dbhost = "localhost";
    $dbuser = "xperthr_cybera";
    $dbpass = "cybera@123";
    $dbname = "xperthr_cybera";
    //Connect to MySQL Server
    mysql_connect($dbhost, $dbuser, $dbpass);
    //Select Database
    mysql_select_db($dbname) or die(mysql_error());
	?>