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
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#continentModal">Fill Continent</a>
									<a href="<?= base_url('DataMaster/Continent') ?>" class="btn btn-sm btn-info">See Continent</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Country</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#countryModal">Fill Country</a>
									<a href="<?= base_url('DataMaster/Country') ?>" class="btn btn-sm btn-info">See Country</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Province</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#provinceModal">Fill Province</a>
									<a href="<?= base_url('DataMaster/Province') ?>" class="btn btn-sm btn-info">See Province</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Archipelago / Waters</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#archipelagoModal">Fill Waters</a>
									<a href="<?= base_url('DataMaster/Archipelago') ?>" class="btn btn-sm btn-info">See Waters</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Fish Type</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#fishTypeModal">Fill Type</a>
									<a href="<?= base_url('DataMaster/FishType') ?>" class="btn btn-sm btn-info">See Type</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Abundance</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#abundanceModal">Fill Abundance</a>
									<a href="<?= base_url('DataMaster/Abundance') ?>" class="btn btn-sm btn-info">See Abundance</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Food</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#foodModal">Fill Food</a>
									<a href="<?= base_url('DataMaster/Food') ?>" class="btn btn-sm btn-info">See Food</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Habitat</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#habitatModal">Fill Habitat</a>
									<a href="<?= base_url('DataMaster/Habitat') ?>" class="btn btn-sm btn-info">See Habitat</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Kingdom</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kingdomModal">Fill Kingdom</a>
									<a href="<?= base_url('DataMaster/Kingdom') ?>" class="btn btn-sm btn-info">See Kingdom</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Phylum</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#phylumModal">Fill Phylum</a>
									<a href="<?= base_url('DataMaster/Phylum') ?>" class="btn btn-sm btn-info">See Phylum</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Class</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#classModal">Fill Class</a>
									<a href="<?= base_url('DataMaster/Classes') ?>" class="btn btn-sm btn-info">See Class</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Ordo</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#ordoModal">Fill Ordo</a>
									<a href="<?= base_url('DataMaster/Ordo') ?>" class="btn btn-sm btn-info">See Ordo</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Family</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#familyModal">Fill Family</a>
									<a href="<?= base_url('DataMaster/Family') ?>" class="btn btn-sm btn-info">See Family</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Genus</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#genusModal">Fill Genus</a>
									<a href="<?= base_url('DataMaster/Genus') ?>" class="btn btn-sm btn-info">See Genus</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Species</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#speciesModal">Fill Species</a>
									<a href="<?= base_url('DataMaster/Species') ?>" class="btn btn-sm btn-info">See Species</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Fish</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#fishModal">Fill Fish</a>
									<a href="<?= base_url('DataMaster/Fish') ?>" class="btn btn-sm btn-info">See Fish</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Local Name</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#localNameModal">Fill Local Name</a>
									<!-- <a href="<?= base_url('DataMaster/LocalName') ?>" class="btn btn-sm btn-info">See Local Name</a> -->
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Origin</h4>
									<p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis ratione iure nobis quos laudantium?</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#originModal">Fill Origin</a>
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
<div class="modal fade" id="continentModal" tabindex="-1" aria-labelledby="continentModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="continentModalLabel">Add Continent</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/continent') ?>" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="continent">Continent</label>
						<input type="text" class="form-control" id="continent" name="continent" placeholder="Continent Name">
					</div>
					<?php echo form_error('continent', '<span class="">', '</span>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="countryModalLabel">Add country</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/country') ?>" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="country">country</label>
						<input type="text" class="form-control" id="country" name="country" placeholder="country Name">
					</div>
					<?php echo form_error('country', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="continent_id">Choose Continent</label>
						<select name="continent_id" id="continent_id" class="form-select">
							<option value="" selected disabled>Choose Continent</option>
							<?php foreach ($continents as $continent) : ?>
								<option value="<?= $continent['id'] ?>"><?= $continent['continent'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<?php echo form_error('continent_id', '<span class="">', '</span>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="provinceModal" tabindex="-1" aria-labelledby="provinceModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="provinceModalLabel">Add province</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/province') ?>" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="province">province</label>
						<input type="text" class="form-control" id="province" name="province" placeholder="province Name">
					</div>
					<?php echo form_error('province', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="country_id">Choose country</label>
						<select name="country_id" id="country_id" class="form-select">
							<option value="" selected disabled>Choose Country</option>
							<?php foreach ($countries as $country) : ?>
								<option value="<?= $country['id'] ?>"><?= $country['country'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<?php echo form_error('country_id', '<span class="">', '</span>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="distributionModal" tabindex="-1" aria-labelledby="distributionModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="distributionModalLabel">Add distribution</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/distribution') ?>" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="distribution">distribution</label>
						<input type="text" class="form-control" id="distribution" name="distribution" placeholder="distribution Name">
					</div>
					<?php echo form_error('distribution', '<span class="">', '</span>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="archipelagoModal" tabindex="-1" aria-labelledby="archipelagoModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="archipelagoModalLabel">Add archipelago</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/archipelago') ?>" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="archipelago">archipelago / waters</label>
						<input type="text" class="form-control" id="archipelago" name="archipelago" placeholder="archipelago Name">
					</div>
					<?php echo form_error('archipelago', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="province_id">Choose province</label>
						<select name="province_id" id="province_id" class="form-select">
							<option value="" selected disabled>Choose province</option>
							<?php foreach ($provinces as $province) : ?>
								<option value="<?= $province['id'] ?>"><?= $province['province'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<?php echo form_error('province_id', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="distribution_id">Choose distribution</label>
						<select name="distribution_id" id="distribution_id" class="form-select">
							<option value="" selected disabled>Choose distribution</option>
							<?php foreach ($distributions as $distribution) : ?>
								<option value="<?= $distribution['id'] ?>"><?= $distribution['distribution'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<?php echo form_error('distribution_id', '<span class="">', '</span>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="fishTypeModal" tabindex="-1" aria-labelledby="fishTypeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="fishTypeModalLabel">Add Fish Type</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/fishType') ?>" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="fish_type">Fish Type</label>
						<input type="text" class="form-control" id="fish_type" name="fish_type" placeholder="fish_type Name">
					</div>
					<?php echo form_error('fish_type', '<span class="">', '</span>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="abundanceModal" tabindex="-1" aria-labelledby="abundanceModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="abundanceModalLabel">Add Abundance</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/abundance') ?>" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="abundance">Abundance</label>
						<input type="text" class="form-control" id="abundance" name="abundance" placeholder="abundance Name">
					</div>
					<?php echo form_error('abundance', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" placeholder="description Name"></textarea>
					</div>
					<?php echo form_error('description', '<span class="">', '</span>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="foodModal" tabindex="-1" aria-labelledby="foodModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="foodModalLabel">Add food</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/food') ?>" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="food">food</label>
						<input type="text" class="form-control" id="food" name="food" placeholder="food Name">
					</div>
					<?php echo form_error('food', '<span class="">', '</span>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="habitatModal" tabindex="-1" aria-labelledby="habitatModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="habitatModalLabel">Add habitat</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/habitat') ?>" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="habitat">habitat</label>
						<input type="text" class="form-control" id="habitat" name="habitat" placeholder="habitat Name">
					</div>
					<?php echo form_error('habitat', '<span class="">', '</span>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="kingdomModal" tabindex="-1" aria-labelledby="kingdomModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="kingdomModalLabel">Add kingdom</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/kingdom') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="mb-3">
						<label for="kingdom">kingdom</label>
						<input type="text" class="form-control" id="kingdom" name="kingdom" placeholder="kingdom Name">
					</div>
					<?php echo form_error('kingdom', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" placeholder="description Name"></textarea>
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
<div class="modal fade" id="phylumModal" tabindex="-1" aria-labelledby="phylumModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="phylumModalLabel">Add phylum</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/phylum') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="mb-3">
						<label for="phylum">phylum</label>
						<input type="text" class="form-control" id="phylum" name="phylum" placeholder="phylum Name">
					</div>
					<?php echo form_error('phylum', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="kingdom_id">Kingdom</label>
						<select class="form-select " id="kingdom_id" name="kingdom_id">
							<option value="" selected disabled>Choose Kingdom</option>
							<?php foreach ($kingdoms as $kingdom) : ?>
								<option value="<?= $kingdom['id'] ?>"><?= $kingdom['kingdom'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('kingdom_id', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" placeholder="description Name"></textarea>
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
<div class="modal fade" id="classModal" tabindex="-1" aria-labelledby="classModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="classModalLabel">Add class</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/class') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="mb-3">
						<label for="class">class</label>
						<input type="text" class="form-control" id="class" name="class" placeholder="class Name">
					</div>
					<?php echo form_error('class', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="general_name">General Name</label>
						<input type="text" class="form-control" id="general_name" name="general_name" placeholder="General Name">
					</div>
					<?php echo form_error('general_name', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="phylum_id">phylum</label>
						<select class="form-select " id="phylum_id" name="phylum_id">
							<option value="" selected disabled>Choose phylum</option>
							<?php foreach ($phylums as $phylum) : ?>
								<option value="<?= $phylum['id'] ?>"><?= $phylum['phylum'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('phylum_id', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" placeholder="description Name"></textarea>
					</div>
					<?php echo form_error('description', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="species">Total Species</label>
						<input type="number" class="form-control" id="species" name="species" placeholder="How many species?">
					</div>
					<?php echo form_error('species', '<span class="">', '</span>'); ?>
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
<div class="modal fade" id="ordoModal" tabindex="-1" aria-labelledby="ordoModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="ordoModalLabel">Add ordo</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/ordo') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="mb-3">
						<label for="ordo">ordo</label>
						<input type="text" class="form-control" id="ordo" name="ordo" placeholder="ordo Name">
					</div>
					<?php echo form_error('ordo', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="general_name">General Name</label>
						<input type="text" class="form-control" id="general_name" name="general_name" placeholder="General Name">
					</div>
					<?php echo form_error('general_name', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="class_id">Class</label>
						<select class="form-select select2-ordo" id="class_id" name="class_id">
							<option value="" selected disabled>Choose Class</option>
							<?php foreach ($classies as $class) : ?>
								<option value="<?= $class['id'] ?>"><?= $class['class'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('class_id', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" placeholder="description Name"></textarea>
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
<div class="modal fade" id="familyModal" tabindex="-1" aria-labelledby="familyModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="familyModalLabel">Add family</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/family') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="mb-3">
						<label for="family">family</label>
						<input type="text" class="form-control" id="family" name="family" placeholder="family Name">
					</div>
					<?php echo form_error('family', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="general_name">General Name</label>
						<input type="text" class="form-control" id="general_name" name="general_name" placeholder="General Name">
					</div>
					<?php echo form_error('general_name', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="ordo_id">Ordo</label>
						<select class="form-select select2-family" id="ordo_id" name="ordo_id">
							<option value="" selected disabled>Choose Ordo</option>
							<?php foreach ($ordos as $ordo) : ?>
								<option value="<?= $ordo['id'] ?>"><?= $ordo['ordo'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('ordo_id', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" placeholder="description Name"></textarea>
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
<div class="modal fade" id="genusModal" tabindex="-1" aria-labelledby="genusModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="genusModalLabel">Add genus</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/genus') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="mb-3">
						<label for="genus">genus</label>
						<input type="text" class="form-control" id="genus" name="genus" placeholder="genus Name">
					</div>
					<?php echo form_error('genus', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="general_name">General Name</label>
						<input type="text" class="form-control" id="general_name" name="general_name" placeholder="General Name">
					</div>
					<?php echo form_error('general_name', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="family_id">family</label>
						<select class="form-select select2-genus" id="family_id" name="family_id">
							<option value="" selected disabled>Choose family</option>
							<?php foreach ($families as $family) : ?>
								<option value="<?= $family['id'] ?>"><?= $family['family'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('family_id', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" placeholder="description Name"></textarea>
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
<div class="modal fade" id="speciesModal" tabindex="-1" aria-labelledby="speciesModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="speciesModalLabel">Add species</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/species') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="mb-3">
						<label for="species">species</label>
						<input type="text" class="form-control" id="species" name="species" placeholder="species Name">
					</div>
					<?php echo form_error('species', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="general_name">General Name</label>
						<input type="text" class="form-control" id="general_name" name="general_name" placeholder="General Name">
					</div>
					<?php echo form_error('general_name', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="genus_id">genus</label>
						<select class="form-select select2-species" id="genus_id" name="genus_id">
							<option value="" selected disabled>Choose genus</option>
							<?php foreach ($genera as $genus) : ?>
								<option value="<?= $genus['id'] ?>"><?= $genus['genus'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php echo form_error('genus_id', '<span class="text-danger">', '</span>'); ?>
					<div class="mb-3">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" placeholder="description Name"></textarea>
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
<div class="modal fade" id="fishModal" tabindex="-1" aria-labelledby="fishModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="fishModalLabel">Add fish</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/fish') ?>" method="post" enctype="multipart/form-data">
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
						<select class="select2-fish form-select" id="species_id" name="species_id" style="width: 100%; height: 200% !important;">
							<option value="" selected disabled>Pilih species</option>
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
						<label for="abundance_id">Conservation / Abundance</label>
						<select class="form-select" id="abundance_id" name="abundance_id">
							<option value="" selected disabled>Choose Abundance</option>
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
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="originModal" tabindex="-1" aria-labelledby="originModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="originModalLabel">Add origin</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/origin') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="mb-3">
						<label for="origin">Origin</label>
						<input type="text" class="form-control" id="origin" name="origin" placeholder="Origin">
					</div>
					<?php echo form_error('origin', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="fish_id">Fish</label>
						<select class="form-select" id="fish_id" name="fish_id">
							<option value="" selected disabled>Choose fish</option>
							<?php foreach ($fishs as $fish) : ?>
								<option value="<?= $fish['id'] ?>"><?= $fish['general_name'] ?></option>
							<?php endforeach; ?>
						</select>
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
<div class="modal fade" id="localNameModal" tabindex="-1" aria-labelledby="localNameModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="localNameModalLabel">Add Local Name</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Dashboard/localName') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="mb-3">
						<label for="local_name">Local Name</label>
						<input type="text" class="form-control" id="local_name" name="local_name" placeholder="Local Name">
					</div>
					<?php echo form_error('origin', '<span class="">', '</span>'); ?>
					<div class="mb-3">
						<label for="fish_id">Fish</label>
						<select class="form-select" id="fish_id" name="fish_id">
							<option value="" selected disabled>Choose fish</option>
							<?php foreach ($fishs as $fish) : ?>
								<option value="<?= $fish['id'] ?>"><?= $fish['general_name'] ?></option>
							<?php endforeach; ?>
						</select>
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
		$('.img-input').each(function(index) {
			const image = this;
			const imgPreview = $('.img-preview').eq(index); // Ambil elemen .img-preview yang sesuai berdasarkan indeks
			imgPreview.css('display', 'block');
			const oFReader = new FileReader();
			oFReader.readAsDataURL(image.files[0]);

			oFReader.onload = function(oFREvent) {
				imgPreview.attr('src', oFREvent.target.result);
			};
		});
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
			dropdownParent: $('.modal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.select2-kingdom').select2({
			dropdownParent: $('#kingdomModal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.select2-phylum').select2({
			dropdownParent: $('#phylumModal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.select2-class').select2({
			dropdownParent: $('#classModal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.select2-ordo').select2({
			dropdownParent: $('#ordoModal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.select2-family').select2({
			dropdownParent: $('#familyModal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.select2-genus').select2({
			dropdownParent: $('#genusModal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.select2-species').select2({
			dropdownParent: $('#speciesModal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.select2-fish').select2({
			dropdownParent: $('#fishModal'),
			theme: 'bootstrap',
			tags: true
		});
		$('.multiple-add').select2({
			dropdownParent: $('#fishModal'),
			theme: "bootstrap",
			placeholder: $(this).data('placeholder'),
			closeOnSelect: false,
			tags: true
		});
	});
</script>