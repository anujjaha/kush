<?php
	require_once( 'fpdf.php' );
	
	
	class PDF extends FPDF {
		function Header() {
			$this->SetFont( 'Arial', 'B', 18 ); //set font to Arial, Bold, and 16 Size
	
			//create heading with params
			//0 - 100% width
			//9 height
			//"Page Heading" - With this text
			//1 - border around it, and center aligned
			//1 - Move pionter to new line after writing this heading
			//'C' - center aligned
//			$this->Cell( 0, 9, 'Krishna  Multi Print Pvt Ltd.', 1, 1, 'C' );
			
			$this->ln( 5 );
		}
		
	
		function Footer() {
			//move pionter at the bottom of the page
			$this->SetY( -15 );
			
			//set font to Arial, Bold, size 10
			$this->SetFont( 'Arial', 'B', 10 );
			
			//set font color to blue
			$this->SetTextColor( 52, 98, 185 );
			
			$this->Cell( 0, 10, 'www.cybera.in', 0, 0, 'L' );
			
			//set font color to gray
			$this->SetTextColor( 150, 150, 150 );
			
			//write Page No
			$this->Cell( 0, 10, 'Page No: ' . $this->PageNo(), 0, 0, 'R' );
		}
	}
	
	
	$fpdf = new PDF();
	
	$fpdf->AddPage(); //add a page in pdf document
	
	$fpdf->SetFont( 'Arial', 'B', 16); //set font to Arial, Bold, and 14 Size
	
	//$fpdf->MultiCell( 0, 6, "                                       Cybera Multi Print\n\n" , 0, 1 );
	$fpdf->SetFont( 'Arial', 'B', 9); 
	$fpdf->MultiCell( 0, 6, "".$_GET['tin_tax']." ".$_GET['tin'] , 0, 1 );
	
	$fpdf->SetFont( 'Arial', 'B', 9); //set font to Arial, Bold, and 14 Size
	$fpdf->MultiCell( 0, 6, "Client Name   : " .  $_GET['a1']."\n\nDate : ".$_GET['a2'] ."                                     Voucher Num : " .$_GET['a4']   , 0, 1 );
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->MultiCell( 0, 6, "Mobile : " .  trim($_GET['a3'])."                        Reciever Name : ". $_GET['a6'] , 0, 1 );
	
	$fpdf->ln( 5 );
	
	$fpdf->SetFont( 'Arial', '', 9 ); //set font to Arial, Regular, and 12 Size
	
	//6 - line height
	//text to be displayed
	$space = "        ";
	$space1 = "                      ";
	$space2 = "                      ";
	$space3 = "   ";
	$adspace = "                                   ";
	$acspace = "                                         ";
	$first ="                     ";
	$jspace ="                                                                ";
	$pspace ="                                         ";
	$ppspace ="                                                                   ";
	$fpdf->MultiCell( 0, 6, "                                                                             Purchased Item List", 0, 1 );

	$fpdf->MultiCell( 0, 6, "Product Name                 Quantity              Price P/p                 Total", 0, 1 );
$fpdf->Write( 6,$_GET['a9'] . "$space" . "$space3".$_GET['a10']."$space1" . $_GET['a11']."$space1". $_GET['a12'],0,1);
	
	$fpdf->MultiCell( 0, 6, "", 0, 1 );

$fpdf->Write( 6,$_GET['a13'] ."$space"."$space3".$_GET['a14']."$space1" . $_GET['a15']."$space1". $_GET['a16'],0,1);

//	$fpdf->Write( 6,$_GET['a13'] . "$space" . $_GET['a14']."$space1" . $_GET['a15']."$space2". $_GET['a16'],0,1);
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->Write( 6,$_GET['a17'] . "$space" . $_GET['a18']."$space1" . $_GET['a19']."$space2". $_GET['a20'],0,1);
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->Write( 6,$_GET['a21'] . "$space" . $_GET['a22']."$space1" . $_GET['a23']."$space2". $_GET['a24'],0,1);
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->Write( 6,$_GET['a25'] . "$space" . $_GET['a26']."$space1" . $_GET['a27']."$space2". $_GET['a28'],0,1);
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	
	
	$fpdf->Write( 5,$_GET['a29'] . "$space" . $_GET['a30']."$space1" . $_GET['a31']."$space2". $_GET['a32'],0,1);
//	$fpdf->Write( 6,$_GET['a29'] . "$space" . $_GET['a30']."$space1" . $_GET['a31']."$space2". $_GET['a32'],0,1);
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->Write( 5,$_GET['a33'] . "$space" . $_GET['a34']."$space1" . $_GET['a35']."$space2". $_GET['a36'],0,1);
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->Write( 5,$_GET['a37'] . "$space" . $_GET['a38']."$space1" . $_GET['a39']."$space2". $_GET['a40'],0,1);
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->Write( 5,$_GET['a41'] . "$space" . $_GET['a42']."$space1" . $_GET['a43']."$space2". $_GET['a44'],0,1);
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->Write( 5,$_GET['a45'] . "$space" . $_GET['a46']."$space1" . $_GET['a47']."$space2". $_GET['a48'],0,1);
	$fpdf->MultiCell( 0, 6, "", 0, 1 );


	
		$fpdf->MultiCell( 0, 6, "Main Total : ".$_GET['e1'], 0, 1 );
		
			$fpdf->MultiCell( 0, 6, "Transport Cost : ".$_GET['a50'], 0, 1 );
			
			$fpdf->MultiCell( 0, 6, "Vat : ".$_GET['e4'], 0, 1 );
			
	$fpdf->MultiCell( 0, 6, "Tax : ".$_GET['a49'], 0, 1 );


	$fpdf->MultiCell( 0, 6, "Grand Total : ".$_GET['a51'], 0, 1 );  
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->Write( 5,"Remarks : ".$_GET['e2'],0,1);
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->MultiCell( 0, 6, "", 0, 1 );
	$fpdf->Write( 5,"Voucher Generated By : ".$_GET['e3'],0,1);
//	$fpdf->Write( 5,$_GET['a37'] . "$space" . $_GET['a38']."$space1" . $_GET['a39']."$space2". $_GET['a40'],0,1);
	
	
//final line	$fpdf->Write( 6,"\n\n $first" .  $_GET['add'] . "$adspace" . $_GET['m_name']);
//	$fpdf->Write( 6,"\n\n " .  $_GET['add'] . "" . $_GET['m_name']);
	//$fpdf->Write( 6,"\n       " .  $_GET['m6']);
	
//	$fpdf->Image( 'myImage.jpg', 45, 125 );
	
	$fpdf->ln( 50 );
	$d_space = "                                      ";
	$stpace = "                                          ";
	$b_space = "                                             ";
	$pzspace ="                                                                  ";
	$pppspace ="                                                                             ";
	
	//$fpdf->Write( 5,"\n\n $first ". $_GET['tot_shet'] . "$pppspace" . $_GET['p_by']);
	
	$fpdf->Output(); //generate pdf file and send it to client
?>
<head>
	<title>
		Cybera Multi Print [ Client Reciept]
	</title>
</head>
