<section class="row">
	<?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="Role"></div>
	<?= $this->session->flashdata('message'); ?>
	<div class="row">
		<div class="col-lg-6">
			<a href="" class="btn btn-primary newRoleModalButton" data-bs-toggle="modal" data-bs-target="#newRoleModal">Tambah Role Baru</a>
			<table class="table table-hover" id="dataTable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Role</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach ($role as $r) : ?>
						<tr>
							<th scope="row"><?= $no ?></th>
							<td><?= $r['role'] ?></td>
							<td>
								<a href="<?= base_url("admin/roleAccess/$r[id]"); ?>" class="badge bg-warning">Akses</a>
								<a href="<?= base_url("admin/updateRole/$r[id]"); ?>" class="badge bg-success updateRoleModalButton" data-toggle="modal" data-target="#newRoleModal" data-id="<?= $r['id'] ?>">Ubah</a>
								<a href="<?= base_url("admin/deleteRole/$r[id]"); ?>" class="badge bg-danger tombol-hapus" data-hapus="role">Delete</a>
							</td>
						</tr>
						<?php $no++; ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>

</section>
<!-- /.container-fluid -->


<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="newRoleModalLabel">Tambah Role baru</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('admin/role') ?>" method="post">
				<input type="hidden" name="id" id="id">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>