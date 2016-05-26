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
	<h3>Data Tabel Bookmark</h3>
	<div class="paging">
	<div class="data">

	<table>
	
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
			<td valign="top"><?php echo $u->title ?></td>
			<td valign="top"><?php echo $u->url ?></td>
			<td valign="top"><?php echo $u->description ?></td>
			<td>
			<a class="update">
			<?php echo anchor('belajar/edit/'.$u->id,'Edit'); ?>
			</a>
			<a class="delete">
			<?php echo anchor('belajar/hapus/'.$u->id,'Hapus'); ?>
			</a>
			</td>
		</tr>
		</div>
		</center>
		<?php } ?>
		
	</table>
	</div>
	</div>
</body>
			<a class="add"	href="<?php echo base_url('index.php/belajar/tambah'); ?>"> Tambah Data...</a>
		
</html>