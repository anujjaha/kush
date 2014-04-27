<?php
	session_start();
require_once "cn.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT j_name as j_name from master_data where j_name LIKE '%$q%'";
//$sql = "select * course_name as course_name from course where course_name LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['j_name'];
	echo "$cname\n";
}
?>