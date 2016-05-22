<!DOCTYPE html>
<html>
<head>
	<title>Thread</title>
</head>
<body>
	<h1>Poltekpos</h1>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>NPM</th>
			<th>Jurusan</th>
			<th>Pesan</th>
		</tr>
		<?php foreach($thread as $u){ ?>
		<tr>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->npm ?></td>
			<td><?php echo $u->jurusan ?></td>
			<td><?php echo $u->pesan ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>