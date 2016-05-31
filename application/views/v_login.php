<!DOCTYPE html>
<html>
<head>
	<title>Tabel Bookmark</title>
	<!--<link href="<?php echo base_url(); ?>res/css/style.css" rel="stylesheet" type="text/css" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style_login1.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<center>
 <body>
	<!--<div class="konten">-->
	<div id="main">
	<div id="login">
		
			<h1>Login User</h1>
				 <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">

					
					<!--	<table>	
					 		<tr>
								<td>Username</td>
								<td><input type="text" name="username" id="name" placeholder="username" required></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" id="password" placeholder="*******" required></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Login" name="submit"></td> class="button"
							</tr>

						</table> -->

							<label>Username </label>
							<input type="text" name="username" id="name" placeholder="username" required/><br /><br />
							<label>Password </label>
							<input type="password" name="password" id="password" placeholder="**********" required/><br/><br />
							<input type="submit" value=" Login " name="submit"/><br />
							
					
				 </form>
		
	</div>
	</div>
	
 </body>
 </center>
</html>