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
			$this->Cell( 0, 9, 'Krishna  Multi Print Pvt Ltd.', 1, 1, 'C' );
			
			$this->ln( 5 );
		}
		
	
		function Footer() {
			//move pionter at the bottom of the page
			$this->SetY( -15 );
			
			//set font to Arial, Bold, size 10
			$this->SetFont( 'Arial', 'B', 10 );
			
			//set font color to blue
			$this->SetTextColor( 52, 98, 185 );
			
			$this->Cell( 0, 10, 'www.krishnamultiprint.com', 0, 0, 'L' );
			
			//set font color to gray
			$this->SetTextColor( 150, 150, 150 );
			
			//write Page No
			$this->Cell( 0, 10, 'Page No: ' . $this->PageNo(), 0, 0, 'R' );
		}
	}
	
	
	$fpdf = new PDF();
	
	$fpdf->AddPage(); //add a page in pdf document
	
	$fpdf->SetFont( 'Arial', 'B', 15 ); //set font to Arial, Bold, and 14 Size
	$fpdf->MultiCell( 0, 6, " Order Date :" .  $_GET['date']."                                   Form Order Number :" .  $_GET['f_num'] ."\nClient Name : " . $_GET['data'] , 0, 1 );
	
	$fpdf->ln( 5 );
	
	$fpdf->SetFont( 'Arial', '', 12 ); //set font to Arial, Regular, and 12 Size
	
	//6 - line height
	//text to be displayed
	$fpdf->Write( 6,
		     "Client Address : " .  $_GET['add'] . "         Contact Number : " . $_GET['mob'] ."\n" . "Job Name : ". $_GET['j_name'] ."                                 Machine Name : ". $_GET['m_name']."\n Paper Details : ". $_GET['p_name'] . "             Paper Cutting : " . $_GET['c_size'] ."\n Printing Details : ". $_GET['print_det'] . "             Lamination Details : " . $_GET['lami_det'] ."\n Total Sheets : ". $_GET['tot_shet'] . "   Pulling : " . $_GET['p_ling'] ."        Paper By : ". $_GET['p_by']."\n More Details : " . $_GET['more']) ;
	
	$fpdf->Image( 'myImage.jpg', 45, 85 );
	
	$fpdf->ln( 50 );
	
	$fpdf->Write( 5,"                                          Client Name : " . $_GET['data'] .  "\n\nClient Address : " .  $_GET['add'] . "         Contact Number : " . $_GET['mob'] ."\n" . "Job Name : ". $_GET['j_name'] ."                                 Machine Name : ". $_GET['m_name']."\n Paper Details : ". $_GET['p_name'] . "             Paper Cutting : " . $_GET['c_size'] ."\n Printing Details : ". $_GET['print_det'] . "             Lamination Details : " . $_GET['lami_det'] ."\n Total Sheets : ". $_GET['tot_shet'] . "   Pulling : " . $_GET['p_ling'] ."        Paper By : ". $_GET['p_by']);
	
	$fpdf->Output(); //generate pdf file and send it to client
?>
<head>
	<title>
		Krishna Multi Print [ Client Reciept]
	</title>
</head>
