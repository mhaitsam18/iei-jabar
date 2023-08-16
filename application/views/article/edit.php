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
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="Data User"></div>
					<?= $this->session->flashdata('message'); ?>
					<form action="<?= base_url('Artikel/edit/' . $article->id) ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-9 col-sm-12">
								<textarea class="form-control" name="content" id="simpleMdeExample" rows="10"><?= set_value('content', $article->content) ?></textarea>
								<?= form_error('content', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-lg-3 col-sm-12">
								<div class="mb-3">
									<label for="title">Title</label>
									<input type="text" name="title" id="title" class="form-control" value="<?= set_value('title', $article->title) ?>">
									<?= form_error('title', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="mb-3">
									<label for="slug">Slug</label>
									<input type="text" name="slug" id="slug" class="form-control" value="<?= set_value('slug', $article->slug) ?>">
									<?= form_error('slug', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="mb-3">
									<label for="excerpt">Excerpt</label>
									<textarea name="excerpt" id="excerpt" class="form-control" cols="30" rows="10"><?= set_value('excerpt', $article->excerpt) ?></textarea>
									<?= form_error('excerpt', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="mb-3">
									<div class="col-sm-4 m-1">
										<img src="<?= base_url('assets/img/' . set_value('nama_thumbnail', $article->thumbnail)) ?>" class="img-thumbnail img-preview">
									</div>
									<label for="thumbnail">Thumbnail</label>
									<input type="file" class="form-control filepond" name="thumbnail" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3" data-folder="artikel" onchange="previewImg()">
									<input type="hidden" name="nama_thumbnail" id="img-filepond" value="<?= set_value('nama_thumbnail', $article->thumbnail) ?>">
									<?= form_error('nama_thumbnail', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="mb-3">
									<label for="article_category_id">Article Category</label>
									<select class="form-select" name="article_category_id" id="article_category_id">
										<option value="" selected disabled>Choose Article Category</option>
										<?php foreach ($article_categories as $category) : ?>
											<option value="<?= $category->id ?>" <?= (set_value('article_category_id', $article->article_category_id) == $category->id) ? 'selected' : "" ?>><?= $category->article_category ?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('article_category_id', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="mb-3">
									<label for="article_type_id">Article Type</label>
									<select class="form-select" name="article_type_id" id="article_type_id">
										<option value="" selected disabled>Choose Article Type</option>
										<?php foreach ($article_types as $type) : ?>
											<option value="<?= $type->id ?>" <?= (set_value('article_type_id', $article->article_type_id) == $type->id) ? 'selected' : "" ?>><?= $type->article_type ?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('article_type_id', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="mb-3">
									<label for="fish_id">Fish</label>
									<select class="form-select" name="fish_id" id="fish_id">
										<option value="" selected disabled>Choose Fish</option>
										<?php foreach ($fishs as $fish) : ?>
											<option value="<?= $fish->id ?>" <?= (set_value('fish_id', $article->fish_id) == $fish->id) ? 'selected' : "" ?>><?= $fish->general_name ?></option>
										<?php endforeach; ?>
									</select>
									<small>If the article relates to a particular fish</small>
									<?= form_error('fish_id', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="mb-3">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="1" name="published_at" id="published_at">
										<label class="form-check-label" for="published_at">
											Publish?
										</label>
									</div>
								</div>
								<button type="submit" class="btn btn-primary float-end">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> <!-- row -->
</div>
<script>
	function previewImg() {
		const thumbnail = document.querySelector('.img-input');
		const imgPreview = document.querySelector('.img-preview');
		imgPreview.style.display = 'block';
		const oFReader = new FileReader();
		oFReader.readAsDataURL(thumbnail.files[0]);

		oFReader.onload = function(oFREvent) {
			imgPreview.src = oFREvent.target.result;
		}
	}
</script>
