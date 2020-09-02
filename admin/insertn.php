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

	<h1>EDIT NEWS</h1>
<form action="insert_proses.php" method="post">
	<div class="kotak_login">
		<p class="tulisan_login">News</p>

		<form>
			<label>Title</label>
			<input type="text" name="Judul" class="form_login" placeholder="Title">

			<label>Description</label>
			<textarea class='form_login' placeholder='Description' name='Deskripsi'></textarea>

			<label>Link</label>
			<input type="text" name="Link" class="form_login" placeholder="Link">

			<input type="submit" class="tombol_login" value="INSERT"><br>

			<br/>
			<br>
		</form>

		<a href="homead.php#news"> << Back</a>
		
	</div>
</form>


</body>
</html>