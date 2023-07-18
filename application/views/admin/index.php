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
					<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="Sub Menu"></div>
					<?= $this->session->flashdata('message'); ?>
					<div class="d-flex justify-content-between align-items-baseline mb-2">
						<h6 class="card-title mb-0">Hierarchy Form</h6>
					</div>
					<div class="row">
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Continent</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Continent</a>
									<a href="<?= base_url('DataMaster/Continent') ?>" class="btn btn-sm btn-info">See Continent</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Country</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Country</a>
									<a href="<?= base_url('DataMaster/Country') ?>" class="btn btn-sm btn-info">See Country</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Province</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Province</a>
									<a href="<?= base_url('DataMaster/Province') ?>" class="btn btn-sm btn-info">See Province</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Archipelago / Waters</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Waters</a>
									<a href="<?= base_url('DataMaster/Archipelago') ?>" class="btn btn-sm btn-info">See Waters</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Fish Type</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Type</a>
									<a href="<?= base_url('DataMaster/FishType') ?>" class="btn btn-sm btn-info">See Type</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Abundance</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Abundance</a>
									<a href="<?= base_url('DataMaster/Abundance') ?>" class="btn btn-sm btn-info">See Abundance</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Food</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Food</a>
									<a href="<?= base_url('DataMaster/Food') ?>" class="btn btn-sm btn-info">See Food</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Habitat</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Habitat</a>
									<a href="<?= base_url('DataMaster/Habitat') ?>" class="btn btn-sm btn-info">See Habitat</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Kingdom</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Kingdom</a>
									<a href="<?= base_url('DataMaster/Kingdom') ?>" class="btn btn-sm btn-info">See Kingdom</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Phylum</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Phylum</a>
									<a href="<?= base_url('DataMaster/Phylum') ?>" class="btn btn-sm btn-info">See Phylum</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Class</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Class</a>
									<a href="<?= base_url('DataMaster/Classes') ?>" class="btn btn-sm btn-info">See Class</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Ordo</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Ordo</a>
									<a href="<?= base_url('DataMaster/Ordo') ?>" class="btn btn-sm btn-info">See Ordo</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Family</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Family</a>
									<a href="<?= base_url('DataMaster/Family') ?>" class="btn btn-sm btn-info">See Family</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Genus</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Genus</a>
									<a href="<?= base_url('DataMaster/Genus') ?>" class="btn btn-sm btn-info">See Genus</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Species</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Species</a>
									<a href="<?= base_url('DataMaster/Species') ?>" class="btn btn-sm btn-info">See Species</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Fish</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Fish</a>
									<a href="<?= base_url('DataMaster/Fish') ?>" class="btn btn-sm btn-info">See Fish</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Local Name</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Local Name</a>
									<!-- <a href="<?= base_url('DataMaster/LocalName') ?>" class="btn btn-sm btn-info">See Local Name</a> -->
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Origin</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Fill Origin</a>
									<!-- <a href="<?= base_url('DataMaster/Origin') ?>" class="btn btn-sm btn-info">See Origin</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- row -->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


<script>
	function previewImg() {
		const image = document.querySelector('.input-img');
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
	$(document).on("click", ".update", function() {
		var id = $(this).data('id');
		$(".modal-body #id").val(id);
	});


	// In your Javascript (external .js resource or <script> tag)
	$(document).ready(function() {
		$('.select2-add').select2({
			dropdownParent: $('#tambahModal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.select2-edit').select2({
			dropdownParent: $('#editModal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.multiple-add').select2({
			dropdownParent: $('#tambahModal'),
			theme: "bootstrap",
			placeholder: $(this).data('placeholder'),
			closeOnSelect: false,
			tags: true
		});
	});
</script>