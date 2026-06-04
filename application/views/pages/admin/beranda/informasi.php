                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
                    </div>


                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah Data</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar</th>
                                                <th>Harga</th>
                                                <th>Alamat</th>
                                                <th>Jam Buka</th>
                                                <th>Jam Tutup</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Tanggal Update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($data_berita as $data) : ?>
                                                <tr>
                                                    <td><?= $data['id_berita'] ?></td>
                                                    <td><?= $data['judul'] ?></td>
                                                    <td><?= $data['deskripsi'] ?></td>
                                                    <td><img  src="<?= base_url('/uploads/image/').  $data['image'] ?>" alt="Image" width="80"></td>
                                                    <td><?= $data['harga'] ?></td>
                                                    <td><?= $data['alamat'] ?></td>
                                                    
                                                    <td><?= date('H:i', strtotime($data['jam_buka'])) ?></td>
                                                    <td><?= date('H:i', strtotime($data['jam_tutup'])) ?></td>
                                                    <td><?= $data['latitude'] ?></td>
                                                    <td><?= $data['longitude'] ?></td>
                                                    <td><?= $data['tgl_update'] ?></td>
                                                    <td class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalEdit<?= $data['id_berita']; ?>">
                                                        <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <!-- <a href="" class="btn btn-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModalHapus">
                                                            <i class="bi bi-trash"></i>
                                                        </a> -->
                                                        <button type="button" class="btn btn-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModalHapus<?= $data['id_berita'];?>">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>

            <!-- Modals tambah data-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url(); ?>admin/beranda/Informasi/tambah/"  method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="judul" class="col-form-label">Judul :</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="col-form-label">Deskripsi :</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="judul">Username</label>
                            <div class="input-group-prepend">
                                <input type="text" class="form-control is-invalid" id="judul" aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </div> -->

                        <div class="mb-3">
                            <label for="harga" class="col-form-label">Harga :</label>
                            <input type="number" name="harga" class="form-control" id="harga">
                            <!-- <small class="form-text text-danger"><?= form_error('judul'); ?></small> -->
                        </div>
                        <div class="form-group">
                        <label for="jamBuka">Jam Buka:</label>
                        <input type="time" class="form-control" id="jamBuka" name="jamBuka" required>
                        </div>
                        <div class="form-group">
                        <label for="jamTutup">Jam Tutup:</label>
                        <input type="time" class="form-control" id="jamTutup" name="jamTutup" required>
                        </div>
                        <div class="form-group">
                        <label for="latitude">Latitude:</label>
                        <input type="text" class="form-control" id="latitude" name="latitude">
                        </div>
                        <div class="form-group">
                        <label for="longitude">Longitude:</label>
                        <input type="text" class="form-control" id="longitude" name="longitude">
                        </div>
                        <div class="form-group">
                        <label for="longitude">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="mb-3">
                        <input type="file" name="image" class="form-control" id="image">
                        <span class="form-text text-danger d-block "><?= form_error('image'); ?></span>
                        </div>
                        <!-- <div class="mb-3">
                            <input type="date" name="tgl_update" class="form-control" id="tgl_update" required>
                            <span class="form-text text-danger d-block "><?= form_error('tgl_update'); ?></span>
                        </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="tambah"  class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <!-- End of Modals -->

            <!-- Modals edit data-->
            <?php foreach($data_berita as $data) : ?>


            
            <div class="modal fade" id="exampleModalEdit<?= $data['id_berita']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url(). 'admin/beranda/Informasi/ubah/'. $data['id_berita'] ?>" method="post">
                        <!-- <input type="hidden" name="id" value="<?= $data['id_berita']; ?>"> -->
                        <div class="mb-3">
                            <label for="judul" class="col-form-label">Judul :</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="<?= $data['judul']; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="col-form-label">Deskripsi :</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi"><?= $data['deskripsi']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="col-form-label">Harga :</label>
                            <input type="number" name="harga" class="form-control" id="harga">
                            <!-- <small class="form-text text-danger"><?= form_error('judul'); ?></small> -->
                        </div>
                        <div class="form-group">
                        <label for="jamBuka">Jam Buka:</label>
                        <input type="time" class="form-control" id="jamBuka" value="<?= $data['jam_buka']; ?>" name="jamBuka">
                    </div>
                    <div class="form-group">
                        <label for="jamTutup">Jam Tutup:</label>
                        <input type="time" class="form-control" id="jamTutup" value="<?= $data['jam_tutup']; ?>" name="jamTutup">   
                    </div>
                    <div class="form-group">
                        <label for="latitude">Latitude:</label>
                        <input type="text" class="form-control" id="latitude" value="<?= $data['latitude']; ?>" name="latitude">
                    </div>
                    <div class="form-group">
                        <label for="longitude">Longitude:</label>
                        <input type="text" class="form-control" id="longitude" value ="<?= $data['longitude']; ?>" name="longitude">
                    </div>
                    <div class="form-group">
                        <label for="longitude">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" value="<?= $data['alamat']; ?>" name="alamat">
                    </div>
                        <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" id="image" value="<?= $data['image']; ?>">
                        </div>
                        <!-- <div class="mb-3">
                            <input type="date" name="tgl_update" class="form-control" id="tgl_update" value="<?= $data['tgl_update']; ?>" required>
                            <span class="form-text text-danger d-block "><?= form_error('tgl_update'); ?></span>
                        </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="ubah"  class="btn btn-primary">Ubah</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- End of Modals -->


            <!-- Modal Hapus-->
            <?php foreach($data_berita as $data) : ?>
            <div class="modal fade" id="exampleModalHapus<?= $data['id_berita'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="<?= base_url(); ?>admin/beranda/Informasi/hapus/<?= $data['id_berita'];?>" class="btn btn-danger">Ya</a> 
                </div>
                </div>
            </div>
            </div>
            <?php endforeach; ?>


            <!-- End of Main Content -->

