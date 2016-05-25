<!DOCTYPE html>
<html>
<head>
	<title>Tabel Bookmark</title>
</head>
<body>
<center>
	<h1>Tabel Bookmark <br/> Login</h1>
	<form action="<?php echo base_url('belajar/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>