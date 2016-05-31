<!DOCTYPE html>
<html lang="en">
  <head>
 
    <title>CRUD WITH JTABLE</title>
 
    <!-- js Jquery dan Jquery-ui -->
    <script src='<?php echo base_url();?>assets/js/jquery.js'></script>
    <script src='<?php echo base_url();?>assets/jquery-ui/jquery-ui.js'></script>
    <!-- css jquery-ui -->
    <link href='<?php echo base_url();?>assets/jquery-ui/jquery-ui.css' rel="stylesheet">
 
    <!-- js Jtable. -->
    <link href="<?php echo base_url();?>assets/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
    <!-- css Jtable -->
    <script src='<?php echo base_url();?>assets/jtable/jquery.jtable.min.js'></script>
 
    <script type="text/javascript">
        $(document).ready(function () {
 
          $('#dataDrid').jtable({
                title: 'Tabel Bookmark',
                actions: {
                    listAction: '/ci30/belajar/bookmark', // link untuk proses load data grid
                    createAction: '/ci30/belajar/tambah', // link untuk proses tambah data
                    updateAction: '/ci30/belajar/edit', // link untuk proses update data
                    deleteAction: '/ci30/belajar/hapus' // link untuk proses hapus data
                },
               
                fields: { // field digunakan sebagai grid, form tambah data dan edit data
                    id: {
                        key: true, // key untuk proses update dan delete
                        list: false,
                        edit: false,
						list: false
                    },
                    title: {
                        title: 'Title',
                        width: '20%'
                    },
                    url: {
                        title: 'Url',
                        width: '35%'
                    },
                    description: {
                        title: 'Description',
                        width: '40%'
                    },
                  	//no_hp: {
                    //    title: 'Handphone',
                    //    width: '20%'
                    //}, 
                } 
            });

            // load data saat pertama kali
            $('#dataDrid').jtable('load');
 
        });
    </script>
 
  </head>
  <body>
  	<center>
  		<h3>Data Tabel Bookmark</h3>
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
    <!-- element yang kita butuhkan -->
    <div id='dataDrid' style='width:50%'></div>
  	</center>
  </body>
</html>