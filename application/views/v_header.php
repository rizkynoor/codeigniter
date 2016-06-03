<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Crud-CI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/jcarousel.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css/flexslider.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="<?php echo base_url();?>skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
  <body>
    <div id="wrapper">
  <!-- start header -->
  <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url().'belajar/index' ?>"><span>C</span>rud-CI</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Data Tabel <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url().'belajar/bookmark' ?>">Data Tabel Bookmark</a></li>
                                <li><a href="<?php echo base_url().'belajar/user' ?>">Data Tabel User</a></li>
                                <li><a href="pricingbox.html">Pricing box</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="<?php echo base_url().'login/logout' ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
  </header>
    </div>
         <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url();?>assets/js_bootstrap/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js_bootstrap/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url();?>assets/js_bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js_bootstrap/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>assets/js_bootstrap/jquery.fancybox-media.js"></script>
<script src="<?php echo base_url();?>assets/js_bootstrap/google-code-prettify/prettify.js"></script>
<script src="<?php echo base_url();?>assets/js_bootstrap/portfolio/jquery.quicksand.js"></script>
<script src="<?php echo base_url();?>assets/js_bootstrap/portfolio/setting.js"></script>
<script src="<?php echo base_url();?>assets/js_bootstrap/jquery.flexslider.js"></script>
<script src="<?php echo base_url();?>assets/js_bootstrap/animate.js"></script>
<script src="<?php echo base_url();?>assets/js_bootstrap/custom.js"></script>
</body>
</html>