<!DOCTYPE html>
<html>
 <head>
	<title>Tabel Bookmark</title>
	<link href="<?php echo base_url(); ?>res/css/style.css" rel="stylesheet" type="text/css" />
 </head>
	<body>
		<div class="content">
		<center>
			<h3>Tambah data baru</h3>
		 <form action="<?php echo base_url(). '/belajar/tambah_aksi'; ?>" method="post">
			<div class="data">
				<table style="margin:20px auto;">
					<tr>
						<td>Title</td>
						<td><input type="text" name="title" required></td>
					</tr>
					<tr>
						<td>Url</td>
						<td><input type="text" name="url"required></td>
					</tr>
					<tr>
						<td>Description</td>
						<td><textarea name="description"> </textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="button" type="submit" value="Tambah"></td>
					</tr>
				</table>
			</div>
		 </form>
		</center>	
		</div>
	</body>
	 <center>
		<a class="back"	href="<?php echo base_url('/belajar/bookmark'); ?>"> Kembali ...</a>
	 </center>
</html>