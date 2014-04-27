<?php
	include ("val.php");
require_once "cn.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

	$sql = "select DISTINCT lami_det as lami_det from master_data where lami_det LIKE '%$q%'";
//$sql = "select * course_name as course_name from course where course_name LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['lami_det'];
	echo "$cname\n";
}
?>