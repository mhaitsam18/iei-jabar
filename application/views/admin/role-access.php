<section class="row">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="Role Akses"></div>
	<?= $this->session->flashdata('message'); ?>
	<h5>Role : <?= $role['role']; ?></h5>
	<div class="row">
		<div class="col-lg-6">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Menu</th>
						<th scope="col">Access</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach ($menu as $m) : ?>
						<tr>
							<th scope="row"><?= $no ?></th>
							<td><?= $m['menu'] ?></td>
							<td>
								<div class="form-check">
									<input class="form-check-input check-role-access akses_role" type="checkbox" <?= check_access($role['id'], $m['id']) ?> data-role="<?= $role['id'] ?>" data-menu="<?= $m['id'] ?>">
								</div>
							</td>
						</tr>
						<?php $no++; ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</section>