<?php
	session_start();
require_once "cn.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT vnum as vnum from master_data where vnum LIKE '%$q%'";
//$sql = "select * course_name as course_name from course where course_name LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['vnum'];
	echo "$cname\n";
}
?>