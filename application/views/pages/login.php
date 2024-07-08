<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>

    <!-- Favicons -->
    <link href="<?php echo base_url() ?>assets/img/logo/logokabbogor.png" rel="icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Masuk</h1>
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('auth/login'); ?>" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password">
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
            </div>
            <a class="small" href="<?= base_url('Home'); ?>">Kembali ke Website</a>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Masuk</button>
            <span> Atau </span>
            <a href="<?php echo base_url('auth/register') ?>" class="btn btn-primary">Daftar</a>
        </form>
    </div>
</body>
</html>
