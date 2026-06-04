<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GIC : Geopark Bogor Halimun Salak Information Center </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/img/logo/logokabbogor.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/gic.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php base_url() ?>assets/peta/css/leaflet.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/peta/css/leaflet-search.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/peta/css/MarkerCluster.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/peta/css/MarkerCluster.Default.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/peta/css/L.Control.Layers.Tree.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/peta/css/L.Control.Locate.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/peta/css/qgis2web.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/peta/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/peta/css/leaflet-control-geocoder.Geocoder.css">

  <!-- Leafleat -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEY9jbE_zL8SV7c6meCf7-7lV3JLcbKnlY" async defer></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/>
  
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
  integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
  crossorigin=""></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js" integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  <!-- ======= Top Bar ======= -->
  <!-- <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section> -->
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="<?= base_url('Home');?>">GIC - Bogor Halimun Salak</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link " href="<?php echo base_url('Home') ?>">Beranda</a></li>
          <li><a class="nav-link " href="<?php echo base_url('Profil') ?>">Profil</a></li>
          <li><a class="nav-link " href="<?php echo base_url('Informasi') ?>">Informasi</a></li>
          <!-- <li><a class="nav-link " href="<?php echo base_url('Galeri') ?>">Galeri</a></li> -->
          <li><a class="nav-link " href="<?php echo base_url('Peta') ?>">Peta</a></li>
          <li><a class="nav-link " href="<?php echo base_url('Kontak') ?>">Kontak</a></li>

          <?php if ($this->session->userdata('email') == NULL){?>
          <li><a class="nav-link " href="<?php echo base_url('Auth/login') ?>">Masuk</a></li>
          <?php }else{?><li><a href="<?= $this->session->userdata('role_id') == 1 ? base_url('dashboard') : 'Auth/Logout'?>" class="nav-link "><?=$this->session->userdata('username');?></a></li><?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->