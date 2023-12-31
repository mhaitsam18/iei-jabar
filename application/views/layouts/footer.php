<!-- partial:partials/_footer.html -->
<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
	<p class="text-muted mb-1 mb-md-0">Copyright © 2021 <a href="<?= base_url() ?>" target="_blank">IEI Jabar</a>.</p>
	<p class="text-muted">Handcrafted By Feby Geby Amel With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
</footer>
<!-- partial -->

</div>
</div>

<!-- core:js -->
<script src="<?= base_url() ?>/assets/vendors/core/core.js"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="<?= base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page -->

<!-- Custom js for this page -->
<script src="<?= base_url() ?>assets/js/data-table.js"></script>
<!-- End custom js for this page -->


<!-- Plugin js for this page -->
<script src="<?= base_url() ?>/assets/vendors/chartjs/Chart.min.js"></script>
<script src="<?= base_url() ?>/assets/vendors/jquery.flot/jquery.flot.js"></script>
<script src="<?= base_url() ?>/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
<script src="<?= base_url() ?>/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>/assets/vendors/apexcharts/apexcharts.min.js"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="<?= base_url() ?>/assets/vendors/feather-icons/feather.min.js"></script>
<script src="<?= base_url() ?>/assets/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="<?= base_url() ?>/assets/js/dashboard-light.js"></script>
<script src="<?= base_url() ?>/assets/js/datepicker.js"></script>
<!-- End custom js for this page -->


<!-- Plugin js for this page -->
<script src="<?= base_url() ?>assets/vendors/tinymce/tinymce.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/simplemde/simplemde.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/ace-builds/src-min/ace.js"></script>
<script src="<?= base_url() ?>assets/vendors/ace-builds/src-min/theme-chaos.js"></script>
<!-- End plugin js for this page -->

<!-- Custom js for this page -->
<script src="<?= base_url() ?>/assets/js/tinymce.js"></script>
<script src="<?= base_url() ?>/assets/js/simplemde.js"></script>
<script src="<?= base_url() ?>/assets/js/ace.js"></script>
<!-- End custom js for this page -->

<script src="<?= base_url() ?>/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>

<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
</script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>

<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Di bagian head HTML, sertakan pustaka markdown-it -->
<script src="https://cdn.jsdelivr.net/npm/markdown-it@12/dist/markdown-it.min.js"></script>

<script>
	// // Ambil konten dari elemen dengan id "markdown-preview"
	// var markdownContent = document.getElementById("markdown-preview").innerHTML;

	// // Inisialisasi markdown-it
	// var md = window.markdownit();

	// // Render konten Markdown ke HTML
	// var renderedHTML = md.render(markdownContent);

	// // Tampilkan HTML yang dirender di elemen dengan id "markdown-preview"
	// document.getElementById("markdown-preview").innerHTML = renderedHTML;
	// console.log(renderedHTML);

	// // Ubah tautan gambar menjadi elemen <img>
	// var images = document.querySelectorAll("#markdown-preview img");
	// images.forEach(function(image) {
	// 	var src = image.getAttribute("src");
	// 	var alt = image.getAttribute("alt");
	// 	image.outerHTML = '<img src="' + src + '" alt="' + alt + '">';
	// });
</script>


<script>
	$(function() {
		'use strict';

		$('.tags-input').tagsInput({
			'width': '100%',
			'height': '75%',
			'interactive': true,
			'defaultText': 'Add More',
			'removeWithBackspace': true,
			'minChars': 0,
			'maxChars': 20,
			'placeholderColor': '#666666'
		});
	});
	const folder = $('.filepond').data('folder');
	FilePond.registerPlugin(
		FilePondPluginImagePreview,
		FilePondPluginImageExifOrientation,
		FilePondPluginFileValidateSize,
		FilePondPluginImageEdit
	);

	FilePond.create(
		document.querySelector('.filepond')
	);
	FilePond.setOptions({
		server: {
			process: {
				url: '<?= base_url() ?>File/' + folder,
				method: 'POST',
				data: {
					folder: folder
				},
				withCredentials: false,
				onload: (response) => {
					console.log(response);
					$('#img-filepond').val(response);
				},
			},
		},
		// labelIdle: 'Seret & Lepaskan file Anda atau <span class="filepond--label-action"> Jelajahi </span>'
	});
</script>
<script type="text/javascript">
	const success = $('.flash-data').data('success');
	if (success) {
		//'Data ' + 
		Swal.fire({
			title: 'Success',
			text: success,
			icon: 'success'
		});
	}
	const error = $('.flash-data').data('error');
	if (error) {
		// Menghapus tag HTML menggunakan strip_tags
		const cleanedError = error.replace(/<\/?p>/g, '');

		Swal.fire({
			title: 'Failed',
			text: cleanedError, // Menggunakan pesan yang telah dibersihkan
			icon: 'error'
		});
	}
	const warning = $('.flash-data').data('warning');
	if (warning) {
		//'Data ' + 
		Swal.fire({
			title: 'Warning',
			text: warning,
			icon: 'warning'
		});
	}
	const flashData = $('.flash-data').data('flashdata');
	const objek = $('.flash-data').data('objek');
	console.log(flashData);
	console.log(objek);
	if (flashData) {
		//'Data ' + 
		Swal.fire({
			title: objek,
			text: flashData,
			icon: 'success'
		});
	}
	$('.tombol-hapus').on('click', function(e) {
		const hapus = $(this).data('hapus');
		const href = $(this).attr('href');
		e.preventDefault();
		Swal.fire({
			title: 'Are You Sure?',
			text: " " + hapus + " data will be deleted!",
			icon: 'warning',
			confirmButtonText: 'Delete',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33'
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = href;
			}
		})
	});

	$('.tombol-terima').on('click', function(e) {
		const href = $(this).attr('href');
		e.preventDefault();
		Swal.fire({
			title: 'Are You Sure?',
			text: "Orders received, cannot be returned!",
			icon: 'warning',
			confirmButtonText: 'Accept',
			showCancelButton: true,
			confirmButtonColor: '#32a852',
			cancelButtonColor: '#d33'
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = href;
			}
		})
	});
	$('.tombol-yakin').on('click', function(e) {
		const href = $(this).attr('href');
		e.preventDefault();
		Swal.fire({
			title: 'Are You Sure?',
			text: "",
			icon: 'warning',
			confirmButtonText: 'Yes',
			cancelButtonText: 'No',
			showCancelButton: true,
			confirmButtonColor: '#32a852',
			cancelButtonColor: '#d33'
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = href;
			}
		})
	});
	$('.minta-password').on('click', function(e) {
		Swal.fire({
			title: 'Enter Password',
			input: 'password',
			inputAttributes: {
				autocapitalize: 'off'
			},
			showCancelButton: true,
			confirmButtonText: 'Look up',
			showLoaderOnConfirm: true,
			preConfirm: (login) => {
				return fetch(`//api.github.com/users/${login}`)
					.then(response => {
						if (!response.ok) {
							throw new Error(response.statusText)
						}
						return response.json()
					})
					.catch(error => {
						Swal.showValidationMessage(
							`Request failed: ${error}`
						)
					})
			},
			allowOutsideClick: () => !Swal.isLoading()
		}).then((result) => {
			if (result.isConfirmed) {
				Swal.fire({
					title: `${result.value.login}'s avatar`,
					imageUrl: result.value.avatar_url
				})
			}
		})
	});

	$('.custom-file-input').on('change', function() {
		let filename = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(filename);
	});

	$(function() {
		$('.newMenuModalButton').on('click', function() {
			$('#newMenuModalLabel').html('Add New Menu');
			$('.modal-footer button[type=submit]').html('Add');
			$('.modal-content form')[0].reset();
			$('.modal-content form').attr('action', '<?= base_url('menu') ?>');
		});

		$('.updateMenuModalButton').on('click', function() {
			$('#newMenuModalLabel').html('Edit Menu');
			$('.modal-footer button[type=submit]').html('Save');
			$('.modal-content form').attr('action', '<?= base_url('menu/updateMenu') ?>');
			const id = $(this).data('id');
			jQuery.ajax({
				url: '<?= base_url('menu/getUpdateMenu') ?>',
				data: {
					id: id
				},
				method: 'post',
				dataType: 'json',
				success: function(data) {
					console.log(data);
					$('#id').val(data.id);
					$('#menu').val(data.menu);
					$('#active').attr("checked", true);
					if (data.active == 1) {
						$('#active').attr("checked", true);
					} else {
						$('#active').attr("checked", false);
					}
				}
			});
		});
	});

	// $(function() {
	//     $('.bookGroomingModalButton').on('click', function() {
	//         const id = $(this).data('jadwal');
	//         jQuery.ajax({
	//             url: '<?= base_url('') ?>',
	//             data: {id : id},
	//             method: 'post',
	//             dataType: 'json',
	//             success: function(data) {
	//                 console.log(data);
	//                 $('#jadwal').val(data.id);
	//             }
	//         });
	//     });
	// });

	$(function() {
		$('.newRoleModalButton').on('click', function() {
			$('#newRoleModalLabel').html('Add New Role');
			$('.modal-footer button[type=submit]').html('Add');
			$('.modal-content form')[0].reset();
			$('.modal-content form').attr('action', '<?= base_url('Admin/role') ?>/');
		});

		$('.updateRoleModalButton').on('click', function() {
			$('#newRoleModalLabel').html('Edit Role');
			$('.modal-footer button[type=submit]').html('Save');
			$('.modal-content form').attr('action', '<?= base_url('Admin/updateRole') ?>');
			const id = $(this).data('id');
			jQuery.ajax({
				url: '<?= base_url('admin/getUpdateRole') ?>',
				data: {
					id: id
				},
				method: 'post',
				dataType: 'json',
				success: function(data) {
					console.log(data);
					$('#id').val(data.id);
					$('#role').val(data.role);
				}
			});
		});
	});

	$(function() {
		$('.setRoleButton').on('click', function() {
			$('#setRoleLabel').html('Set User Role');
			$('.modal-footer button[type=submit]').html('Save');
			const id = $(this).data('id');
			jQuery.ajax({
				url: '<?= base_url('admin/getUserData') ?>',
				data: {
					id: id
				},
				method: 'post',
				dataType: 'json',
				success: function(data) {
					console.log(data);
					$('#id').val(data.id);
					$('#name').val(data.name);
					$('#role_id').val(data.role_id);
				}
			});
		});
	});

	$(function() {
		$('.newSubMenuModalButton').on('click', function() {
			$('#newSubMenuModalLabel').html('Add New SubMenu');
			$('.modal-footer button[type=submit]').html('Add');
			$('.modal-content form')[0].reset();
			$('.modal-content form').attr('action', '<?= base_url('menu/subMenu') ?>');
		});

		$('.updateSubMenuModalButton').on('click', function() {
			$('#newSubMenuModalLabel').html('Edit SubMenu');
			$('.modal-footer button[type=submit]').html('Save');
			$('.modal-content form').attr('action', '<?= base_url('menu/updateSubMenu') ?>');
			const id = $(this).data('id');
			jQuery.ajax({
				url: '<?= base_url('menu/getUpdateSubMenu') ?>',
				data: {
					id: id
				},
				method: 'post',
				dataType: 'json',
				success: function(data) {
					console.log(data);
					$('#id').val(data.id);
					$('#title').val(data.title);
					$('#menu_id').val(data.menu_id);
					$('#url').val(data.url);
					$('#icon').val(data.icon);
					$('#is_active').attr("checked", true);
					if (data.is_active == 1) {
						$('#is_active').attr("checked", true);
					} else if (data.is_active == 0) {
						$('#is_active').attr("checked", false);
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$('.check-role-access').on('click', function() {
		const menuId = $(this).data('menu');
		const roleId = $(this).data('role');

		$.ajax({
			url: "<?= base_url('admin/changeAccess') ?>",
			type: 'post',
			data: {
				menuId: menuId,
				roleId: roleId
			},
			success: function() {
				document.location.href = "<?= base_url('admin/roleAccess/'); ?>" + roleId;
			}
		});
	});
</script>
</body>

</html>
