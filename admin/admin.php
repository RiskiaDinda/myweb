<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

	<h1>Welcome to Admin Page</h1>
<form action="login.php" method="post">
	<div class="kotak_login">
		<p class="tulisan_login">Login</p>

		<form>
			<label>Username/ID</label>
			<input type="text" name="username" class="form_login" placeholder="Username or ID ..">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br>
		</form>
		
	</div>
</form>


</body>
</html>