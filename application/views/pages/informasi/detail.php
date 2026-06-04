<!-- ======= Hero Section ======= -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEY9jbE_zL8SV7c6meCf7-7lV3JLcbKnlY&callback=initMap" async defer></script>

<style>
        .rating {
            display: flex;
            gap: 10px;
            font-size: 24px;
        }
        .rating label {
            cursor: pointer;
            color: #ddd;
        }
        .rating input[type="radio"] {
            display: none;
        }
        .rating label:before {
            content: '\f005'; /* fa-star unicode */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
        }
        .rating input:checked ~ label:before {
            color: gold;
        }
        .filled {
            color: gold;
        }

        .rating-data {
            color: #ddd;
        }
        .fa-star {
            color: #ddd;
        }
        .fa-star.checked {
            color: gold;
        }
    </style>

<style>
#hero .carousel-item::before {
    content: "";
    background-color: rgba(0, 0, 0, 0);
}
</style>
<section id="hero">
<!-- <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel"> -->
    <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('<?= base_url()?>uploads/image/<?=$detail['image']?>')">
        <div class="carousel-container">
        <div class="container">
        </div>
        </div>
        </div>
    </div>
    </div>
</section><!-- End Hero -->

<main id="main">
    <section id="informasi" class="informasi">
    <div class="container py-5">
            <div class="section-title section-title-informasi mb-4 text-center">
                <h2><?=$detail['judul']?></h2>
            </div>

            <div class="row">
                <!-- Information Column (Full width on small screens) -->
                <div class="col-12 mb-4">
                    <div class="card shadow-sm border-light rounded-3">
                        <div class="card-body">
                            <h5 class="card-title">Deskripsi</h5>
                            <p class="card-text"><?=$detail['deskripsi']?></p>

                            <div class="mt-4">
                                <h5>Jam Operasional</h5>
                                <p><strong>Jam Buka:</strong> <?= date('H:i', strtotime($detail['jam_buka'])) ?></p>
                                <p><strong>Jam Tutup:</strong> <?= date('H:i', strtotime($detail['jam_tutup'])) ?></p>
                            </div>
                            <div class="mt-4">
                                <p><strong>Harga:</strong> Rp.<?=$detail['harga']?></p>
                            </div>
                            <div class="mt-4">
                                <p><strong>Alamat:</strong> <?=$detail['alamat']?></p>
                            </div>

                            <div class="mt-4">
                                <p class="card-text"><small class="text-muted"><?= $detail['tgl_update'] ?></small></p>
                                <!-- <div class="d-flex align-items-center">
                                    <?php echo star(number_format($detail['avg_rating'])) ?>
                                    <span class="ms-2"><?= number_format($detail['avg_rating']) ?></span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map Column (Full width on small screens) -->
                <!-- <div class="col-12 mb-4">
                    <div class="card shadow-sm border-light rounded-3">
                        <div class="card-body">
                            <h5 class="card-title">Peta Lokasi</h5>
                            <div id="map"></div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>


<!-- Reviews -->
<!-- <div class="card container review-sec">
    <div class="card-body ">
        <h5 class="subs-title">Ulasan</h5>
        <?php if($this->session->userdata()) { ?>
            <div style="margin-top:20px; margin-bottom: 20px;"></div>
            <form class="col-md-10" action="<?= base_url('Informasi/give_review') ?>" method="POST">
                <div class="form-group">
                <div class="rating">
    <input type="radio" name="rating" id="star5" value="5"><label for="star5" title="Sangat Puas"></label>
    <input type="radio" name="rating" id="star4" value="4"><label for="star4" title="Puas"></label>
    <input type="radio" name="rating" id="star3" value="3"><label for="star3" title="Netral"></label>
    <input type="radio" name="rating" id="star2" value="2"><label for="star2" title="Cukup Puas"></label>
    <input type="radio" name="rating" id="star1" value="1"><label for="star1" title="Tidak Puas"></label>
</div>
                </div>
                </div>
                <div class="form-group">
                    <label>Tuliskan Review anda</label>
                    <textarea class="form-control" rows="5" name="text"></textarea>
                </div>
                <input type="hidden" name="id_wisata" value="<?= $detail['id_berita']; ?>">
                <br>
                <input type="submit" class="btn btn-success btn-sm" value="Tulis Review">
            </form>
        <?php } ?>
        <div class="card mt-4">
    <div class="card-body">
        <h5 class="subs-title">Ulasan Pengguna</h5>
        <?php foreach ($reviews as $review): ?>
            <div class="review-item">
                <div class="review-rating">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="fa fa-star <?= $i < $review['rating'] ? 'checked' : '' ?>"></span>
                    <?php endfor; ?>
                </div>
                <div class="review-email">
                    <?= htmlspecialchars($review['username']) ?>
                </div>
                <div class="review-comment">
                    <?= htmlspecialchars($review['rating_text']) ?>
                </div>
                <div class="review-date">
                    <strong>Date Created:</strong> <?= htmlspecialchars($review['date_created'] ?? 'N/A') ?>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div> -->
</div>
<script>
    // Fungsi untuk menginisialisasi peta Google Maps
    function initMap() {
        var location = { lat: <?=$detail['latitude']?>, lng: <?=$detail['longitude']?> };
        
        // Membuat peta di elemen dengan id 'map'
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: location
        });

        // Menambahkan marker pada peta
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title: '<?=$detail['judul']?>'
        });

        // Menambahkan info window untuk marker
        var infoWindow = new google.maps.InfoWindow({
            content: '<b><?=$detail['judul']?></b><br><?=$detail['alamat']?>'
        });

        marker.addListener('click', function() {
            infoWindow.open(map, marker);
        });
    }
</script>
<!-- /Reviews -->
<!-- Include jQuery and Star Rating Plugin -->     
</section><!-- End About Us Section -->



</main><!-- End #main -->


