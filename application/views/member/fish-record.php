
<?php foreach ($fishs as $fish) : ?>
    <div class="col-sm-3 mb-3">
        <div class="card">
            <img src="<?= base_url('assets/img/' . $fish['image']) ?>" alt="" class="card-img-top h-25">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title text-center"><?= $fish['general_name'] ?></h5>
                <p class="text-center mb-2">
                <ul>
                    <li>Species : <?= $fish['scientific_name'] ?></li>
                </ul>
                </p>
                <div class="d-block my-2">
                    <!-- <button type="button" class="btn <?= fishlike($fish['id'], $user['id']) ?> float-end like-button" data-fish-id="<?= $fish['id'] ?>"><i data-feather="thumbs-up"></i></button> -->
                </div>
                <div class="text-center d-grid">
                    <a href="<?= base_url('member/fish/detail/' . $fish['id']) ?>" class="btn btn-primary btn-block">See Details</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
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
