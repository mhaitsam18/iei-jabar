<div class="page-content">

	<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin mt-3">
		<div>
			<h4 class="mb-3 mb-md-0 color-mamhi" style="font-style: italic">Beranda Ikan Asli dan Introduksi Jawa Barat</h4>
		</div>
	</div>

	<div class="row justify-content-between mb-5">

		<div class="col-xl-2 col-md-2 grid-margin stretch-card">
			<img src="<?= base_url('/assets/img/logo/sidebar-logo.png') ?>" alt="" width="100%">
		</div>

		<div class="col-xl-6 col-md-6 grid-margin position-relative" style="margin-right: -50px">
			<img src="<?= base_url('assets/img/app/vector-2.png') ?>" alt="" srcset="" class="position-relative top-25 end-0" style="max-height: 100%; max-width: 100%;">

		</div>

	</div>



	<div class="row">
		<div class="col-12 col-xl-12 grid-margin stretch-card">
			<div class="card overflow-hidden">
				<div class="card-body">
					<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<?php $loop = 1 ?>
							<?php foreach ($fishs as $fish) : ?>
								<div class="carousel-item <?= ($loop == 1) ? 'active' : '' ?>">
									<img src="<?= base_url('assets/img/' . $fish['image']) ?>" class="d-block w-100" style="height: 500px;" alt="...">
								</div>
							<?php $loop++; ?>
							<?php endforeach; ?>
						</div>
						<a class="carousel-control-prev" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</a>
						<a class="carousel-control-next" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>