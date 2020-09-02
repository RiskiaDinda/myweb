<?php 

include 'koneksi.php';

$size = count($_POST['id']);

$i=0;

while ($i < $size) {
	$id = $_POST['id'][$i];
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$kota = $_POST['kota'];

	$query=mysqli_query($koneksi, ("UPDATE konser SET nama='$nama', tanggal='$tanggal', kota='$kota' WHERE id='$id'"));

	header("location:updatek.php?pesan=update");

	++$i;
}

?>
