<?php 

include "koneksi.php";
$result=mysqli_query($koneksi, "SELECT *FROM news");  

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body style="align-items: center;">

	<table border="1px">
		<tr align="center">
			<td>No</td>
			<td width="300px">Title</td>
			<td>Description</td>
			<td>Link</td>			
		</tr>
		<?php while ($row=mysqli_fetch_assoc($result)): ?>	

		<tr>
			<td><?php echo $row["No"]; ?></td>
			<td><?php echo $row["Judul"]; ?></td>
			<td><?php echo $row["Deskripsi"]; ?></td>
	 		<td><?php echo $row["Link"]; ?></td>	
		</tr>

		<?php endwhile; ?>

		</table>

</body>
</html>