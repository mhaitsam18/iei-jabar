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

					<?php if (validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors(); ?>
						</div>
					<?php endif ?>
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="order"></div>
					<?= $this->session->flashdata('message'); ?>
					<div class="table-responsive">
						<table class="table table-hover" id="dataTableExample">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Order</th>
									<th scope="col">General Name</th>
									<th scope="col">Class</th>
									<th scope="col">Phylum</th>
									<th scope="col">Kingdom</th>
									<th scope="col" style="max-width: 100px;">Desciption</th>
									<th scope="col">Picture</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($ordos as $ordo) : ?>

									<tr>
										<td><?= $no++ ?></td>
										<td><?= $ordo['ordo'] ?></td>
										<td><?= $ordo['general_name'] ?></td>
										<td><?= $ordo['class'] ?></td>
										<td><?= $ordo['phylum'] ?></td>
										<td><?= $ordo['kingdom'] ?></td>
										<td><?= $ordo['description'] ?></td>
										<td><img src="<?= base_url('assets/img/' . $ordo['picture']) ?>" class="img-thumbnail img-fluid"></td>
										<td>

											<a href="#" class="badge bg-success edit-modal" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $ordo['id'] ?>" data-ordo="<?= $ordo['ordo'] ?>" data-general_name="<?= $ordo['general_name'] ?>" data-description="<?= $ordo['description'] ?>" data-picture="<?= $ordo['picture'] ?>" data-class_id="<?= $ordo['class_id'] ?>">Edit</a>

											<a href="<?= base_url("DataMaster/ordo/delete/$ordo[id]"); ?>" class="badge bg-danger tombol-hapus" data-hapus="Order">Delete</a>
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
				<h1 class="modal-title fs-5" id="addModalLabel">add Order</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('DataMaster/ordo') ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="aksi" value="add">
				<div class="modal-body">
					<div class="mb-3">
						<label for="ordo">Order</label>
						<input type="text" class="form-control" id="ordo" name="ordo">
					</div>
					<?php echo form_error('ordo', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="general_name">General Name</label>
						<input type="text" class="form-control" id="general_name" name="general_name">
					</div>
					<?php echo form_error('general_name', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="class_id">Class</label>
						<select class="form-select select2-add" id="class_id" name="class_id">
							<option value="" selected disabled>Choose Class</option>
							<?php foreach ($classes as $class) : ?>
								<option value="<?= $class['id'] ?>"><?= $class['class'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('class_id', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="description">Desciption</label>
						<textarea class="form-control" id="description" name="description"></textarea>
					</div>
					<?php echo form_error('description', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="picture">Picture</label>
						<input type="file" class="form-control filepond" name="file" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3" data-folder="ordo">
						<input type="hidden" name="picture" id="img-filepond" value="">
					</div>
					<?php echo form_error('picture', '<span class="text-danger">', '</span>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">add</button>
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
				<h1 class="modal-title fs-5" id="editModalLabel">Edit Order</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('DataMaster/ordo') ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="aksi" value="update">
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="mb-3">
						<label for="ordo">Order</label>
						<input type="text" class="form-control" id="ordo" name="ordo">
					</div>
					<?php echo form_error('ordo', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="general_name">General Name</label>
						<input type="text" class="form-control" id="general_name" name="general_name">
					</div>
					<?php echo form_error('general_name', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="class_id">Class</label>
						<select class="form-select select2-edit" id="edit_class_id" name="class_id">
							<option value="" selected disabled>Choose Class</option>
							<?php foreach ($classes as $class) : ?>
								<option value="<?= $class['id'] ?>"><?= $class['class'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('class_id', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="description">Desciption</label>
						<textarea class="form-control" id="description" name="description"></textarea>
					</div>
					<?php echo form_error('description', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<div class="col-sm-4 m-1">
							<img src="" class="img-thumbnail img-preview">
						</div>
						<label for="picture">Picture</label>
						<input type="file" class="form-control img-input" name="picture" onchange="previewImg()" id="picture">
					</div>
					<?php echo form_error('picture', '<span class="text-danger">', '</span>'); ?>
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

	$(document).on("click", ".edit-modal", function() {
		var id = $(this).data('id');
		$(".modal-body  #id").val(id);

		var ordo = $(this).data('ordo');
		$(".modal-body  #ordo").val(ordo);

		var general_name = $(this).data('general_name');
		$(".modal-body  #general_name").val(general_name);

		var class_id = $(this).data('class_id');
		$(".modal-body  #edit_class_id").val(class_id);

		var description = $(this).data('description');
		$(".modal-body  #description").val(description);

		var picture = $(this).data('picture');
		$(".img-preview").attr('src', '<?= base_url('assets/img/') ?>' + picture);
	});


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
	});
</script>
