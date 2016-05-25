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
		</tr>
		<?php foreach($tb_bookmark as $u){ ?>
		<tr>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->title ?></td>
			<td><?php echo $u->url ?></td>
			<td><?php echo $u->description ?></td>
		</tr>
		</center>
		<?php } ?>
		
	</table>
</body>
</html>