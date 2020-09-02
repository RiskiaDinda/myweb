<?php 
$koneksi = mysqli_connect("localhost","root","", "db_web"); //sesuaikan dengan password dan username mysql anda

if(!$koneksi){
	echo "koneksi database gagal";
}
?> 