<div class="row h-100">
	<div class="col-lg-5 col-12">
		<div id="auth-left">
			<div class="auth-logo">
				<!-- <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a> -->
				<a href="<?= base_url() ?>"><img src="<?= base_url('/assets/img/logo/sidebar-logo.png') ?>" style="height: 100px;" alt="Logo"></a>
			</div>
			<h1 class="auth-title">Sign Up</h1>
			<p class="auth-subtitle mb-5">Input your data to register to our website.</p>
			<?= $this->session->flashdata('message'); ?>
			<form method="post" action="<?= base_url('auth/registration') ?>">
				<div class="form-group position-relative has-icon-left mb-4">
					<input type="text" class="form-control  form-control-xl" id="name" name="name" placeholder="Full Name" value="<?= set_value('name') ?>" required>
					<div class="form-control-icon">
						<i class="bi bi-shield-lock"></i>
					</div>
					<?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
				</div>

				<div class="form-group position-relative has-icon-left mb-4">
					<input type="email" class="form-control  form-control-xl" id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>" required>
					<div class="form-control-icon">
						<i class="bi bi-shield-lock"></i>
					</div>
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<div class="form-group position-relative has-icon-left mb-4">
					<input type="text" class="form-control  form-control-xl" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>" required>
					<div class="form-control-icon">
						<i class="bi bi-shield-lock"></i>
					</div>
					<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<div class="form-group position-relative has-icon-left mb-4">
					<select class="form-control" name="gender" id="gender" required>
						<option value="" disabled selected>Select Gender</option>
						<option value="Laki-laki">Male</option>
						<option value="Perempuan">Female</option>
					</select>
					<div class="form-control-icon">
						<i class="bi bi-shield-lock"></i>
					</div>
					<?= form_error('gender', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<div class="form-group position-relative has-icon-left mb-4">
					<input type="text" class="form-control  form-control-xl" id="place_of_birth" name="place_of_birth" placeholder="Place of Birth" value="<?= set_value('place_of_birth') ?>" required>
					<div class="form-control-icon">
						<i class="bi bi-shield-lock"></i>
					</div>
					<?= form_error('place_of_birth', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<div class="form-group position-relative has-icon-left mb-4">
					<input type="date" class="form-control form-control-xl" id="birthday" name="birthday" placeholder="Birth Day" value="<?= set_value('birthday') ?>" required>
					<script>
						// Mendapatkan elemen input tanggal
						const birthdayInput = document.getElementById('birthday');

						// Mendapatkan tanggal sekarang
						const currentDate = new Date();

						// Menghitung tanggal maksimal 11 tahun yang lalu dari tanggal sekarang
						const maxDate = new Date(currentDate.getFullYear() - 11, currentDate.getMonth(), currentDate.getDate());

						// Format tanggal maksimal untuk elemen input
						const maxDateFormatted = maxDate.toISOString().split('T')[0];

						// Mengatur atribut max pada elemen input tanggal
						birthdayInput.setAttribute('max', maxDateFormatted);
					</script>
					<div class="form-control-icon">
						<i class="bi bi-shield-lock"></i>
					</div>
					<?= form_error('birthday', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<div class="form-group position-relative has-icon-left mb-4">
					<input type="number" class="form-control  form-control-xl" id="phone_number" name="phone_number" placeholder="Phone Number" value="<?= set_value('phone_number') ?>" required>
					<div class="form-control-icon">
						<i class="bi bi-shield-lock"></i>
					</div>
					<?= form_error('phone_number', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<div class="form-group position-relative has-icon-left mb-4">
					<textarea class="form-control  form-control-xl" id="address" name="address" rows="3" placeholder="Address" required><?= set_value('address') ?></textarea>
					<div class="form-control-icon">
						<i class="bi bi-shield-lock"></i>
					</div>
					<?= form_error('address', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<!-- <div class="form-group position-relative has-icon-left mb-4">
                    <select class="form-control" name="role_id" id="role_id">
                        <option value="">Select Role</option>
                        <?php foreach ($user_role as $row) : ?>
                            <option value="<?= $row['id'] ?>"><?= ucwords($row['role']) ?></option>
                        <?php endforeach ?>
                    </select>
                    <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>') ?>
                </div> -->
				<div class="form-group position-relative has-icon-left mb-4 row">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<input type="password" class="form-control  form-control-xl" id="password1" name="password1" placeholder="Password" required>
						<?= form_error('password1', '<small class="bi bi-shield-lockdanger pl-3">', '</small>') ?>
						<div class="form-control-icon">
							<i class="bi bi-shield-lock"></i>
						</div>
					</div>
					<div class="col-sm-6">
						<input type="password" class="form-control  form-control-xl" id="password2" name="password2" placeholder="Repeat Password" required>
						<div class="form-control-icon">
							<i class="bi bi-shield-lock"></i>
						</div>
						<?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
				</div>
				<button typer="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
					Register Account
				</button>
			</form>
			<div class="text-center mt-5 text-lg fs-4">
				<p class='text-gray-600'>Already have an account? <a href="<?= base_url('auth'); ?>" class="font-bold">Log
						in</a>.</p>
			</div>
		</div>
	</div>
	<div class="col-lg-7 d-none d-lg-block">
		<div id="auth-right">

		</div>
	</div>
</div>
