<?php
	include ("val.php");
require_once "cn.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT p_name as p_name from master_data where p_name LIKE '%$q%'";
//$sql = "select * course_name as course_name from course where course_name LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['p_name'];
	echo "$cname\n";
}
?>