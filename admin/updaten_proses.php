<?php 

include 'koneksi.php';

// $size = count($_POST['No']);

// $i=0;

// while ($i < $size) {
	$No = $_POST['No'];
	$Judul = $_POST['Judul'];
	$Deskripsi = $_POST['Deskripsi'];
	$Link = $_POST['Link'];

	$query=mysqli_query($koneksi, ("UPDATE news SET Judul='$Judul', Deskripsi='$Deskripsi', Link='$Link' WHERE No='$No'"));

	// if ($query) {
	// 	echo "1";
	// }
	header("location:updaten.php?pesan=update");

// 	++$i;
// }

?>
