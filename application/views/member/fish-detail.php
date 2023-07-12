<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0"><?= $title ?></h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-4">
            <img src="<?= base_url('assets/img/' . $fish['image']) ?>" class="img-thumbnail w-100" alt="...">
        </div>
        <div class="col-lg-6">
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.like-button').on('click', function() {
                var button = $(this);
                var fishId = button.data('fish-id');

                $.ajax({
                    url: '<?= base_url() ?>member/fish/like/',
                    data: {
                        fish_id: fishId
                    },
                    method: 'post',
                    success: function(response) {
                        response = JSON.parse(response);
                        if (response.status === 'success') {
                            if (button.hasClass('btn-outline-success')) {
                                // Tombol like sebelumnya belum ditekan, ubah menjadi tombol unlike
                                button.removeClass('btn-outline-success').addClass('btn-success');
                            } else {
                                // Tombol like sebelumnya telah ditekan, ubah menjadi tombol like
                                button.removeClass('btn-success').addClass('btn-outline-success');
                            }
                        } else {
                            alert('Failed to like fish: ' + response.message);
                        }
                    }
                });
            });
        });
    </script>

</div>