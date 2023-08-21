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
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0"><?= $title ?> : <?= $fish->general_name ?></h6>
                        <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                <a href="#" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addModal"><i data-feather="eye" class="icon-sm me-2"></i> <span>Add</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- <?= form_error('fish_id', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?= form_error('origin', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="Origin"></div>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableExample">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Origin</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($origins as $origin) : ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $origin['origin'] ?></td>
                                        <td>
                                            <a href="<?= base_url("DataMaster/Origin/delete/$origin[id]"); ?>" class="badge bg-danger tombol-hapus" data-hapus="fish">Delete</a>
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
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Add Origin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('DataMaster/Origin/index/' . $fish->id) ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="aksi" value="add">
                <input type="hidden" name="fish_id" value="<?= $fish->id ?>">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="origin">Origin</label>
                        <input type="text" class="form-control" id="origin" name="origin">
                    </div>
                    <?php echo form_error('origin', '<span class="text-danger">', '</span>'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


<script>
    function previewImg() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2-add').select2({
            dropdownParent: $('#addModal'),
            theme: 'bootstrap',
            tags: true
        });
        $('.select2-edit').select2({
            dropdownParent: $('#editModal'),
            theme: 'bootstrap',
            tags: true
        });
        $('.multiple-add').select2({
            dropdownParent: $('#addModal'),
            theme: "bootstrap",
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
            tags: true
        });
    });
</script>
