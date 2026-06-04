<body>
<!-- Favicons -->
<!-- <link href="<?php echo base_url() ?>assets/img/logo/logokabbogor.png" rel="icon"> -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <!-- <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel"> -->
    <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(uploads/image/kampungsinbad.jpg)">
        <div class="carousel-container">
            <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Geopark Bogor Halimun Salak
            <span class="d-block">Peta</span></h2>
            <p class="animate__animated animate__fadeInUp">Selamat datang di website Geopark Bogor Halimun Salak. <br>Sistem ini hanya menampilkan informasi pariwisata Geopark Bogor Halimun Salak</p>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- End Hero -->
<div class="container-fluid" style="padding: 0;">
<div id="map" style="height:800px; width:100% !important;"></div>
<script src="<?php echo base_url() ?>assets/peta/js/qgis2web_expressions.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/leaflet.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/L.Control.Layers.Tree.min.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/L.Control.Locate.min.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/leaflet.rotatedMarker.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/leaflet.pattern.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/leaflet-hash.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/Autolinker.min.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/rbush.min.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/labelgun.min.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/labels.js"></script>
<script src="<?php echo base_url() ?>assets/peta/data/Kecamatan_1.js"></script>
<script src="<?php echo base_url() ?>assets/peta/data/KecukupanInformasiObjekWisata_2.js"></script>
<script src="<?php echo base_url() ?>assets/peta/styles/Kecamatan_1_style.js"></script>
<script src="<?php echo base_url() ?>assets/peta/styles/KecukupanInformasiObjekWisata_2_style.js"></script>
<script src="<?php echo base_url() ?>assets/peta/js/layers.js"></script>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/ol.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/leaflet.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/leaflet-locatecontrol.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/leaflet-layers-tree.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/leaflet-control-geocoder.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/leaflet.rotatedMarker.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/leaflet.pattern.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/leaflet-hash.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/leaflet.labelgun.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/peta/resources/ol3-popup.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/peta/resources/ol3-layerswitcher.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/peta/resources/ol3-search.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/peta/resources/qgis2web.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/qgis2web_expressions.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/peta/resources/horsey.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/peta/resources/ol3-search.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/peta/resources/ol3-search-layer.min.css">
        <link href="<?php echo base_url() ?>assets/peta/resources/ol-geocoder.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/ol-layerswitcher.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/qgis2web.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/ol-popup.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/peta/resources/ol-geocoder.css">
        <style>
        html, body {
            background-color: #ffffff;
        }
        .ol-control > * {
            background-color: #f8f8f8!important;
            color: #444444!important;
            border-radius: 0px;
        }
        .ol-control > *:focus, .ol-control > *:hover {
            background-color: rgba(248, 248, 248, 0.7)!important;
        }
        .ol-attribution a, .gcd-gl-input::placeholder, .search-layer-input-search::placeholder {
            color: #444444!important;
        }
        .search-layer-input-search {
            background-color: #f8f8f8!important;
        }
        .ol-control > *:focus, .ol-control >*:hover {
            background-color: rgba(248, 248, 248, 0.7)!important;
        } 
        .ol-control {
            background-color: rgba(255,255,255,.4) !important;
            padding: 2px !important;
        }
        .ol-popup {
            background-color: rgba(255,255,255,.9) !important;
            padding: 10px !important;
            border-radius: 5px !important;
            box-shadow: 0 1px 4px rgba(0,0,0,.2) !important;
        }
        </style>
        <!-- <style>
        #map {
            width: 1675px;
            height: 846px;
        }
        </style> -->
        <title></title>
    </head>
        <div id="map">
            <div id="popup" class="ol-popup">
                <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                <div id="popup-content"></div>
            </div>
        </div>
        <script src="<?php echo base_url() ?>assets/peta/resources/qgis2web_expressions.js"></script>
        <script src="<?php echo base_url() ?>assets/peta/resources/proj4.js"></script>
        <script>proj4.defs('EPSG:32748','+proj=utm +zone=48 +south +datum=WGS84 +units=m +no_defs');</script>
        <script src="<?php echo base_url() ?>assets/peta/resources/functions.js"></script>
        <script src="<?php echo base_url() ?>assets/peta/resources/ol.js"></script>
        <script src="<?php echo base_url() ?>assets/peta/resources/horsey.min.js"></script>
        <script src="<?php echo base_url() ?>assets/peta/resources/ol3-search-layer.js"></script>
        <script src="<?php echo base_url() ?>assets/peta/resources/ol-layerswitcher.js"></script>
        <script src="<?php echo base_url() ?>assets/peta/resources/ol-geocoder.js"></script>
        <script src="<?php echo base_url() ?>assets/peta/layers/Kecamatan_1.js"></script><script src="<?php echo base_url() ?>assets/peta/layers/KecukupanInformasiObjekWisata_2.js"></script>
        <script src="<?php echo base_url() ?>assets/peta/styles/Kecamatan_1_style.js"></script><script src="<?php echo base_url() ?>assets/peta/styles/KecukupanInformasiObjekWisata_2_style.js"></script>
        <script src="<?php echo base_url() ?>assets/peta/layers/layers.js" type="text/javascript"></script> 
        <script src="<?php echo base_url() ?>assets/peta/resources/Autolinker.min.js"></script>
        <script src="<?php echo base_url() ?>assets/peta/resources/qgis2web.js"></script>
    </body>