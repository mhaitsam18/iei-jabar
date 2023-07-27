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
									<p class="m-2" style="text-align: justify;">A 'continent form' is utilized to gather master data about continents like Africa, North America, and Asia. This data includes essential attributes for detailing fish distribution information worldwide or in specific regions. Organizing fish data based on continents helps researchers and managers gain insights into fish population diversity and patterns globally.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#continentModal">Fill Continent</a>
									<a href="<?= base_url('DataMaster/Continent') ?>" class="btn btn-sm btn-info">See Continent</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Country</h4>
									<p class="m-2" style="text-align: justify;">The "country form" collects master data about countries, which are children of continents. It includes attributes like location, climate, and fish species found there. Organizing fish distribution data by countries provides insights for targeted conservation and sustainable resource management.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#countryModal">Fill Country</a>
									<a href="<?= base_url('DataMaster/Country') ?>" class="btn btn-sm btn-info">See Country</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Province</h4>
									<p class="m-2" style="text-align: justify;">The "province form" gathers master data about administrative divisions within a country, including location, population, and unique characteristics. This data aids in analyzing fish species distribution, understanding local fishing practices, and implementing targeted conservation measures. It enables informed decisions to promote responsible fishing and protect aquatic ecosystems at a local level.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#provinceModal">Fill Province</a>
									<a href="<?= base_url('DataMaster/Province') ?>" class="btn btn-sm btn-info">See Province</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Archipelago / Waters</h4>
									<p class="m-2" style="text-align: justify;">The 'archipelago and waters form' collects data on islands and marine ecosystems. It helps understand biodiversity, support conservation, and manage fisheries. Organizing data with this form preserves delicate marine ecosystems in unique island clusters.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#archipelagoModal">Fill Waters</a>
									<a href="<?= base_url('DataMaster/Archipelago') ?>" class="btn btn-sm btn-info">See Waters</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Fish Type</h4>
									<p class="m-2" style="text-align: justify;">
										The "Fish Type Form" is used to gather data on various fish types, including endemic, introduced, and others. It contains essential information about each fish type, such as its habitat and origin (whether it is native to a specific region or introduced from elsewhere), along with other relevant attributes. This form aids in understanding fish diversity, tracking species distribution, and supporting conservation and sustainable fisheries management efforts.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#fishTypeModal">Fill Type</a>
									<a href="<?= base_url('DataMaster/FishType') ?>" class="btn btn-sm btn-info">See Type</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Abundance</h4>
									<p class="m-2" style="text-align: justify;">The "Abundance or Conservation Form" is designed to collect data related to the abundance of species or conservation efforts. This form includes essential information about population numbers, distribution patterns, and conservation measures taken to protect the species. Gathering such data enables researchers and conservationists to assess the health of populations, identify vulnerable species, and make informed decisions to promote biodiversity conservation and sustainable environmental practices.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#abundanceModal">Fill Abundance</a>
									<a href="<?= base_url('DataMaster/Abundance') ?>" class="btn btn-sm btn-info">See Abundance</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Food</h4>
									<p class="m-2" style="text-align: justify;">The "Fish Food Form" is a data collection tool used to gather information about the types of food suitable for fish. This form includes details such as the specific food items, their nutritional content, feeding habits, and compatibility with different fish species. Utilizing the Fish Food Form helps in selecting appropriate diets for different fish species in aquaculture, aquariums, and natural environments. It is essential for fishkeepers, aquaculturists, and researchers to ensure the well-being and optimal growth of fish populations.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#foodModal">Fill Food</a>
									<a href="<?= base_url('DataMaster/Food') ?>" class="btn btn-sm btn-info">See Food</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Habitat</h4>
									<p class="m-2" style="text-align: justify;">The "Habitat Form" will be the parent data source for the fish table. It contains information about various habitats, linking to specific fish species through a foreign key. This setup enables researchers to study fish-habitat relationships and implement conservation measures effectively.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#habitatModal">Fill Habitat</a>
									<a href="<?= base_url('DataMaster/Habitat') ?>" class="btn btn-sm btn-info">See Habitat</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Kingdom</h4>
									<p class="m-2" style="text-align: justify;">The "Kingdom Form" is the parent data source for taxonomic tables, including those for fish. It allows researchers to categorize and study species based on evolutionary relationships and shared characteristics.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kingdomModal">Fill Kingdom</a>
									<a href="<?= base_url('DataMaster/Kingdom') ?>" class="btn btn-sm btn-info">See Kingdom</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Phylum</h4>
									<p class="m-2" style="text-align: justify;">The "Phylum Form" is a data collection tool that falls under the "Kingdom" category in taxonomic hierarchy. It contains information about various phyla, which represent major groups of organisms sharing certain fundamental characteristics. This hierarchical structure allows researchers to classify and study different phyla under their respective kingdoms, facilitating a systematic understanding of the diversity of life forms and their evolutionary relationships.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#phylumModal">Fill Phylum</a>
									<a href="<?= base_url('DataMaster/Phylum') ?>" class="btn btn-sm btn-info">See Phylum</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Class</h4>
									<p class="m-2" style="text-align: justify;">The "Class Form" is used to enter data about the classes, specifically focusing on fish classes. This form is a child of the "Phylum" table in the taxonomic hierarchy. By utilizing the "Class Form," researchers can systematically organize and study different classes of fish, understanding their unique characteristics, and establishing their evolutionary relationships within their respective phyla. This data organization facilitates a comprehensive analysis of fish diversity and supports in-depth research on various fish classes.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#classModal">Fill Class</a>
									<a href="<?= base_url('DataMaster/Classes') ?>" class="btn btn-sm btn-info">See Class</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Ordo</h4>
									<p class="m-2" style="text-align: justify;">The "Order Form" is designed to input data regarding fish orders. It serves as a child of the "Class" table within the taxonomic hierarchy. This form allows researchers to systematically categorize and study various fish orders, understanding their specific features, and establishing their evolutionary connections within their respective classes. Organizing data using the "Order Form" enables comprehensive analysis of fish diversity and facilitates in-depth research on different fish orders.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#ordoModal">Fill Ordo</a>
									<a href="<?= base_url('DataMaster/Ordo') ?>" class="btn btn-sm btn-info">See Ordo</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Family</h4>
									<p class="m-2" style="text-align: justify;">The "Family Form" collects data on fish families, linked as a child to the "Order" table. It helps categorize and study fish families, establishing evolutionary relationships within their respective orders. This structure enables comprehensive analyses of fish diversity and supports in-depth research on different fish families.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#familyModal">Fill Family</a>
									<a href="<?= base_url('DataMaster/Family') ?>" class="btn btn-sm btn-info">See Family</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Genus</h4>
									<p class="m-2" style="text-align: justify;">The "Genus Form" collects data on fish genera and is linked as a child to the "Family" table. It aids in organizing and studying fish genera, understanding their traits and evolutionary connections within their respective families. This structure supports comprehensive analyses of fish diversity and research on different genera.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#genusModal">Fill Genus</a>
									<a href="<?= base_url('DataMaster/Genus') ?>" class="btn btn-sm btn-info">See Genus</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Species</h4>
									<p class="m-2" style="text-align: justify;">The "Species Form" gathers data on fish species, linked as a child to the "Genus" table. It aids in organizing and studying fish species, understanding their characteristics and evolutionary connections within their respective genera. This structure supports comprehensive analyses and research on different fish species.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#speciesModal">Fill Species</a>
									<a href="<?= base_url('DataMaster/Species') ?>" class="btn btn-sm btn-info">See Species</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Fish</h4>
									<p class="m-2" style="text-align: justify;">The "Fish Form" is a primary data collection tool for storing information about fish species. It is a child of the "Species Form," "Fish Type Form," "Abundance Form," and either the "Waters Form" or "Archipelago Form." Additionally, it serves as a parent for many-to-many relationships with the "Habitat Form," "Distribution Form," and "Food Form." The form also has two child forms, the "Origin Form" and the "Local Name Form," which collect data on origin information and local names of fish species, respectively. This structure facilitates organized and comprehensive research, analysis, and conservation efforts for various fish species and their ecological interactions.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#fishModal">Fill Fish</a>
									<a href="<?= base_url('DataMaster/Fish') ?>" class="btn btn-sm btn-info">See Fish</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Local Name</h4>
									<p class="m-2" style="text-align: justify;">The "Local Name Form" collects data on vernacular names of fish species in different regions. It aids in effective communication and collaboration for fish identification, conservation, and fisheries management.</p>
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#localNameModal">Fill Local Name</a>
									<!-- <a href="<?= base_url('DataMaster/LocalName') ?>" class="btn btn-sm btn-info">See Local Name</a> -->
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-3 text-center">
							<div class="card">
								<div class="card-body">
									<h4 class="mb-3">Origin</h4>
									<p class="m-2" style="text-align: justify;">The "Origin Form" collects data on the native range of fish species. It aids in conservation efforts and identifying potential threats from invasive species.</p>
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