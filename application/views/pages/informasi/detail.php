  <!-- ======= Hero Section ======= -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <style>
    .star-rating {
        direction: rtl;
        display: inline-block;
        padding: 20px;
    }
    .star-rating input[type="radio"] {
        display: none;
    }
    .star-rating label {
        color: #ddd;
        font-size: 18px;
        padding: 0;
        cursor: pointer;
    }
    .star-rating label:hover,
    .star-rating label:hover ~ label,
    .star-rating input[type="radio"]:checked ~ label {
        color: #ffc700;
    }
</style> -->
<style>
        .rating {
            display: flex;
            gap: 10px;
            font-size: 24px;
        }
        .rating label {
            cursor: pointer;
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
      <div class="container">
        <div class="section-title section-title-informasi">
        <h2><?=$detail['judul']?></h2>
        </div>
        <br>

        <h5><?=$detail['deskripsi']?><h5>
        

        <br><br>
        <p class="card-text"><small class="text-muted"><?= $detail['tgl_update'] ?></small></p>
        <?php echo star(number_format($detail['avg_rating'])) ?>

      <span class="ms-2"><?= number_format($detail['avg_rating']) ?></span>
      </div>


<!-- Reviews -->
<div class="card container review-sec">
    <div class="card-body ">
        <h5 class="subs-title">Ulasan</h5>
        
        <?php if($this->session->userdata()) { ?>
            <div style="margin-top:50px; margin-bottom: 50px;"></div>
            <form class="col-md-12" action="<?= base_url('Informasi/give_review') ?>" method="POST">
                <div class="form-group">
                <label for="rating">Rating</label>
                    <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
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
                    <h5><?= htmlspecialchars($review['email']) ?></h5>
                    <p><?= htmlspecialchars($review['rating_text']) ?></p>
                    <strong>Date Created:</strong> <?= htmlspecialchars($review['date_created'] ?? 'N/A') ?>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- /Reviews -->
<!-- Include jQuery and Star Rating Plugin -->     
    </section><!-- End About Us Section -->
  </main><!-- End #main -->
