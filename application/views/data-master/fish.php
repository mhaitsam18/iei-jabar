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
								<a href="#" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addModal"><i data-feather="eye" class="icon-sm me-2"></i> <span>add</span></a>
							</div>
						</div>
					</div>
					<?php if (validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors(); ?>
						</div>
					<?php endif ?>
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="fish"></div>
					<?= $this->session->flashdata('message'); ?>
					<div class="table-responsive">
						<table class="table table-hover" id="dataTableExample">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Scientific Name</th>
									<th scope="col">General Name</th>
									<th scope="col">Synonim</th>
									<th scope="col">Spesies</th>
									<th scope="col">Genus</th>
									<th scope="col">Family</th>
									<th scope="col">Order</th>
									<th scope="col">Class</th>
									<th scope="col">Phylum</th>
									<th scope="col">Kingdom</th>
									<th scope="col">Fish Type</th>
									<th scope="col">Conservation/Abundance</th>
									<th scope="col">Length</th>
									<th scope="col">Weight</th>
									<th scope="col" style="max-width: 100px;">Information</th>
									<th scope="col">Picture</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($fishs as $fish) : ?>

									<tr>
										<td><?= $no++ ?></td>
										<td><?= $fish['scientific_name'] ?></td>
										<td><?= $fish['general_name'] ?></td>
										<td><?= $fish['synonim'] ?></td>
										<td><?= $fish['species'] ?></td>
										<td><?= $fish['genus'] ?></td>
										<td><?= $fish['family'] ?></td>
										<td><?= $fish['ordo'] ?></td>
										<td><?= $fish['class'] ?></td>
										<td><?= $fish['phylum'] ?></td>
										<td><?= $fish['kingdom'] ?></td>
										<td><?= $fish['type'] ?></td>
										<td><?= $fish['abundance'] ?></td>
										<td><?= $fish['length'] ?></td>
										<td><?= $fish['weight'] ?></td>
										<td><?= $fish['information'] ?></td>
										<td><img src="<?= base_url('assets/img/' . $fish['image']) ?>" class="img-thumbnail img-fluid"></td>
										<td>

											<a href="#" class="badge bg-success edit-modal" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $fish['id'] ?>" data-scientific_name="<?= $fish['scientific_name'] ?>" data-general_name="<?= $fish['general_name'] ?>" data-synonim="<?= $fish['synonim'] ?>" data-image="<?= $fish['image'] ?>" data-species_id="<?= $fish['species_id'] ?>" data-fish_type_id="<?= $fish['fish_type_id'] ?>" data-abundance_id="<?= $fish['abundance_id'] ?>" data-length="<?= $fish['length'] ?>" data-weight="<?= $fish['weight'] ?>" data-information="<?= $fish['information'] ?>">Edit</a>

											<a href="<?= base_url("DataMaster/fish/delete/$fish[id]"); ?>" class="badge bg-danger tombol-hapus" data-hapus="fish">Delete</a>

											<a href="<?= base_url("DataMaster/FishDistribution/index/$fish[id]"); ?>" class="badge bg-primary">View Distributions</a>
											<a href="<?= base_url("DataMaster/FishFood/index/$fish[id]"); ?>" class="badge bg-warning">View Foods</a>
											<a href="<?= base_url("DataMaster/FishHabitat/index/$fish[id]"); ?>" class="badge bg-info">View Habitats</a>
											<a href="<?= base_url("DataMaster/Origin/index/$fish[id]"); ?>" class="badge bg-info">View Origins</a>
											<a href="<?= base_url("DataMaster/LocalName/index/$fish[id]"); ?>" class="badge bg-info">View Local Name</a>
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
				<h1 class="modal-title fs-5" id="addModalLabel">Add Fish</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('DataMaster/fish') ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="aksi" value="add">
				<div class="modal-body">
					<div class="mb-3">
						<label for="scientific_name">Scientific Name</label>
						<input type="text" class="form-control" id="scientific_name" name="scientific_name">
					</div>
					<?php echo form_error('scientific_name', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="general_name">General Name</label>
						<input type="text" class="form-control" id="general_name" name="general_name">
					</div>
					<?php echo form_error('general_name', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="synonim">Synonim</label>
						<input type="text" class="form-control" id="synonim" name="synonim">
					</div>
					<?php echo form_error('synonim', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="species_id">Species</label>
						<select class="select2-add form-select" id="species_id" name="species_id" style="width: 100%; height: 200% !important;">
							<option value="" selected disabled>Choose species</option>
							<?php foreach ($speciess as $species) : ?>
								<option value="<?= $species['id'] ?>"><?= $species['species'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('species_id', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="food">Food</label>
						<select class="multiple-add form-select" id="food" name="food[]" data-placeholder="Choose Food" multiple>
							<?php foreach ($foods as $food) : ?>
								<option value="<?= $food['id'] ?>"><?= $food['food'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('food', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="habitat">Habitat</label>
						<select class="multiple-add form-select" id="habitat" name="habitat[]" data-placeholder="Choose Habitat" multiple>
							<?php foreach ($habitats as $habitat) : ?>
								<option value="<?= $habitat['id'] ?>"><?= $habitat['habitat'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('habitat', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="distribution">Distribution</label>
						<select class="multiple-add form-select" id="distribution" name="distribution[]" data-placeholder="Choose Distribution" multiple>
							<?php foreach ($distributions as $distribution) : ?>
								<option value="<?= $distribution['id'] ?>"><?= $distribution['distribution'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('distribution', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="local_name">Local Name</label>
						<select class="multiple-add form-select" id="local_name" name="local_name[]" data-placeholder="Fill Local Name" multiple>
						</select>
					</div>
					<?php echo form_error('local_name', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="origin">Origin</label>
						<select class="multiple-add form-select" id="origin" name="origin[]" data-placeholder="Fill Origin" multiple>
						</select>
					</div>
					<?php echo form_error('origin', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="abundance_id">Conservation/Abundance</label>
						<select class="form-select" id="abundance_id" name="abundance_id">
							<option value="" selected disabled>Choose Conservation/Abundance</option>
							<?php foreach ($abundances as $abundance) : ?>
								<option value="<?= $abundance['id'] ?>"><?= $abundance['abundance'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('abundance_id', '<span class="text-danger">', '</span>'); ?>

					<div class="mb-3">
						<label for="fish_type_id">Fish Type</label>
						<select class="form-select" id="fish_type_id" name="fish_type_id">
							<option value="" selected disabled>Choose Fish Type</option>
							<?php foreach ($fish_types as $fish_type) : ?>
								<option value="<?= $fish_type['id'] ?>"><?= $fish_type['type'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('fish_type_id', '<span class="text-danger">', '</span>'); ?>

					<div class="mb-3">
						<label for="information">Information</label>
						<textarea class="form-control" id="information" name="information"></textarea>
					</div>
					<?php echo form_error('information', '<span class="text-danger">', '</span>'); ?>

					<div class="mb-3">
						<label for="length">Length</label>
						<input type="text" class="form-control" id="length" name="length" placeholder="30 cm - 80 cm">
					</div>
					<?php echo form_error('length', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="weight">Weight</label>
						<input type="text" class="form-control" id="weight" name="weight" placeholder="0,8 kg - 5 kg">
					</div>
					<?php echo form_error('weight', '<span class="text-danger">', '</span>'); ?>

					<div class="mb-3">
						<label for="image">Picture</label>
						<input type="file" class="form-control filepond" name="file" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3" data-folder="fish">
						<input type="hidden" name="image" id="img-filepond" value="">
					</div>
					<?php echo form_error('image', '<span class="text-danger">', '</span>'); ?>
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
				<h1 class="modal-title fs-5" id="editModalLabel">Edit Fish</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('DataMaster/fish') ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="aksi" value="update">
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="mb-3">
						<label for="scientific_name">Scientific Name</label>
						<input type="text" class="form-control" id="scientific_name" name="scientific_name">
					</div>
					<?php echo form_error('scientific_name', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="general_name">General Name</label>
						<input type="text" class="form-control" id="general_name" name="general_name">
					</div>
					<?php echo form_error('general_name', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="synonim">Synonim</label>
						<input type="text" class="form-control" id="synonim" name="synonim">
					</div>
					<?php echo form_error('synonim', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="species_id">Species</label>
						<select class="form-select select2-edit" id="edit_species_id" name="species_id">
							<option value="" selected disabled>Choose species</option>
							<?php foreach ($speciess as $species) : ?>
								<option value="<?= $species['id'] ?>"><?= $species['species'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('species_id', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="abundance_id">Conservation/Abundance</label>
						<select class="form-select select2-edit" id="abundance_id" name="abundance_id">
							<option value="" selected disabled>Choose Conservation/Abundance</option>
							<?php foreach ($abundances as $abundance) : ?>
								<option value="<?= $abundance['id'] ?>"><?= $abundance['abundance'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('abundance_id', '<span class="text-danger">', '</span>'); ?>

					<div class="mb-3">
						<label for="fish_type_id">Fish Type</label>
						<select class="form-select select2-edit" id="fish_type_id" name="fish_type_id">
							<option value="" selected disabled>Choose Fish Type</option>
							<?php foreach ($fish_types as $fish_type) : ?>
								<option value="<?= $fish_type['id'] ?>"><?= $fish_type['type'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('fish_type_id', '<span class="text-danger">', '</span>'); ?>

					<div class="mb-3">
						<label for="information">Information</label>
						<textarea class="form-control" id="information" name="information"></textarea>
					</div>
					<?php echo form_error('information', '<span class="text-danger">', '</span>'); ?>

					<div class="mb-3">
						<label for="length">Length</label>
						<input type="text" class="form-control" id="length" name="length" placeholder="30 cm - 80 cm">
					</div>
					<?php echo form_error('length', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="weight">Weight</label>
						<input type="text" class="form-control" id="weight" name="weight" placeholder="0,8 kg - 5 kg">
					</div>
					<?php echo form_error('weight', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<div class="col-sm-4 m-1">
							<img src="" class="img-thumbnail img-preview">
						</div>
						<label for="image">Picture</label>
						<input type="file" class="form-control img-input" name="image" onchange="previewImg()" id="image">
					</div>
					<?php echo form_error('image', '<span class="text-danger">', '</span>'); ?>
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
	$(document).on("click", ".edit-modal", function() {
		var id = $(this).data('id');
		$(".modal-body #id").val(id);

		var scientific_name = $(this).data('scientific_name');
		$(".modal-body #scientific_name").val(scientific_name);

		var general_name = $(this).data('general_name');
		$(".modal-body #general_name").val(general_name);

		var synonim = $(this).data('synonim');
		$(".modal-body #synonim").val(synonim);

		var species_id = $(this).data('species_id');
		$(".modal-body #edit_species_id").val(species_id);

		var fish_type_id = $(this).data('fish_type_id');
		$(".modal-body #fish_type_id").val(fish_type_id);

		var abundance_id = $(this).data('abundance_id');
		$(".modal-body #abundance_id").val(abundance_id);

		var length = $(this).data('length');
		$(".modal-body #length").val(length);

		var weight = $(this).data('weight');
		$(".modal-body #weight").val(weight);

		var information = $(this).data('information');
		$(".modal-body #information").val(information);

		var image = $(this).data('image');
		$(".img-preview").attr('src', '<?= base_url('assets/img/') ?>' + image);
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
		$('.multiple-add').select2({
			dropdownParent: $('#addModal'),
			theme: "bootstrap",
			placeholder: $(this).data('placeholder'),
			closeOnSelect: false,
			tags: true
		});
	});
</script>
