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
    <link href="<?php echo base_url();?>assets/jtable/themes/lightcolor/red/jtable.css" rel="stylesheet" type="text/css" />
    <!-- css Jtable -->
    <script src='<?php echo base_url();?>assets/jtable/jquery.jtable.min.js'></script>
    
     <script type="text/javascript">
        $(document).ready(function () {
                   
        
            $('#dataDrid').jtable({
                 title: 'Tabel Bookmark',
                 paging: true, //Enable paging
                 pageSize: 10, //Set page size (default: 10)
                 sorting: true, //Enable sorting
                 defaultSorting: 'Name ASC', //Set default sorting
                   actions: {
                       listAction: '/ci30/belajar/griduser', // link untuk proses load data grid
                       createAction: '/ci30/belajar/adduser', // link untuk proses tambah data
                       updateAction: '/ci30/belajar/edituser', // link untuk proses update data
                       deleteAction: '/ci30/belajar/deleteuser' // link untuk proses hapus data
                   },
               
             fields: { // field digunakan sebagai grid, form tambah data dan edit data
                    no: {
                    	  create: false,
                          edit: false,
                          list: false,
                          title: 'No.',
                          width: '5%',
                          list: '0+'
                     },

                    id: {
                          key: true, // key untuk proses update dan delete
                          create: false,
                          edit: false,
                          list: false
                     },
                    
                    username: {
                          title: 'Username',
                          width: '80%' 
                     },
                    
                    password: {
                    	  title: 'Password',
                          create: true,
                          edit: true,
                          list: false

                          
                     },

                    // description: {
                    //       title: 'Description',
                    //       width: '40%',
                    //       type: 'textarea'
                    //  },
                    //no_hp: {
                    //    title: 'Handphone',
                     //    width: '20%'
                   //}, 
                 } 
             });
        
           // load data saat pertama kali
    $('#dataDrid').jtable('load', {});
 
    });

    </script>
 
  </head>

  <body>
    <center>
      <h3>Data Tabel Bookmark</h3>

<div id='dataDrid' style='width:50%'></div>
    </center>
  </body>
</html>