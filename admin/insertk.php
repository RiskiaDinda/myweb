<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Input Success";
	}else if($pesan == "update"){
		echo "Update Success";
	}else if($pesan == "hapus"){
		echo "Delete Success";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>EDIT CONCERT</h1>
<form action="insertk_proses.php" method="post">
	<div class="kotak_login">
		<p class="tulisan_login">Concerts and Tours</p>

		<form>
			<label>Concerts</label>
			<input type="text" name="nama" class="form_login" placeholder="Concerts">

			<label>Dates</label>
			<input type="text" name="tanggal" class="form_login" placeholder="Dates">

			<label>Countries</label>
			<input type="text" name="kota" class="form_login" placeholder="Countries">

			<input type="submit" class="tombol_login" value="INSERT"><br>

			<br/>
			<br>
		</form>

		<a href="homead.php#news"> << Back</a>
		
	</div>
</form>


</body>
</html>