<!DOCTYPE html>
<html>
<head>
<?php include('koneksi.php');?>
	<meta charset="utf-8">
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-3.2.0.js"></script> 
    <script src="js/popper.js"></script> 
    <script src="js/bootstrap.js"></script>
	<title>DIAGNOSIS</title>
	<style>
    .card{
        margin: 100px; 
            }      
.site-heading {
  margin-top: 5rem;
  margin-bottom: 5rem;
  text-transform: uppercase;
  line-height: 1;
  font-family: 'Raleway';
  color: #343b40;
}

.site-heading .site-heading-upper {
  display: block;
  font-size: 2rem;
  font-weight: 800;
  color:red;
}

.site-heading .site-heading-lower {
  font-size: 5rem;
  font-weight: 100;
  line-height: 4rem;
}
</style>

</head>

<body>
<h1 class="site-heading text-center d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Diagnosa Penyakit Hipertiroid dan Hipotiroid</span>
    <span class="site-heading-lower">Sistem Pakar</span>
  </h1>
    <!-- ======= Navbar ======= -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">S I S T E M   P A K A R</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a class="btn btn-dark mr-3" href="home.php">Home</a></li>
        <li class="nav-item"><a class="btn btn-dark mr-3" href="diagnosis.php">Diagnosis</a></li>
        <li class="nav-item"><a class="btn btn-dark mr-3" href="tentang.php">Tentang</a></li>
        
    </ul> 
    </nav>
    <!-- ======= End Navbar ======= -->
			<!-- Home Page Content -->
	<div class="container">

 		<div class="card border-0 shadow my-5 body p-5 bg-info">
      	<h3 class="card-text text-center">Diagnosa Penyakit Hipertiroid dan Hipotiroid</h3>
		<h2 class="mt-5"></h2>
	
		<div class="bs-example">
    <div class="card bg-light">
        <div class="card-header text-center">Hasil Diagnosa</div>
        <div class="card-body">


<?php
 	$g1  = $_POST['g1'];
    $g2  = $_POST['g2'];
    $g3  = $_POST['g3'];
    $g4  = $_POST['g4'];
    $g5  = $_POST['g5'];
    $g6  = $_POST['g6'];
    $g7  = $_POST['g7'];
    $g8  = $_POST['g8'];
    $g9  = $_POST['g9'];
    $g10 = $_POST['g10'];
    $g11 = $_POST['g11'];
    $g12 = $_POST['g12'];
    $g13 = $_POST['g13'];
    $g14 = $_POST['g14'];
    $g15 = $_POST['g15'];
    $g16 = $_POST['g16'];
    $g17 = $_POST['g17'];
    $g18 = $_POST['g18'];
    $g19 = $_POST['g19'];
    $g20 = $_POST['g20'];
    $g21 = $_POST['g21'];
    $g22 = $_POST['g22'];
    $g23 = $_POST['g23'];
    $g24 = $_POST['g24'];
    $g25 = $_POST['g25'];
    $g26 = $_POST['g26'];
    $g27 = $_POST['g27'];

// Rule 1 = IF Cemas AND Diare THEN H1
    $mp11 = $g15;
    $mo11 = 1 - $g15;

    $mp12 = $g23;
    $mo12 = 1 - $g23;
    $mp13 = ( $mp11 * $mp12 ) + ( $mp11 * $mo12 ) + ( $mo12 * $mp12 );
    $mo13 = $mo11 * $mo12;

// RULE 2 = IF Cemas AND Konstipasi THEN H1
    $mp21 = $g15;
    $mo21 = 1 - $g15;

    $mp22 = $g24;
    $mo22 = 1 - $g24;
    $mp23 = ( $mp21 * $mp22 ) + ( $mp21 * $mo22 ) + ( $mo22 * $mp22 );
    $mo23 = $mo21 * $mo22;

// RULE 3 = IF Cemas AND Gangguan Menstruasi THEN H2
    $mp31 = $g15;
    $mo31 = 1 - $g15;

    $mp32 = $g25;
    $mo32 = 1 - $g25;
    $mp33 = ( $mp31 * $mp32 ) + ( $mp31 * $mo32 ) + ( $mo31 * $mp32 );
    $mo33 = $mo31 * $mo32;

// RULE 4 = IF Pergerakan Lambat THEN H2
    $mp41 = $g16;
    $mo41 = 1 - $g16;


// RULE 5 = IF Konsentrasi Menurun AND Tidak tahan panas THEN H1
    $mp51 = $g17;
    $mo51 = 1 - $g17;

    $mp52 = $g1;
    $mo52 = 1 - $g1;
    $mp53 = ( $mp51 * $mp52 ) + ( $mp51 * $mo52 ) + ( $mo51 * $mp52 );
    $mo53 = $mo51 * $mo52;

// RULE 6 = IF Konsentrasi Menurun AND Berkeringat Berlebihan THEN H1
    $mp61 = $g17;
    $mo61 = 1 - $g17;

    $mp62 = $g2;
    $mo62 = 1 - $g2;
    $mp63 = ( $mp61 * $mp62 ) + ( $mp61 * $mo62 ) + ( $mo61 * $mp62 );
    $mo63 = $mo61 * $mo62;

// RULE 7 = IF Konsentrasi Menurun AND Tidak Berkeringat AND Diare THEN H1
    $mp71 = $g17;
    $mo71 = 1 - $g17;

    $mp72 = $g3;
    $mo72 = 1 - $g3;
    $mp73 = ( $mp71 * $mp72 ) + ( $mp71 * $mo72 ) + ( $mo71 * $mp72 );
    $mo73 = $mo71 * $mo72;

    $mp74 = $g23;
    $mo74 = 1 - $g23;
    $mp75 = ( $mp73 * $mp74 ) + ( $mp73 * $mo74) +( $mo73 * $mp74 );
    $mo75 = $mo73 * $mo74;

// RULE 8 = IF Konsentrasi Menurun AND Tidak Berkeringat AND Konstipasi THEN H2
    $mp81 = $g17;
    $mo81 = 1 - $g17;

    $mp82 = $g3;
    $mo82 = 1 - $g3;
    $mp83 = ( $mp81 * $mp82 ) + ( $mp81 * $mo82 ) + ( $mo81 * $mp82 );
    $mo83 = $mo81 * $mo82;

    $mp84 = $g24;
    $mo84 = 1 - $g24;
    $mp85 = ( $mp83 * $mp84 ) + ( $mp83 * $mo84) +( $mo83 * $mp84 );
    $mo85 = $mo83 * $mo84;

// RULE 9 = IF Konsentrasi Menurun AND Tidak Berkeringat AND Gangguan Menstruasi THEN H2
    $mp91 = $g17;
    $mo91 = 1 - $g17;

    $mp92 = $g3;
    $mo92 = 1 - $g3;
    $mp93 = ( $mp91 * $mp92 ) + ( $mp91 * $mo92 ) + ( $mo91 * $mp92 );
    $mo93 = $mo91 * $mo92;

    $mp94 = $g25;
    $mo94 = 1 - $g25;
    $mp95 = ( $mp93 * $mp94 ) + ( $mp93 * $mo94) +( $mo93 * $mp94 );
    $mo95 = $mo93 * $mo94;

// RULE 10 = IF Konsentrasi Menurun AND Tidak Tahan Dingin AND Mata Menonjol Keluar THEN H1
    $mp101 = $g17;
    $mo101 = 1 - $g17;

    $mp102 = $g4;
    $mo102 = 1 - $g4;
    $mp103 = ( $mp101 * $mp102 ) + ( $mp101 * $mo102 ) + ( $mo101 * $mp102 );
    $mo103 = $mo101 * $mo102;

    $mp104 = $g8;
    $mo104 = 1 - $g8;
    $mp105 = ( $mp103 * $mp104 ) + ( $mp103 * $mo104) +( $mo103 * $mp104 );
    $mo105 = $mo103 * $mo104;

// RULE 11 = IF Konsentrasi Menurun AND Tidak Tahan Dingin AND Kelopak Mata Bengkak THEN H2
    $mp111 = $g17;
    $mo111 = 1 - $g17;

    $mp112 = $g4;
    $mo112 = 1 - $g4;
    $mp113 = ( $mp111 * $mp112 ) + ( $mp111 * $mo112 ) + ( $mo111 * $mp112 );
    $mo113 = $mo111 * $mo112;

    $mp114 = $g9;
    $mo114 = 1 - $g9;
    $mp115 = ( $mp113 * $mp114 ) + ( $mp113 * $mo114) +( $mo113 * $mp114 );
    $mo115 = $mo113 * $mo114;

  

 $nilai = max( $mp13, $mp23, $mp33, $mp41, $mp53, $mp63, $mp75, $mp85, $mp95, $mp105, $mp115);


    $p1 = $mp13;
    $p2 = $mp23;
    $p3 = $mp53;
    $p4 = $mp63;
    $p5 = $mp75;
    $p6 = $mp105;

    $p7 = $mp33;
    $p8 = $mp41;
    $p9 = $mp85;
    $p10 = $mp95;
    $p11 = $mp115;

    if ( $nilai == $p1 and $p1 > 0) {
		$penyakit     = "Hipertiroid";
		$angka = $p1/1.15*100;
		$persentase=round($angka,0);
    }

    if ( $nilai == $p2 and $p2 > 0 ) {
        $penyakit     = "Hipertiroid";
        $angka = $p2/1.15*100;
        $persentase=round($angka,0);
    }
        if ( $nilai == $p3 and $p3 > 0) {
		$penyakit     = "Hipertiroid";
		$angka = $p3/1.15*100;
		$persentase=round($angka,0);
    }

    if ( $nilai == $p4 and $p4 > 0 ) {
        $penyakit     = "Hipertiroid";
        $angka = $p4/1.15*100;
        $persentase=round($angka,0);
    }
        if ( $nilai == $p5 and $p5 > 0) {
		$penyakit     = "Hipertiroid";
		$angka = $p5/1.15*100;
		$persentase=round($angka,0);
    }

    if ( $nilai == $p6 and $p6 > 0 ) {
        $penyakit     = "Hipertiroid";
        $angka = $p6/1.15*100;
        $persentase=round($angka,0);
    }
        if ( $nilai == $p7 and $p7 > 0) {
		$penyakit     = "Hipotiroid";
		$angka = $p7/1.15*100;
		$persentase=round($angka,0);
    }

    if ( $nilai == $p8 and $p8 > 0 ) {
        $penyakit     = "Hipotiroid";
        $angka = $p8/1.15*100;
        $persentase=round($angka,0);
    }
        if ( $nilai == $p9 and $p9 > 0) {
		$penyakit     = "Hipotiroid";
		$angka = $p9/1.15*100;
		$persentase=round($angka,0);
    }

    if ( $nilai == $p10 and $p10 > 0 ) {
        $penyakit     = "Hipotiroid";
        $angka = $p10/1.15*100;
        $persentase=round($angka,0);
    }
        if ( $nilai == $p11 and $p11 > 0) {
		$penyakit     = "Hipotiroid";
		$angka = $p11/1.15*100;
		$persentase=round($angka,0);
    }


        if ( $p1 == 0 and $p2== 0 and $p3==0 and $p4==0 and $p5==0 and $p6==0 and $p7==0 and $p8==0 and $p9==0 and $p10==0 and $p11==0) {
        $penyakit = "Anda Tidak Terdeteksi Hipertiroid atau Hipotiroid.";
        $persentase= "100";
    }


    $data = mysqli_query($koneksi,"select * from user order by id desc limit 1");
						while($d = mysqli_fetch_array($data)){
?>

							<tr>
								<td><p>Hasil Diagnosa : </p></td>
								<td><p><b><?php echo "Diagnosa Awal Penyakit :  $penyakit"; ?></b></p></td>
								<td><p><b><?php echo "Dengan Persentase Sebesar : $persentase %"; ?></b></p></td>
                                <td><p><b><?php echo "Anjuran : Diagnosis Ini Tidak Bersifat Mutlak dan Tetap Memerlukan Pemeriksaan Lebih Lanjut."; ?></b></p></td> 
                                <td><p><b><?php echo "Periksakan Diri Anda Ke Dokter Spesialis Penyakit Dalam."; ?></b></p></td> 
                                
							</tr>
							
							</tr><?php } ?> 
                            <?php 
                        $sql="UPDATE user SET persentase='$persentase', penyakit='$penyakit' order by id desc limit 1";
                        $result = mysqli_query($koneksi,$sql);
                        ?>
    
        <hr>
        </div>
        <div class="container text-center">
        <a href="pdf.php"class="btn btn-warning mt-5" role="button">Simpan sebagai pdf</a>
        <p></p>
    	<a href="home.php"class="btn btn-success mt-5" role="button">Home</a>
    	<h2 class="mt-5"></h2>
    	</div>
    </div>
</div>
 		</div>
	</div>
			<!-- End Home Page Content -->
		<!-- ======= Footer ======= -->
 <footer id="sticky-footer" class="py-3 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Hipertiroid dan Hipotiroid</small>
    </div>
  </footer>
		<!-- ======= End Footer ======= -->
</body>
</html>
