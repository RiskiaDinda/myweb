<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Input Success";
	}else if($pesan == "update"){
		echo "Update Success";
	}else if($pesan == "hapus"){
		echo "Deleted Success";
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

	<h1>EDIT NEWS</h1>
<form action="updaten_proses.php" method="post">
	<div class="kotak_login">
		<p class="tulisan_login">News</p>

		<p>
		<a href="datanews.php">Look Data</a>
		</p><br>

		<form>

			<label>No</label>
			<input type="text" name="No" class="form_login" placeholder="No">

			<label>Title</label>
			<input type="text" name="Judul" class="form_login" placeholder="Title">

			<label>Description</label>
			<textarea class='form_login' placeholder='Description' name='Deskripsi'></textarea>

			<label>Link</label>
			<input type="text" name="Link" class="form_login" placeholder="Link">

			<input type="submit" class="tombol_login" value="UPDATE">

			<br/>
			<br>
		</form>
		<form action="deleten_proses.php" method="post">
			<input type="text" name="No" placeholder="No">
			<input type="submit" value="DELETE">
		</form><br>

		<a href="homead.php#news"> << Back </a>
		
	</div>
</form>


</body>
</html>