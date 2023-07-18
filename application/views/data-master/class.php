<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0"><?= $title ?></h4>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="card">
                <div class="card-body">

                    <?= form_error('class', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0"><?= $title ?></h6>
                        <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                <a href="#" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#tambahModal"><i data-feather="eye" class="icon-sm me-2"></i> <span class="text-danger">Tambah</span></a>
                            </div>
                        </div>
                    </div>
                    <?= form_error('class', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="class"></div>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableExample">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Latin Kelas</th>
                                    <th scope="col">Nama Umum</th>
                                    <th scope="col">Filum</th>
                                    <th scope="col">Kingdom</th>
                                    <th scope="col" style="max-width: 100px;">Deskripsi</th>
                                    <th scope="col">Jumlah Spesies</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($classes as $class) : ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $class['class'] ?></td>
                                        <td><?= $class['general_name'] ?></td>
                                        <td><?= $class['phylum'] ?></td>
                                        <td><?= $class['kingdom'] ?></td>
                                        <td><?= $class['description'] ?></td>
                                        <td><?= $class['species'] ?></td>
                                        <td><img src="<?= base_url('assets/img/' . $class['picture']) ?>" class="img-thumbnail img-fluid"></td>
                                        <td>

                                            <a href="#" class="badge bg-success updateclass" data-bs-toggle="modal" data-bs-target="#edit" data-id="<?= $class['id'] ?>" data-class="<?= $class['class'] ?>" data-general_name="<?= $class['general_name'] ?>" data-species="<?= $class['species'] ?>" data-description="<?= $class['description'] ?>" data-picture="<?= $class['picture'] ?>" data-phylum_id="<?= $class['phylum_id'] ?>">Ubah</a>

                                            <a href="<?= base_url("DataMaster/class/delete/$class[id]"); ?>" class="badge bg-danger tombol-hapus" data-hapus="class">Hapus</a>
                                        </td>
                                    </tr>

                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->
</div>

<!-- Modal Add-->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah Data Kelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('DataMaster/classes') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="aksi" value="add">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="class">Nama Latin Kelas</label>
                        <input type="text" class="form-control" id="class" name="class" placeholder="class Name">
                    </div>
                    <?php echo form_error('class', '<span class="text-danger">', '</span>'); ?>
                    <div class="mb-3">
                        <label for="general_name">Nama Umum</label>
                        <input type="text" class="form-control" id="general_name" name="general_name">
                    </div>
                    <?php echo form_error('general_name', '<span class="text-danger">', '</span>'); ?>
                    <div class="mb-3">
                        <label for="species">Jumlah Spesies</label>
                        <input type="number" class="form-control" id="species" name="species">
                    </div>
                    <?php echo form_error('species', '<span class="text-danger">', '</span>'); ?>
                    <div class="mb-3">
                        <label for="phylum_id">Filum</label>
                        <select class="form-select select2-add" id="phylum_id" name="phylum_id">
                            <option value="" selected disabled>Pilih Filum</option>
                            <?php foreach ($phylums as $phylum) : ?>
                                <option value="<?= $phylum['id'] ?>"><?= $phylum['phylum'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php echo form_error('phylum_id', '<span class="text-danger">', '</span>'); ?>
                    <div class="mb-3">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" placeholder="description Name"></textarea>
                    </div>
                    <?php echo form_error('description', '<span class="text-danger">', '</span>'); ?>
                    <div class="mb-3">
                        <label for="picture">Gambar</label>
                        <input type="file" class="form-control filepond" name="file" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3" data-folder="class">
                        <input type="hidden" name="picture" id="img-filepond" value="">
                    </div>
                    <?php echo form_error('picture', '<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editLabel">Edit Data Kelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('DataMaster/classes') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="aksi" value="update">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="class">Nama Latin Kelas</label>
                        <input type="text" class="form-control" id="class" name="class" placeholder="class Name">
                    </div>
                    <?php echo form_error('class', '<span class="text-danger">', '</span>'); ?>
                    <div class="mb-3">
                        <label for="general_name">Nama Umum</label>
                        <input type="text" class="form-control" id="general_name" name="general_name">
                    </div>
                    <?php echo form_error('general_name', '<span class="text-danger">', '</span>'); ?>
                    <div class="mb-3">
                        <label for="species">Jumlah Spesies</label>
                        <input type="number" class="form-control" id="species" name="species">
                    </div>
                    <?php echo form_error('species', '<span class="text-danger">', '</span>'); ?>
                    <div class="mb-3">
                        <label for="phylum_id">Filum</label>
                        <select class="form-select select2-edit" id="phylum_id" name="phylum_id">
                            <option value="" selected disabled>Pilih Filum</option>
                            <?php foreach ($phylums as $phylum) : ?>
                                <option value="<?= $phylum['id'] ?>"><?= $phylum['phylum'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php echo form_error('phylum_id', '<span class="text-danger">', '</span>'); ?>
                    <div class="mb-3">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" placeholder="description Name"></textarea>
                    </div>
                    <?php echo form_error('description', '<span class="text-danger">', '</span>'); ?>
                    <div class="mb-3">
                        <div class="col-sm-4 m-1">
                            <img src="" class="img-thumbnail img-preview">
                        </div>
                        <label for="picture">Gambar</label>
                        <input type="file" class="form-control img-input" name="picture" onchange="previewImg()" id="picture">
                    </div>
                    <?php echo form_error('picture', '<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


<script>
    function previewImg() {
        const picture = document.querySelector('#picture');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(picture.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    $(document).on("click", ".updateclass", function() {
        var id = $(this).data('id');
        $(".modal-body  #id").val(id);

        var classes = $(this).data('class');
        $(".modal-body  #class").val(classes);

        var general_name = $(this).data('general_name');
        $(".modal-body  #general_name").val(general_name);

        var phylum_id = $(this).data('phylum_id');
        $(".modal-body  #phylum_id").val(phylum_id);

        var description = $(this).data('description');
        $(".modal-body  #description").val(description);

        var species = $(this).data('species');
        $(".modal-body  #species").val(species);

        var picture = $(this).data('picture');
        $(".img-preview").attr('src', '<?= base_url('assets/img/') ?>' + picture);
    });


    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2-add').select2({
            dropdownParent: $('#tambahModal'),
            theme: 'bootstrap',
            tags: true
        });
        $('.select2-edit').select2({
            dropdownParent: $('#edit'),
            theme: 'bootstrap',
            tags: true
        });
    });
</script>