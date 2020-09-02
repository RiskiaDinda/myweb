<?php 
session_start();

// koneksi database
include ('koneksi.php');
 
// menangkap data yang di kirim dari form
if (isset($_POST['submit'])) {
	
	$Judul = $_POST['Judul'];
	$Deskripsi = $_POST['Deskripsi'];
	$Link = $_POST['Link'];

	$query = "INSERT INTO news VALUES('$Judul','$Deskripsi','$Link')";

	mysqli_query($koneksi, $query);
 
	// mengalihkan halaman kembali ke index.php
	header("location:../news.php");

}
 
?>