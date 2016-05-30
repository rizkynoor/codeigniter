<!DOCTYPE html>
<html>
<head>
	<title>Tabel Bookmark</title>
	<link href="<?php echo base_url(); ?>res/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="content">
	<center>
		<h3>View Data</h3>
	
	<?php foreach($tb_bookmark as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/belajar/update'; ?>" method="post">
		
		<div class="data">
		<table style="margin:20px auto;">
			<tr>
				<td>Title</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<a><?php echo $u->title ?></a>
				</td>
			</tr>
			<tr>
				<td>Url</td>
				<td><a><?php echo $u->url ?></a></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><a> <?php echo $u->description;?></a></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2">
					<?php echo anchor ('/belajar/bookmark', 'Kembali', 'class="button"'); ?>
					<?php echo anchor('belajar/edit/'.$u->id,'Edit', 'class="button"'); ?>
					<?php echo anchor('belajar/hapus/'.$u->id,'Hapus', 'class="button"'); ?>
				</td>
			</tr>
			</div>
			</div>
			</center>
		</table>
		
	</form>	
	<?php } ?>
	
</body>
	<a class="back"	href="<?php echo base_url('/belajar/bookmark'); ?>"> Kembali ...</a>
</html>