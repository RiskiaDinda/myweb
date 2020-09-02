<?php 

include 'koneksi.php';

$No = $_POST['No'];
$sql = mysqli_query($koneksi, "DELETE FROM news WHERE No='$No'");

// if($sql){
// 	echo "delete sukses";
// }else{
// 	echo "gagal". mysqli_error($koneksi);
// }


header("location:updaten.php?pesan=hapus");

?>
