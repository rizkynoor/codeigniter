<!DOCTYPE html>
<html>
<head>
	<title>Tabel User</title>
	<link href="<?php echo base_url(); ?>res/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="content">
	<center>
		<h1>Tabel Bookmark | Latihan crud</h1>
		<h3>Edit Data</h3>
	
	<?php foreach($tb_user as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/belajar/updateuser'; ?>" method="post">
		
		<div class="data">
		<table style="margin:20px auto;">
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="username" value="<?php echo $u->username ?>" required>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $u->password ?>" required></td>
			</tr>
			<tr>
			
			<tr>
				<td></td>
				<td><input class="button" type="submit" value="Simpan"></td>
			</tr>
			</div>
			</div>
			</center>
		</table>
		
	</form>	
	<?php } ?>
	
</body>
	<a class="back"	href="<?php echo base_url('/belajar/user'); ?>"> Kembali ...</a>
</html>