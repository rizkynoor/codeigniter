<!DOCTYPE html>
<html>
 <head>
	<title>Tabel User</title>
	<link href="<?php echo base_url(); ?>res/css/style.css" rel="stylesheet" type="text/css" />
 </head>
	<body>
		<center>
		<h3>Data Tabel User</h3>
		<div class="content">
			<table>		
					<tr>
						<th>
							<li><a href="<?php echo base_url().'belajar/bookmark' ?>">Data Tabel Bookmark</a></li>
						</th>
						<th>
							<li><a href="<?php echo base_url().'belajar/user' ?>">Data Tabel User</a></li>
						</th>
						<th>
							<li><a href="<?php echo base_url().'login/logout' ?>">Logout</a></li>
						</th>
					</tr>
				</table>
		<div class="paging">
		<div class="data">
			<table>
				<tr>
					<th width="2%">No.</th>
					<th>Username</th>
					<th width="25%">Option</th>
				</tr>
					<?php 
						$no = 0;
						foreach($tb_user as $u){
						$no++; ?>
				<tr>
					<td><?php echo $no ?></td>
					<td valign="top"><?php echo $u->username ?></td>
					<td>
						<a class="update">
						<?php echo anchor('belajar/edituser/'.$u->id,'Edit'); ?>
						</a>
						<a class="delete">
						<?php echo anchor('belajar/hapususer/'.$u->id,'Hapus'); ?>
						</a>
					</td>
				</tr>
		</div>
		</div>
		</div>
				<?php } ?>	
			</table>
		</center>
	
	 </div>
	</body>
	 <center>
		<a class="add"	href="<?php echo base_url('/belajar/tambahuser'); ?>"> Tambah Data...</a>
		<?php $this->load->view('v_footer');?>
	 </center>
</html>