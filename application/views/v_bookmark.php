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
    <link href="<?php echo base_url();?>assets/jtable/themes/metro/red/jtable.css" rel="stylesheet" type="text/css" />
    <!-- css Jtable -->
    <script src='<?php echo base_url();?>assets/jtable/jquery.jtable.min.js'></script>
    <!-- Import CSS file for validation engine (in Head section of HTML) -->
  <link href="<?php echo base_url();?>assets/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
   
  <!-- Import Javascript files for validation engine (in Head section of HTML) -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validationEngine.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validationEngine-en.js"></script>
 
    
     <script type="text/javascript">
        $(document).ready(function () {
                   
        
            $('#dataDrid').jtable({
                 title: 'Tabel Bookmark',
                 paging: true, //Enable paging
                 pageSize: 10, //Set page size (default: 10)
                 sorting: true, //Enable sorting
                 defaultSorting: 'Name ASC', //Set default sorting
                   actions: {
                       listAction: '/ci30/belajar/grid', // link untuk proses load data grid
                       createAction: '/ci30/belajar/add', // link untuk proses tambah data
                       updateAction: '/ci30/belajar/edit', // link untuk proses update data
                       deleteAction: '/ci30/belajar/delete' // link untuk proses hapus data
                   },
               
             fields: { // field digunakan sebagai grid, form tambah data dan edit data
                    no: {
                          title: 'No.',
                          width: '5%',
                          list: '0+',
                          create : false,
                          edit : false
                     },

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
                 },
                 //Initialize validation logic when a form is created
            formCreated: function (event, data) {
                data.form.find('input[name="title"]').addClass('validate[required]');
                data.form.find('input[name="url"]').addClass('validate[required]');
                // data.form.find('input[name="Password"]').addClass('validate[required]');
                // data.form.find('input[name="BirthDate"]').addClass('validate[required,custom[date]]');
                // data.form.find('input[name="Education"]').addClass('validate[required]');
                data.form.validationEngine();
            },
            //Validate form when it is being submitted
            formSubmitting: function (event, data) {
                return data.form.validationEngine('validate');
            },
            //Dispose validation logic when form is closed
            formClosed: function (event, data) {
                data.form.validationEngine('hide');
                data.form.validationEngine('detach');
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

<div id='dataDrid' style='width:70%'></div>
    </center>
  </body>
</html>