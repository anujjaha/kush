<?php
	include ("val.php");
require_once "cn.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

	$sql = "select DISTINCT p_ling as p_ling from master_data where p_ling LIKE '%$q%'";
//$sql = "select * course_name as course_name from course where course_name LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['p_ling'];
	echo "$cname\n";
}
?>