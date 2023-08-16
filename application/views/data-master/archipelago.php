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

                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif ?>

                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0"><?= $title ?></h6>
                        <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                <a href="#" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addModal"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Add</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="Archipelago/Waters"></div>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableExample">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Archipelago or Waters</th>
                                    <th scope="col">Province</th>
                                    <th scope="col">Distribution</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($archipelago as $ct) : ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $ct['archipelago'] ?></td>
                                        <td><?= $ct['province'] ?></td>
                                        <td><?= $ct['distribution'] ?></td>
                                        <td>

                                            <a href="#" class="badge bg-success edit-modal" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $ct['ar_id'] ?>" data-province="<?= $ct['pr_id'] ?>" data-distribution="<?= $ct['d_id'] ?>" data-archipelago="<?= $ct['archipelago'] ?>">Edit</a>

                                            <a href="<?= base_url("DataMaster/archipelago/delete/$ct[ar_id]"); ?>" class="badge bg-danger tombol-hapus" data-hapus="archipelago">Delete</a>
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
                <h1 class="modal-title fs-5" id="addModalLabel">Add Archipelago</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('DataMaster/archipelago') ?>" method="post">
                <input type="hidden" name="aksi" value="add">
                <div class="modal-body">

                    <div class="form-group mb-3">
                        <label for="province">Province</label>
                        <select name="province" id="province" class="form-select">
                            <option value="" selected disabled>---Choose Province---</option>

                            <?php foreach ($provinces as $item) : ?>
                                <option value="<?= $item['id'] ?>"><?= $item['province'] ?></option>
                            <?php endforeach ?>


                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="distribution">Distribution</label>
                        <select name="distribution" id="distribution" class="form-select">
                            <option value="" selected disabled>---Choose Distribution---</option>

                            <?php foreach ($distributions as $item) : ?>
                                <option value="<?= $item['id'] ?>"><?= $item['distribution'] ?></option>
                            <?php endforeach ?>


                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="archipelago">Archipelago or Waters</label>
                        <input type="text" class="form-control" id="archipelago" name="archipelago" placeholder="Archipelago">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Archipelago or Waters</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('DataMaster/archipelago') ?>" method="post">
                <input type="hidden" name="aksi" value="update">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-3">
                        <label for="province">Province</label>
                        <select name="province" id="province" class="form-select">
                            <option value="" selected disabled>---Choose Province---</option>

                            <?php foreach ($provinces as $item) : ?>
                                <option value="<?= $item['id'] ?>"><?= $item['province'] ?></option>
                            <?php endforeach ?>


                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="distribution">Distribution</label>
                        <select name="distribution" id="distribution" class="form-select">
                            <option value="" selected disabled>---Choose Distribution---</option>

                            <?php foreach ($distributions as $item) : ?>
                                <option value="<?= $item['id'] ?>"><?= $item['distribution'] ?></option>
                            <?php endforeach ?>


                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="archipelago">Archipelago or Waters</label>
                        <input type="text" class="form-control" id="archipelago" name="archipelago" placeholder="Archipelago">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<script>
    $(document).on("click", ".edit-modal", function() {
        var id = $(this).data('id');
        $(".modal-body  #id").val(id);

        var distribution = $(this).data('distribution');
        $(".modal-body  #distribution").val(distribution);

        var province = $(this).data('province');
        $(".modal-body #province").val(province);

        var archipelago = $(this).data('archipelago');
        $(".modal-body #archipelago").val(archipelago);


        // alert(continent)
        // As pointed out in comments, 
        // it is unnecessary to have to manually call the modal.
        // $('#addBookDialog').modal('show');
    });
</script>
