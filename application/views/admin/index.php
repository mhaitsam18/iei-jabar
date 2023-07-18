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
						<div class="col-lg-3">
							<h4>Continent</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- row -->
</div>