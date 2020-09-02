<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$password = hash("sha512", $password);

// echo $password;

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
// mysqli_free_result($data);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:homead.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>