<?php
	if(isset($_POST['submit'])){
		require_once('fpdf/Code39.php');

		$nomor = $_POST['nomor'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$tempat = $_POST['tempat'];
		$tanggal = $_POST['tanggal'];

		$pdf = new PDF_Code39();
		$pdf->AddPage();
		$pdf->Image('images/depan_cetak.jpg', 10, 10,180, 50);

		$pdf->AddFont('courier','','courier.php');	
		$pdf->SetFont('courier','b',11);
		$pdf->SetXY(55, 29);
		$pdf->SetFont('Arial','B',7);
		$pdf->Cell(9.5,7,$nomor,0,4,'L');
		$pdf->SetXY(55, 33);
		$pdf->Cell(9.5,7,$nama,0,4,'L');
		$pdf->SetXY(55, 40);
		$pdf->Cell(9.5,7,$jk,0,4,'L');
		$pdf->SetXY(55, 44);
		$pdf->Cell(9.5,7,$tempat,0,4,'L');
		$pdf->SetXY(55, 48);
		$pdf->Cell(9.5,7,$tanggal,0,4,'L');

		$pdf->Image('images/depan_cetak.jpg', 10,65,180, 50);
		$pdf->AddFont('courier','','courier.php');	
		$pdf->SetFont('courier','b',11);
		$pdf->SetXY(55, 29+55);
		$pdf->SetFont('Arial','B',7);
		$pdf->Cell(9.5,7,$nomor,0,4,'L');
		$pdf->SetXY(55, 33+55);
		$pdf->Cell(9.5,7,$nama,0,4,'L');
		$pdf->SetXY(55, 40+55);
		$pdf->Cell(9.5,7,$jk,0,4,'L');
		$pdf->SetXY(55, 44+55);
		$pdf->Cell(9.5,7,$tempat,0,4,'L');
		$pdf->SetXY(55, 48+55);
		$pdf->Cell(9.5,7,$tanggal,0,4,'L');

		$pdf->Output();
	}
?>