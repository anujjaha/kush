<html>
<head>
<title>Email</title>
</head>
<body>
<?
	$strTo = "er.anujjaha@gmail.com";
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
	$strFilesName1 = "02-03-2014_Report.csv";
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
		echo "Mail send completed.";
	}
	else
	{
		echo "Cannot send mail.";
	}
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->