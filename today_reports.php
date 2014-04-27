<?php

// Database Connection
include('cn.php');



// Fetch Record from Database

$output = "";
//$table = "t1"; // Enter Your Table Name 
$sql = mysql_query("select * from $table");
$columns_total = mysql_num_fields($sql);
/*
// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
$heading = mysql_field_name($sql, $i);
$output .= '"'.$heading.'",';
}
$output .="\n";

// Get Records from the table

while ($row = mysql_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file
*/
$fileName = date('d-m-Y')."_Report.csv";
$todayDate = date('d-m-Y');
$data = array('0'=>array('Sr No.','Voucher Number','Name','Date','Amount'));
$query = "select * from master_data where date='$todayDate' order by id ";
//print $query;
$sr = 1;
$run = mysql_query($query);
while($row = mysql_fetch_assoc($run))
{
	echo $row['id'];
	$data[] = array($sr,$row['vnum'],$row['name'],$row['date'],$row['gtot']);
	$sr++;
}

$fp = fopen($fileName, 'w');
print_r($data);
foreach ($data as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);


?>
<html>
<head>
<title>Email</title>
</head>
<body>
<?
	$strTo = "cybera.printart@gmail.com";
	$strSubject = "Today Report Sheet";
	$strMessage = "Dear Sir,
			<br />
			Please find the today report sheet of Cybera Voucher System.
			<br /><br />
			
			Regards,
			<br />
			Cybera Operator";
			
	//*** Uniqid Session ***//
	$strSid = md5(uniqid(time()));

	$strHeader = "";
	$strHeader .= "From: Anuj Jaha<anuj_jaha@yahoo.com>\nReply-To: anuj_jaha@yahoo.com\n";
//	$strHeader .= "Cc: Mr. Anuj Jaha<anuj_jaha@yahoo.com>\n";
//	$strHeader .= "Bcc: test@test.com";

	$strHeader .= "MIME-Version: 1.0\n";
	$strHeader .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";
	$strHeader .= "This is a multi-part message in MIME format.\n";

	$strHeader .= "--".$strSid."\n";
	$strHeader .= "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
	$strHeader .= "Content-Transfer-Encoding: 7bit\n\n";
	$strHeader .= $strMessage."\n\n";
	
	//*** Files 1 ***//
	$strFilesName1 = $fileName;
	$strContent1 = chunk_split(base64_encode(file_get_contents($strFilesName1))); 
	$strHeader .= "--".$strSid."\n";
	$strHeader .= "Content-Type: application/octet-stream; name=\"".$strFilesName1."\"\n"; 
	$strHeader .= "Content-Transfer-Encoding: base64\n";
	$strHeader .= "Content-Disposition: attachment; filename=\"".$strFilesName1."\"\n\n";
	$strHeader .= $strContent1."\n\n";
	
	//*** Files 2 ***//
	/*$strFilesName2 = "offer_letter_anujjaha.pdf";
	$strContent2 = chunk_split(base64_encode(file_get_contents($strFilesName2))); 
	$strHeader .= "--".$strSid."\n";
	$strHeader .= "Content-Type: application/octet-stream; name=\"".$strFilesName2."\"\n"; 
	$strHeader .= "Content-Transfer-Encoding: base64\n";
	$strHeader .= "Content-Disposition: attachment; filename=\"".$strFilesName2."\"\n\n";
	$strHeader .= $strContent2."\n\n";*/

	$flgSend = @mail($strTo,$strSubject,null,$strHeader);  // @ = No Show Error //
	if($flgSend)
	{
	?>
		<script>window.location.assign('index.php');</script>
	<?php
	}
	else
	{
		echo "Cannot send mail.";
	}
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->