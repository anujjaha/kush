<?php
	include ("val.php");
require_once "cn.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT c_size as c_size from master_data where c_size LIKE '%$q%'";
//$sql = "select * course_name as course_name from course where course_name LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['c_size'];
	echo "$cname\n";
}
?>