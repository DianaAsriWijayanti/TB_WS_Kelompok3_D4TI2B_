<!DOCTYPE html>
<html>
<head>
	<title>Crud Backend Ionic</title>
</head>
<body>
	<center>
		<h1>Crud Backend Ionic</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url().'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NPM</td>
				<td><input type="number" name="npm"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td>Pesan</td>
				<td><input type="text" name="pesan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>