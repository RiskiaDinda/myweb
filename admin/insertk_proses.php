<?php 

include 'koneksi.php';

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$kota = $_POST['kota'];

mysqli_query($koneksi, "INSERT INTO konser VALUES('','$nama','$tanggal','$kota')");

header("location:insertk.php?pesan=input");

?>
