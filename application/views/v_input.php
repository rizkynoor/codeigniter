<!DOCTYPE html>
<html>
<head>
	<title>Tabel Bookmark</title>
</head>
<body>
	<center>
		<h1>Tabel Bookmark | Latihan crud</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'belajar/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Url</td>
				<td><input type="text" name="url"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type="text" name="description"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>