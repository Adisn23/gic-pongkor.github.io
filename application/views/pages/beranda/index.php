<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <!-- <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> -->
      <?php foreach($data_banner as $b) : ?>
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(uploads/image/<?= $b['image']; ?>">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><?= $b['judul'] ?></h2>
              <p class="animate__animated animate__fadeInUp"><?= $b['deskripsi'] ?></p>
              <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
            </div>
          </div>
        </div>
      </div>
      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a> -->
      <?php endforeach; ?>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Featured Services Section ======= -->
    <!-- <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-laptop"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trade stravi</p>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>Geopark Bogor Halimun Salak</h2>
          <p>Geopark Bogor Halimun Salak adalah sebuah geopark yang terletak di Kabupaten Bogor, Jawa Barat, Indonesia. Geopark ini memiliki keunikan geologi, keanekaragaman hayati, serta nilai budaya dan sejarah yang signifikan. Geopark Bogor Halimun Salak secara khusus menampilkan ciri khas geologi dan lanskap alam yang memukau, termasuk adanya endapan-endapan mineral, situs-situs batuan, serta keindahan alam yang menarik.</p>
        </div>
        <?php foreach($data_home as $data) : ?>
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="uploads/image/<?= $data['image']; ?>" class="img-fluid img-about-gic mb-2" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content content-about-gic mb-2">
              <h3><?= $data['judul']?></h3>
              <p>
              <?= $data['deskripsi']?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= About Us Section ======= -->
    <section id="informasi" class="informasi">
  <div class="container">
    <div class="section-title">
      <h2>Informasi</h2>
    </div>
    <?php foreach($data_berita as $data) : ?>
    <div class="shadow-sm card mb-3">
      <div class="row g-0">
        <div class="col-md-4 p-2">
          <img src="uploads/image/<?= $data['image']; ?>" class="img-fluid rounded" alt="...">
        </div>
        <div class="col-md-8 d-flex">
          <div class="card-body d-flex flex-column bd-highlight align-item-start">
            <h5 class="card-title"><?= $data['judul'] ?></h5>
            <p class="card-text">
              <?= substr($data['deskripsi'] , 0, 300) . ' ...' ?>
              <a href="<?= base_url().'Informasi/detail/'.$data['id_berita']; ?>" style="color: blue;">selengkapnya</a>
            </p>
            <!-- <div class="info">
            <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
            <i class="fa fa-star-o"></i> (4.5)
          </div>
          <div class="price">
            Harga tiket: Rp20.000
          </div>
        </div> -->
            <div class="mt-auto bd-highlight">
              <div class="d-flex align-items-center">
                <img src="<?php echo base_url() ?>assets/img/logo/logogeopark.png" class="rounded align-item-center" alt="..." width=22 height=22>
                <div class="d-flex flex-column ms-2">
                  <span style="font-size: 14px;">GIC-Bogor Halimun Salak</span>
                  <!-- <small class="text-muted" style="font-size: 12px;">Last updated 3 mins ago</small> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

  <!-- End Berita Section -->
  </main>
  <!-- End #main -->
