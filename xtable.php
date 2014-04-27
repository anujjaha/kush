<?php
//	include ("ck.php");


	include ("cn.php");

$q ="CREATE TABLE IF NOT EXISTS `master_pay` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `bill_num` int(11) NOT NULL,
  `bill_type` varchar(200) NOT NULL,
  `name` varchar(300) NOT NULL,
  `ptype` varchar(150) NOT NULL,
  `bname` varchar(300) NOT NULL,
  `bbname` varchar(200) NOT NULL,
  `cnum` varchar(300) NOT NULL,
  `cdate` varchar(300) NOT NULL,
  `camt` varchar(200) NOT NULL,
  `mon` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";

if(mysql_query($q))
{
	echo "done";
}
else
{
	echo "not done"	;
}
	?>