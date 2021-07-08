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

  </style>
</head>
<body>
  <!-- ======= Navbar ======= -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">S I S T E M   P A K A R</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active"><a class="btn btn-dark mr-3" href="home.php">Home</a></li>
      <li class="nav-item"><a class="btn btn-dark mr-3" href="diagnosis_gejala.php">Diagnosis</a></li>
      <li class="nav-item"><a class="btn btn-dark mr-3" href="tentang.php">Tentang</a></li>
    </ul> 
  </nav>
    <!-- ======= End Navbar ======= -->
    <!-- ======= Diagnosis Page ======= -->
  <div class="container">
    <div class="card border-0 shadow my-5 body p-5 bg-light">
        <div class="card-body text-center"> <h3 class="card-text">Diagnosa Penyakit Hipertiroid dan Hipotiroid</h3> </div>
    <div class="container">
    <p class="mt-4"></p>
        <p class="mt-3"></p>
        <div class="col text-center"></div>
      <h2 class="mt-5"></h2>
      </div>
    <div class="container">
      <div class="card card-body bg-primary text-center bg-info text-white"><p class="text-center"></p>
      <p class="text-white text-left">Petunjuk : </p>
      <p class="text-white text-left">Pastikan anda benar-benar memilih gejala yang anda rasakan untuk mendapatkan diagnosa yang lebih akurat</p>
      <p class="text-white text-left"> Sistem Pakar ini tidak menyimpan informasi apapun tentang anda, jika ingin menyimpan hasil diagnosis, anda bisa menyimpannya sebagai file PDF di halaman selanjutnya.
       <p class="text-white text-left"></p>
      <div class="container text-left">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">

            <!-- ======= Form ======= -->
            <form action="hasil.php" method="post">
                        <!--1-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=1");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g1" value="0.8" required></td>
                                    <td><label for="y1"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g1" value="0"></td>
                                    <td><label for="tdk1"><?php echo $d['pil2'];?></label></td>
                                </tr>
                        </table><br/><br/><?php } ?>
                        <!--2-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=2");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g2" value="0.8" required></td>
                                    <td><label for="tdk2"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g2" value="0"></td>
                                    <td><label for="sdkt2"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--3-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=3");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g3" value="0.8" required></td>
                                    <td><label for="kri"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g3" value="0"></td>
                                    <td><label for="knn"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--4-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=4");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g4" value="0.6" required></td>
                                    <td><label for="1st"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g4" value="0"></td>
                                    <td><label for="2nd"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--5-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=5");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g5" value="0.5" required></td>
                                    <td><label for="tdk5"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g5" value="0"></td>
                                    <td><label for="sdkt5"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--6-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=6");
                        while($d = mysqli_fetch_array($data)){
                        ?>                      
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g6" value="0.8" required></td>
                                    <td><label for="y6"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g6" value="0"></td>
                                    <td><label for="tdk6"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--7-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=7");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g7" value="0.5" required></td>
                                    <td><label for="y7"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g7" value="0"></td>
                                    <td><label for="tdk7"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--8-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=8");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g8" value="0.6" required></td>
                                    <td><label for="y8"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g8" value="0"></td>
                                    <td><label for="tdk8"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--9-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=9");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g9" value="0.6" required></td>
                                    <td><label for="y9"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g9" value="0"></td>
                                    <td><label for="tdk9"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--10-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=10");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g10" value="0.6" required></td>
                                    <td><label for="y10"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g10" value="0"></td>
                                    <td><label for="tdk10"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--11-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=11");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g11" value="0.7" required></td>
                                    <td><label for="y11"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g11" value="0"></td>
                                    <td><label for="tdk11"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--12-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=12");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g12" value="0.5" required></td>
                                    <td><label for="y12"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g12" value="0"></td>
                                    <td><label for="tdk12"><?php echo $d['pil2'];?></label></td>
                                </tr>   
                            </table><br/><br/><?php } ?>
                   
                        <!--13-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=13");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g13" value="0.5" required></td>
                                    <td><label for="y1"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g13" value="0"></td>
                                    <td><label for="tdk1"><?php echo $d['pil2'];?></label></td>
                                </tr>
                        </table><br/><br/><?php } ?>
                        <!--14-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=14");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g14" value="0.5" required></td>
                                    <td><label for="tdk2"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g14" value="0"></td>
                                    <td><label for="sdkt2"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--15-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=15");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g15" value="0.5" required></td>
                                    <td><label for="kri"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g15" value="0"></td>
                                    <td><label for="knn"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--16-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=16");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g16" value="0.9" required></td>
                                    <td><label for="1st"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g16" value="0"></td>
                                    <td><label for="2nd"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--17-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=17");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g17" value="0.5" required></td>
                                    <td><label for="tdk5"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g17" value="0"></td>
                                    <td><label for="sdkt5"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--18-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=18");
                        while($d = mysqli_fetch_array($data)){
                        ?>                      
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g18" value="0.5" required></td>
                                    <td><label for="y6"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g18" value="0"></td>
                                    <td><label for="tdk6"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--19-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=19");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g19" value="0.28" required></td>
                                    <td><label for="y7"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g19" value="0"></td>
                                    <td><label for="tdk7"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--20-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=20");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g20" value="0.6" required></td>
                                    <td><label for="y8"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g20" value="0"></td>
                                    <td><label for="tdk8"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--21-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=21");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g21" value="0.6" required></td>
                                    <td><label for="y9"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g21" value="0"></td>
                                    <td><label for="tdk9"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--22-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=22");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g22" value="0.3" required></td>
                                    <td><label for="y10"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g22" value="0"></td>
                                    <td><label for="tdk10"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--23-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=23");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g23" value="0.6" required></td>
                                    <td><label for="y11"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g23" value="0"></td>
                                    <td><label for="tdk11"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--24-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=24");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g24" value="0.4" required></td>
                                    <td><label for="y12"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g24" value="0"></td>
                                    <td><label for="tdk12"><?php echo $d['pil2'];?></label></td>
                                </tr>   
                            </table><br/><br/><?php } ?>
                        <!--25-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=25");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g25" value="0.4" required></td>
                                    <td><label for="y10"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g25" value="0"></td>
                                    <td><label for="tdk10"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--26-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=26");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g26" value="0.7" required></td>
                                    <td><label for="y11"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g26" value="0"></td>
                                    <td><label for="tdk11"><?php echo $d['pil2'];?></label></td>
                                </tr>
                            </table><br/><br/><?php } ?>
                        <!--27-->
                        <?php
                        $data = mysqli_query($koneksi,"select * from gejala where gid=27");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <p><?php echo $d['gejala'];?></p>
                            <table> 
                                <tr>
                                    <td><input type="radio" name="g27" value="0.4" required></td>
                                    <td><label for="y12"><?php echo $d['pil1'];?></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="g27" value="0"></td>
                                    <td><label for="tdk12"><?php echo $d['pil2'];?></label></td>
                                </tr>   
                            </table><br/><br/><?php } ?>
                 
            </tbody>
        </table>
 
                <div class="container text-center">
                <a href="home.html" class="btn btn-danger " role="button">Batalkan</a>
                <input type="submit" name="save" value="Submit" class="btn btn-warning text-center">
                </div>
    </form>
    </div>
</div>
</div></div></div></div></div></div>
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