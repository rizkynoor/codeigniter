<!DOCTYPE html>
<html>
 <head>
	<title>Tabel User</title>
	<link href="<?php echo base_url(); ?>res/css/style.css" rel="stylesheet" type="text/css" />
 </head>
	<body>
		<div class="content">
		 <center>
			<h3>Tambah data baru</h3>
			<form action="<?php echo base_url(). '/belajar/tambahuser_aksi'; ?>" method="post">
				<div class="data">
					<table style="margin:20px auto;">
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" required></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password"required></td>
						</tr>
						<tr>
							<td></td>
							<td><input id="btnTambahU" class="button" type="submit" value="Tambah"></td>
						</tr>
					</table>
				</div>	
			</form>	
		 </center>
		</div>
	</body>
	 <center>
		<a class="back"	href="<?php echo base_url('/belajar/user'); ?>"> Kembali ...</a>
	 </center>
</html>