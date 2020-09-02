<?php 

$koneksi=mysqli_connect("localhost", "root", "", "db_web");

$nama = $_POST['nama'];
$komentar = $_POST['komentar'];

$query=mysqli_query($koneksi, "INSERT INTO komen VALUES('','$nama','$komentar')");

header("location:profile.php");

?>