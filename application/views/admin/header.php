<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
      <?php echo $title;?>
    </title>
    <link rel="shortcut icon" href="<?php echo  base_url('assets/img/denpasar.ico');?>">

   
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo   base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo  base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo  base_url('assets/css/clean-blog.min.css'); ?>" rel="stylesheet">


    <!--data tables-->
    <link rel="stylesheet" type="text/css" href="<?php  echo base_url('assets/DataTables/datatables.min.css');?>"/>
 
    <script type="text/javascript" src="<?php  echo base_url('assets/DataTables/datatables.min.js');?>"></script>



  </head>

  <body>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url('assets/img/home-admin.jpg');?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <!--h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span-->
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('admin');?>">Pengaduan Layanan Publik Kota Denpasar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!--li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>about">Tentang</a>
            </li-->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('login/logout'); ?>">Logout</a>
            </li>
            <!--li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li-->
          </ul>
        </div>
      </div>
    </nav>