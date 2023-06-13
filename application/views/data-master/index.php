
<section class="row">
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="Data Master"></div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($dataMaster as $key): ?>
            <?php if ($key['id']!=10): ?>
                <div class="card my-3 mx-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $key['title'] ?></h5>
                        <a href="<?= base_url("$key[url]") ?>" class="card-link">Detail</a>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>

</section>
<!-- /.container-fluid -->