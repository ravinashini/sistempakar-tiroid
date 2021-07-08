<?php
// memanggil library FPDF
require('/fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'HASIL DIAGNOSA PENYAKIT HIPERTIROID DAN HIPOTIROID',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DENGAN METODE DECISION TREE C4.5 DAN DEMPSTER SHAFER',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(190,7,'',0,1);

$pdf->SetFont('Arial','B',10);

$pdf->Cell(80,6,'PENYAKIT',1,0,'C');
$pdf->Cell(80,6,'PERSENTASE ( % )',1,1,'C');

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from user order by id desc limit 1");
while ($row = mysqli_fetch_array($data)){

    $pdf->Cell(80,6,$row['penyakit'],1,0,'C');
    $pdf->Cell(80,6,$row['persentase'],1,1,'C'); 
}
$pdf->Cell(50,35,'',0,1);
$pdf->Cell(190,7,'Tugas Akhir - 161401012',0,1,'C');
$pdf->Output();
?>