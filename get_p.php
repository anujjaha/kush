<?php
	include ("val.php");
require_once "cn.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT service as service from master_service where service LIKE '%$q%'";
//$sql = "select * course_name as course_name from course where course_name LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$service = $rs['service'];
	echo "$service\n";
}
?>