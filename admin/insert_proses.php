<?php 

include 'koneksi.php';

$Judul = $_POST['Judul'];
$Deskripsi = $_POST['Deskripsi'];
$Link = $_POST['Link'];

mysqli_query($koneksi, "INSERT INTO news VALUES('','$Judul','$Deskripsi','$Link')");

header("location:insertn.php?pesan=input");

?>
