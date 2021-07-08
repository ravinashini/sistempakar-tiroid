<!DOCTYPE html>
<html>
<head>
<?php include('koneksi.php');?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.2.0.js"></script> 
	<script src="js/popper.js"></script> 
	<script src="js/bootstrap.js"></script>
	<title>DIAGNOSIS</title>
</head>
<body>
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
		<!-- ======= Diagnosis Page ======= -->
	<div class="container">
		<div class="card border-0 shadow my-5 body p-5 bg-light">
		<h3 class="card-text text-center">Diagnosa Penyakit Hipertiroid dan Hipotiroid</h3>
		<p class="mt-3"></p>
			<div class="card bg-success bg-info">
    		<div class="card-body text-center">
    		 <p class="card-text">Informasi Biodata Diri</p> </div>
			<div class="container">
  				<p class="text-danger">* Masukkan Biodata Diri anda secara benar.</p>
  						<!-- Form -->
	  			<form method="post" action="diagnosis_gejala.php" class="needs-validation">
		    		<div class="form-group">
			      	<label for="nama">Nama : </label>
			      	<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
			      	<div class="valid-feedback"></div>
			      	<div class="invalid-feedback">Masukkan Nama Anda.</div>
			    	</div>
				    <div class="form-group">
				    <label for="umur">Umur :</label>
				    <input type="text" class="form-control" id="umur" placeholder="Masukkan Umur" name="umur" required>
				    <div class="valid-feedback"></div>
				    <div class="invalid-feedback">Masukkan Umur Anda.</div>
				    </div>
	    			<p class="mt-4"></p>
	    			<div class="col text-center">
					<a href="home.php" class="btn btn-danger" role="button">Kembali</a>
					<button type="submit" name="save" class="btn btn-warning ml-5">Lanjutkan</button>
					</div>
					<h2 class="mt-5"></h2>
	  				</form>
  			</div>
  			</div>
		</div>
	</div>
			<!-- Script Form -->
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
		<!-- ======= End Diagnosis Page ======= -->
		<!-- ======= Footer ======= -->
	<footer id="sticky-footer" class="py-3 bg-dark text-white-50">
	    <div class="container text-center">
	      <small>Copyright &copy; Hipertiroid dan Hipotiroid</small>
	    </div>
	</footer>
		<!-- ======= End Footer ======= -->
</body>
</html>