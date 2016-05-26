<!DOCTYPE html>
<html>
<head>
	<title>Tabel Bookmark</title>
</head>
<body>
	<center>
	<h1>Tabel Bookmark | Latihan crud</h1>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Url</th>
			<th>Description</th>
			<th>Option</th>
		</tr>
		<?php foreach($tb_bookmark as $u){ ?>
		<tr>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->title ?></td>
			<td><?php echo $u->url ?></td>
			<td><?php echo $u->description ?></td>
			<td>
			<?php echo anchor('belajar/edit/'.$u->id,'Edit'); ?>
			<?php echo anchor('belajar/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		</center>
		<?php } ?>
	</table>
</body>
			<a href="<?php echo base_url('index.php/belajar/tambah'); ?>">+ Tambah Data...</a>
		<a href="<?php echo base_url('index.php/belajar/login/logout'); ?>">Logout</a>
</html>