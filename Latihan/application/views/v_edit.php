<!DOCTYPE html>
<html>
<head>
	<title>Update Data Ionic Backend</title>
</head>
<body>
	<center>
		<h1>Ionic Update Data </h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($thread as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>NPM</td>
				<td><input type="number" name="npm" value="<?php echo $u->npm ?>"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value="<?php echo $u->jurusan ?>"></td>
			</tr>
			<tr>
				<td>Pesan</td>
				<td><input type="text" name="pesan" value="<?php echo $u->pesan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>