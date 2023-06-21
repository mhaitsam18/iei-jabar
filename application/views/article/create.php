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
                    <form action="<?= base_url('Artikel/create') ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-9 col-sm-12">
                                <textarea class="form-control" name="tinymce" id="simpleMdeExample" rows="10"></textarea>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="mb-3">
                                    <label for="excerpt">Excerpt</label>
                                    <textarea name="excerpt" id="excerpt" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input type="file" class="form-control filepond" name="thumbnail" id="img-filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
                                    <input type="hidden" name="nama_thumbnail" id="img-filepond">
                                </div>
                                <div class="mb-3">
                                    <label for="category_article_id">Kategori Artikel</label>
                                    <select class="form-select" name="category_article_id" id="category_article_id">
                                        <option value="" selected disabled>Pilih Kategori Artikel</option>
                                        <?php foreach($data_ikan as $ikan): ?>
                                            <option value="<?= $ikan->id ?>"><?= $ikan->scientific_name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="type_article_id">Tipe Artikel</label>
                                    <select class="form-select" name="type_article_id" id="type_article_id">
                                        <option value="" selected disabled>Pilih Tipe Artikel</option>
                                        <?php foreach($data_type as $type): ?>
                                            <option value="<?= $type->id ?>"><?= $type->type ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary float-end">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- row -->

    </div>