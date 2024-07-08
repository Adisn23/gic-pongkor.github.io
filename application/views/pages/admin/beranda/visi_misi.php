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
                                <?php if($data_visi_misi == NULL){ ?>
                                <div class="card-header py-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah Data</button>
                                </div>
                                <?php } ?>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Visi</th>
                                                    <th>Misi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                
                                                ?>
                                                <?php foreach ($data_visi_misi as $key => $value) {
                                                    # code...
                                                ?>
                                                <tr>
                                                    <td><?= $value['visi']?></td>
                                                    <td><?= $value['misi']?></td>
                                                    <td class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalEdit<?= $value['id']; ?>">
                                                        <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <!-- <a href="" class="btn btn-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModalHapus">
                                                            <i class="bi bi-trash"></i>
                                                        </a> -->
                                                        <button type="button" class="btn btn-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModalHapus<?= $value['id'];?>">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php }?>
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
                        <form action="<?= base_url(); ?>admin/beranda/Visi_misi/tambah/" method="post">
                        <div class="mb-3">
                            <label for="visi" class="col-form-label">Visi :</label>
                            <textarea class="form-control" name="visi" id="visi" required></textarea>
                            <small class="form-text text-danger"><?= form_error('visi'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="misi" class="col-form-label">Misi :</label>
                            <textarea class="form-control" name="misi" id="misi" required></textarea>
                            <small class="form-text text-danger"><?= form_error('misi'); ?></small>
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
            <?php foreach ($data_visi_misi as $key => $value) {
                # code...
            ?>
            <div class="modal fade" id="exampleModalEdit<?= $value['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url(). 'admin/beranda/Visi_misi/ubah/'. $value['id'] ?>" method="post">
                        <!-- <input type="hidden" name="id" value="<?= $data['id_banner']; ?>"> -->
                        <div class="mb-3">
                            <label for="judul" class="col-form-label">Visi :</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="<?= $value['visi']; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="col-form-label">Misi :</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi"><?= $value['misi']; ?></textarea>
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
            <?php }?>
            <!-- End of Modals -->


            <!-- Modal Hapus-->
            <?php foreach ($data_visi_misi as $key => $value) {
            ?>
            <div class="modal fade" id="exampleModalHapus<?= $value['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a href="<?= base_url(); ?>admin/beranda/Visi_misi/hapus/<?= $value['id'];?>" class="btn btn-danger">Ya</a> 
                </div>
                </div>
            </div>
            </div>
            <?php } ?>


            <!-- End of Main Content -->

