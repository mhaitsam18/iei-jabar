<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0"><?= $title ?></h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <?php if ($user) : ?>
                <div class="d-block my-2">
                    <button type="button" class="btn <?= fishlike($fish['id'], $user['id']) ?> float-end like-button" data-fish-id="<?= $fish['id'] ?>"><i data-feather="thumbs-up"></i></button>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <img src="<?= base_url('assets/img/' . $fish['image']) ?>" class="img-thumbnail w-100" alt="...">
        </div>
        <div class="col-lg-4">
            <h4>Clasification</h4>
            <ul>
                <li>Kingdom : <?= $fish['kingdom'] ?> </li>
                <li>Phylum : <?= $fish['phylum'] ?> </li>
                <li>Class : <?= $fish['class'] ?> </li>
                <li>Order : <?= $fish['ordo'] ?> </li>
                <li>Family : <?= $fish['family'] ?> </li>
                <li>Genus : <?= $fish['genus'] ?> </li>
                <li>Species / Scientific Name : <?= $fish['species'] ?> </li>
                <li>Fish Type : <?= $fish['type'] ?> </li>
                <li>Abundance / Conservation : <?= $fish['abundance'] ?> </li>
                <li>General Name : <?= $fish['general_name'] ?> </li>
                <li>Synonim : <?= $fish['synonim'] ?> </li>
            </ul>
            <div class="mb-3">
                <h6>Foods</h6>
                <p>
                    <?php foreach ($foods as $food) : ?>
                        <?= $food['food'] ?>,
                    <?php endforeach; ?>
                </p>
            </div>
            <div class="mb-3">
                <h6>Distributions</h6>
                <ul>
                    <?php foreach ($distributions as $distribution) : ?>
                        <li>
                            <?= $distribution['distribution'] ?>,
                            <?php
                            $archipelagos = $this->db->get_where('archipelago', ['distribution_id' => $distribution['id']])->result_array();
                            ?>
                            <ul>
                                <?php foreach ($archipelagos as $archipelago) : ?>
                                    <li><?= $archipelago['archipelago'] ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="mb-3">
                <h6>Habitats</h6>
                <p>
                    <?php foreach ($habitats as $habitat) : ?>
                        <?= $habitat['habitat'] ?>,
                    <?php endforeach; ?>
                </p>
            </div>
            <div class="mb-3">
                <h6>Origins</h6>
                <p>
                    <?php foreach ($origins as $origin) : ?>
                        <?= $origin['origin'] ?>,
                    <?php endforeach; ?>
                </p>
            </div>
            <div class="mb-3">
                <h6>Local Name</h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Local Name</th>
                            <th>Area</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($local_names as $local_name) : ?>
                            <tr>
                                <td><?= $local_name['local_name'] ?></td>
                                <td><?= $local_name['area'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
            <h4 class="">Information</h4>
            <p><?= $fish['information'] ?></p>
            <h4 class="mt-2">Weight</h4>
            <p><?= $fish['weight'] ?></p>
            <h4 class="mt-2">Length</h4>
            <p><?= $fish['length'] ?></p>
        </div>
        <div class="col-lg-12">
            <h3>Related article</h3>
            <div class="row">
                <?php foreach ($articles as $article) : ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/' . $article['thumbnail']) ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $article['title'] ?></h5>
                                    <p class="card-text"><?= $article['excerpt'] ?></p>
                                    <p class="card-text"><a href="<?= base_url('member/article/detail/' . $article['id']) ?>" class="btn btn-primary">See More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
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
                                var like = 'Like in successfully';
                            } else {
                                // Tombol like sebelumnya telah ditekan, ubah menjadi tombol like
                                button.removeClass('btn-success').addClass('btn-outline-success');
                                var like = 'Unlike in successfully';
                            }
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'success',
                                title: like
                            })
                        } else {
                            alert('Failed to like fish: ' + response.message);
                        }
                    }
                });
            });
        });
    </script>

</div>