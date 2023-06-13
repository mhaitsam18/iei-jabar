
<section class="row">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="Dashboard"></div>
	<div class="card text-left">
		<div class="card-header">
			<?= $dashboard['header'] ?>
		</div>
		<div class="card-body">
			<h5 class="card-title"><?= $dashboard['title'] ?></h5>
			<p class="card-text"><?= $dashboard['content'] ?></p>
			<a href="<?= base_url('DataMaster/dashboard'); ?>" class="btn btn-primary">Edit Dashboard</a>
		</div>
		<div class="card-footer text-muted">
			-<?= $dashboard['footer'] ?>
		</div>
	</div>
</section>
<!-- /.container-fluid -->