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

  </head>
 	
    <script type="text/javascript">
        $(document).ready(function () {

   
        	       
        
          $('#dataDrid').jtable({
                title: 'Tabel Bookmark',
                paging: true, //Enable paging
	            pageSize: 10, //Set page size (default: 10)
	            sorting: true, //Enable sorting
	            defaultSorting: 'Name ASC', //Set default sorting
                actions: {
                    listAction: '/ci30/belajar/bookmark', // link untuk proses load data grid
                    createAction: '/ci30/belajar/input_data', // link untuk proses tambah data
                    updateAction: '/ci30/belajar/edit_data', // link untuk proses update data
                    deleteAction: '/ci30/belajar/hapus_data' // link untuk proses hapus data
                },
               
                fields: { // field digunakan sebagai grid, form tambah data dan edit data
                    id: {
                        key: true, // key untuk proses update dan delete
                        create: false,
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
                        width: '40%',
                        type: 'textarea'
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
 
  
  <body>
  	<center>
  		<h3>Data Tabel Bookmark</h3>
  				<!--<table>		
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
				</table>-->
				
			<!--	<script type="text/javascript">
				$(document).ready(function () {
				$("#btnTambahB").click(function(){
            	var title 		= $("#title").val();
				var url 		= $("#url").val();
		   	    var description = $("#description").val();
		   	    var data = 'title=' + title + '&url=' + url + '&description=' + description ;
	                $.ajax({
	                    url : "<?php base_url() ?>/belajar/tambah_aksi",
	                    type "post",
	                    data : data,
	                    success:    function(){
							                   $("#bookmark").load("belajar/bookmark #data");
							                   },      
			         });   	            
			   }); 
			   }); 
				</script> -->
		
	
	<!-- element yang kita butuhkan -->
    <div id='dataDrid' style='width:50%'></div>
  	</center>
  </body>
</html>