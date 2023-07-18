<!-- partial:partials/_footer.html -->
<footer class="footer border-top">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
        <p class="text-muted mb-1 mb-md-0">Copyright © 2023 <a href="https://www.nobleui.com" target="_blank">IEI-Jabar</a>.</p>
        <p class="text-muted">Handcrafted By Feby Geby Amel With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
    </div>
</footer>
<!-- partial -->

</div>
</div>

<!-- core:js -->
<script src="<?= base_url() ?>assets/vendors/core/core.js"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="<?= base_url() ?>assets/vendors/chartjs/Chart.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/jquery.flot/jquery.flot.js"></script>
<script src="<?= base_url() ?>assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
<script src="<?= base_url() ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/apexcharts/apexcharts.min.js"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="<?= base_url() ?>assets/vendors/feather-icons/feather.min.js"></script>
<script src="<?= base_url() ?>assets/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="<?= base_url() ?>assets/js/dashboard-light.js"></script>
<script src="<?= base_url() ?>assets/js/datepicker.js"></script>
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
        //'Data ' + 
        Swal.fire({
            title: 'Failed',
            text: error,
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
            title: 'Apakah Anda Yakin?',
            text: "Data " + hapus + " akan dihapus!",
            icon: 'warning',
            confirmButtonText: 'Hapus',
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
            title: 'Apakah Anda Yakin?',
            text: "Pesanan yang diterima, tidak dapat dikembalikan!",
            icon: 'warning',
            confirmButtonText: 'diterima',
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
            title: 'Apakah Anda Yakin?',
            text: "",
            icon: 'warning',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
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
            title: 'Masukkan Password',
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
</script>

</body>

</html>