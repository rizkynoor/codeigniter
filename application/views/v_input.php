<!DOCTYPE html>
<html>
<head>
	<title>Tabel Bookmark</title>
	<link href="<?php echo base_url(); ?>res/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="content">
	<center>
		<h1>Tabel Bookmark | Latihan crud</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/belajar/tambah_aksi'; ?>" method="post">

		<div class="data">
		<table style="margin:20px auto;">
			
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
				<td><input class="button" type="submit" value="Tambah"></td>
			</tr>
		</table>
		</div>
	</form>	
	</div>
</body>
</html>