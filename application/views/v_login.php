<!DOCTYPE html>
<html>
<head>
	<title>Tabel Bookmark</title>
	<link href="<?php echo base_url(); ?>res/css/style.css" rel="stylesheet" type="text/css" />
</head>
 <body>
	<div class="konten">
		<center>
			<h1>Tabel Bookmark | Latihan crud</h1>
			<h3>Login...</h3>
				 <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
					<div class="dta">
						<table>	
					 		<tr>
								<td>Username</td>
								<td><input type="text" name="username" required></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" required></td>
							</tr>
							<tr>
								<td></td>
								<td><input class="button" type="submit" value="Login"></td>
							</tr>

						</table>
					</div>
				 </form>
		</center>
	</div>
 </body>
</html>