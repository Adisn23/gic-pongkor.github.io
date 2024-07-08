  <!-- ======= Hero Section ======= -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  crossorigin="anonymous" />
  <section id="hero">
    <!-- <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel"> -->

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('<?= base_url()?>assets/img/gic_image/gic_2.jpg')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Geopark Pongkor
              <span class="d-block">Informasi</span></h2>
              <p class="animate__animated animate__fadeInUp">Selamat datang di website Geopark Pongkor. <br>Sistem ini hanya menampilkan informasi pariwisata Geopark Pongkor</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


  
    <section id="informasi" class="informasi">
      <div class="container">
        <div class="section-title section-title-informasi">
          <h2>Geopark Pongkor <br>Informasi</h2>
        </div>

        <!-- <div class="row d-flex justify-content-between">
            <div class="col-3">
                <input class="form-control col-" type="text" placeholder="Search" aria-label="default input example">
            </div>

            <div class="col-3">
                <div class="btn-group float-end">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort By
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        
        <div class="row mb-3">
          <?php
          $i = 0;
          foreach($data_berita as $data) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="shadow card mb-3 card-info">
                    <img src="<?= base_url('uploads/image/'.$data['image']) ?>" class="card-img-top" alt="..." height="230px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['judul'] ?></h5>
                        <p class="card-text"><?= substr($data['deskripsi'] , 0, 100) . '... <a href="'.base_url().'/Informasi/detail/'.$data['id_berita'].'">selengkapnya</a>' ?></p>
                        <p><i class="las la-map-marker">Bogor</i></p>
                        <!-- <p class="card-text"><small class="text-muted"><?= $data['tgl_update'] ?></small></p> -->
                        <?php echo star(number_format($data['avg_rating'])) ?>

                        <span class="ms-2"><?= number_format($data['avg_rating']) ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
          </div>
          
      <?= $this->pagination->create_links(); ?>
            

      </div>
    </section><!-- End About Us Section -->

  </main><!-- End #main -->
