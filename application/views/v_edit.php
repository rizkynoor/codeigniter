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
		<h3>Edit Data</h3>
	</center>
	<?php foreach($tb_bookmark as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/belajar/update'; ?>" method="post">
		
		<div class="data">
		<table style="margin:20px auto;">
			<tr>
				<td>Title</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="title" value="<?php echo $u->title ?>">
				</td>
			</tr>
			<tr>
				<td>Url</td>
				<td><input type="text" name="url" value="<?php echo $u->url ?>"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type="text" name="description" value="<?php echo $u->description ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
		</div>
	</form>	
	<?php } ?>
	</div>
</body>
</html>