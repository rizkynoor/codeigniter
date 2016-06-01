<!DOCTYPE html>
<html>
 <head>
	<title>Tabel Bookmark</title>
	<link href="<?php echo base_url(); ?>res/css/style.css" rel="stylesheet" type="text/css" />
 </head>
	<body>
		<div class="content">
		<center>
			<h3>Edit Data</h3>
		 <?php foreach($tb_bookmark as $u){ ?>
		 <form action="<?php echo base_url(). 'index.php/belajar/update'; ?>" method="post">
			<div class="data">
				<table style="margin:20px auto;">
					<tr>
						<td>Title</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $u->id ?>">
							<input type="text" name="title" value="<?php echo $u->title ?>" required>
						</td>
					</tr>
					<tr>
						<td>Url</td>
						<td><input type="text" name="url" value="<?php echo $u->url ?>" required></td>
					</tr>
					<tr>
						<td>Description</td>
						<td><textarea name="description"> <?php echo $u->description;?></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input id="btnEditB"class="button" type="submit" value="Simpan"></td>
					</tr>
				</div>	
			</center>
				</table>
		 </form>	
		 <?php } ?>
		</div>
	</body>
		<a class="back"	href="<?php echo base_url('/belajar/bookmark'); ?>"> Kembali ...</a>
</html>