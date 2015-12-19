<?php
include "fpdf.php";
include "../koneksi.php";

$pdf = new FPDF();
$pdf -> AddPage();

$pdf -> SetFont('Arial','B',16);
$pdf -> Cell(0,5,'Taman Pendidikan Al-Quran Baitul Hamim','0','1','C',false);
$pdf -> SetFont('Arial','i',8);
$pdf -> Cell (0,5,'Alamat : Link.Sumber Batu Rt/Rw = 05/05 Cilegon, Banten','0','1','C', false);
$pdf ->Ln(3);
$pdf ->Cell(190,0.6,'','0','1','c',true);
$pdf ->Ln(5);

$pdf ->SetFont('Arial','B',9);
$pdf ->Cell(50,5,'Laporan Biodata Ustadz','0','1','L',false);
$pdf ->Ln(3);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(9,7,'No.',1,0,'C');
$pdf->Cell(20,7,'User ID',1,0,'C');
$pdf->Cell(25,7,'Nama Depan',1,0,'C');
$pdf->Cell(30,7,'Nama Belakang',1,0,'C');
$pdf->Cell(30,7,'Jenis Kelamin',1,0,'C');
$pdf->Cell(30,7,'Tempat Lahir',1,0,'C');
$pdf->Cell(30,7,'Tanggal Lahir',1,0,'C');
$pdf->Cell(20,7,'Alamat',1,0,'C');
$pdf->Ln(2);
$no = 0;
$sql = mysql_query ("select * from ustadz order by user_id asc");
while($data = mysql_fetch_array($sql)){
	$no++;
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(9,4,$no.".",1,0,'C');
	$pdf->Cell(20,4,$data['user_id'],1,0,'L');
	$pdf->Cell(25,4,$data['nama_depan'],1,0,'L');
	$pdf->Cell(30,4,$data['nama_belakang'],1,0,'L');
	$pdf->Cell(30,4,$data['JK'],1,0,'L');
	$pdf->Cell(30,4,$data['tempat_lahir'],1,0,'L');
	$pdf->Cell(30,4,$data['tanggal_lahir'],1,0,'L');
	$pdf->Cell(20,4,$data['alamat'],1,0,'L');
}
$pdf->Output();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>