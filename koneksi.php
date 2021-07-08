<?php
	$db="dempster";
	$koneksi=mysqli_connect("localhost","root","",$db);
	$result=mysqli_select_db($koneksi,$db);
	
	if(!$koneksi){
		echo"<center><font color='#ff0000'>Koneksi Gagal</font></center>";
		}
?>