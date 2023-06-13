    <style type="text/css">
        body {
            overflow-y: scroll;
            scroll-behavior: smooth;
        }
    </style>
    <!-- Begin Page Content -->
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <h3><?= $title ?></h3>
    </div>
    <div class="page-content">
        <section class="row">
            <?= $this->session->flashdata('message'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="Barang"></div>
            <div class="row">
                <div class="col-lg-12">
                    <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#barangMasukModal">Form Barang Masuk</a>
                    <a href="" class="btn btn-danger mb-3" data-toggle="modal" data-target="#barangKeluarModal">Form Barang Keluar</a>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover" id="exemple1">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Kode Transaksi</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Aksi</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($inout_produk as $key) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $key['kode_transaksi'] ?></td>
                                            <td><?= $key['nama_produk'] ?></td>
                                            <td><?= $key['tanggal'] ?></td>
                                            <td><?= $key['aksi'] ?></td>
                                            <td><?= $key['jumlah'] ?></td>
                                            <td>
                                                <a href="#" class="badge bg-success updateProdukModalButton" data-toggle="modal" data-target="#produkModal" data-id="<?= $key['id_inout_produk'] ?>">Edit</a>
                                                <a href="#" class="badge bg-danger tombol-hapus" data-hapus="Produk">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Modal -->
    <div class="modal fade" id="barangMasukModal" tabindex="-1" aria-labelledby="barangMasukModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="barangMasukModalLabel">Form Barang Masuk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('Produk/inout') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="aksi" value="masuk">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi" placeholder="ID Transaksi">
                            <?= form_error('kode_transaksi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select class="form-select produk" id="id_produk" name="id_produk" data-placeholder="Pilih Produk">
                                <?php foreach ($produk as $key) : ?>
                                    <option value="<?= $key['id_produk'] ?>"><?= $key['nama_produk'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <?= form_error('id_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
                            <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="barangKeluarModal" tabindex="-1" aria-labelledby="barangKeluarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="barangKeluarModalLabel">Form Barang Keluar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('Produk/inout') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="aksi" value="keluar">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi" placeholder="ID Transaksi">
                            <?= form_error('kode_transaksi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select class="form-select produk" id="id_produk" name="id_produk" data-placeholder="Pilih Produk">
                                <?php foreach ($produk as $key) : ?>
                                    <option value="<?= $key['id_produk'] ?>"><?= $key['nama_produk'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <?= form_error('id_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
                            <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('.produk').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
    </script>