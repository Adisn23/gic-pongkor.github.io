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
                                                    <th>Judul</th>
                                                    <th>Deskripsi</th>
                                                    <th>Gambar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($data_banner as $b) : ?>
                                                <tr>
                                                    <td><?= $b['judul']?></td>
                                                    <td><?= $b['deskripsi']?></td>
                                                    <td>
                                                        <img src="<?= base_url('/uploads/image/'. $b['image']) ?>" class="img-thumbnail" alt="..." width="220px">
                                                    </td>
                                                    <td class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalEdit<?= $b['id_banner']; ?>">
                                                        <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <!-- <a href="" class="btn btn-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModalHapus">
                                                            <i class="bi bi-trash"></i>
                                                        </a> -->
                                                        <button type="button" class="btn btn-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModalHapus<?= $b['id_banner'];?>">
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
                        <form action="<?= base_url(); ?>admin/beranda/Banner/tambah/" method="post">
                        <div class="mb-3">
                            <label for="judul" class="col-form-label">Judul :</label>
                            <input type="text" name="judul" class="form-control" id="judul" required>
                            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="col-form-label">Deskripsi :</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" required></textarea>
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="judul">Username</label>
                            <div class="input-group-prepend">
                                <input type="text" class="form-control is-invalid" id="judul" aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <input type="file" name="image" class="form-control" id="image" required>
                            <span class="form-text text-danger d-block "><?= form_error('image'); ?></span>
                        </div>
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
            <?php foreach($data_banner as $data) : ?>
            <div class="modal fade" id="exampleModalEdit<?= $data['id_banner']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url(). 'admin/beranda/Banner/ubah/'. $data['id_banner'] ?>" method="post">
                        <!-- <input type="hidden" name="id" value="<?= $data['id_banner']; ?>"> -->
                        <div class="mb-3">
                            <label for="judul" class="col-form-label">Judul :</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="<?= $data['judul']; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="col-form-label">Deskripsi :</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi"><?= $data['deskripsi']; ?></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" id="image" value="<?= $data['image']; ?>">
                        </div>
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
            <?php foreach($data_banner as $data) : ?>
            <div class="modal fade" id="exampleModalHapus<?= $data['id_banner'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah yakin ingin mengahpus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="<?= base_url(); ?>admin/beranda/Banner/hapus/<?= $data['id_banner'];?>" class="btn btn-danger">Ya</a> 
                </div>
                </div>
            </div>
            </div>
            <?php endforeach; ?>


            <!-- End of Main Content -->

