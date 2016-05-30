<!DOCTYPE html>
<html>
 <head>
	<title>Tabel Bookmark</title>
	<link href="<?php echo base_url(); ?>res/css/style.css" rel="stylesheet" type="text/css" /> 
 </head>
	<body>
	 	<center>
			<h3>Data Tabel Bookmark</h3>
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
						<th>Title</th>
						<th>Url</th>
						<th>Description</th>
					 <!--	<th width="25%">Option</th> -->
					</tr>
						<?php 
							$no = 0;
							foreach($tb_bookmark as $u){
							$no++; ?>
					<tr>
						<td><?php echo $no ?></td>
						<td valign="top"><?php echo anchor ('belajar/view_b/'.$u->id, $u->title); ?></td>
						<td valign="top"><?php echo $u->url ?></td>
						<td valign="top"><?php echo $u->description ?></td>
					<!--	<td>
							<a class="update">
							 <?php echo anchor('belajar/edit/'.$u->id,'Edit'); ?>
							</a>
							<a class="delete">
							 <?php echo anchor('belajar/hapus/'.$u->id,'Hapus'); ?>
							</a>
						</td> -->
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
		<a class="add"	href="<?php echo base_url('/belajar/tambah'); ?>"> Tambah Data...</a>
	 </center>
</html>