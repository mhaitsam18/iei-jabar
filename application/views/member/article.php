<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0"><?= $title ?></h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
        </div>
    </div>

    <div class="row">
        <?php foreach ($articles as $article) : ?>
            <div class="card mb-3 col-lg-8">
                <img src="<?= base_url('assets/img/' . $article['thumbnail']) ?>" class="card-img-top w-100" style="height: 400px;">
                <div class="card-body">
                    <h4><?= $article['title'] ?></h4>
                    <p class="card-text"><?= $article['excerpt'] ?></p>
                    <div class="d-block my-2">
                        <button type="button" class="btn <?= articlelike($article['id'], $user['id']) ?> float-end like-button" data-article-id="<?= $article['id'] ?>"><i data-feather="thumbs-up"></i></button>
                    </div>
                    <a href="<?= base_url('member/article/detail/' . $article['id']) ?>" class="btn btn-primary">Read More</a>
                    <div class="text-center d-grid">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="mt-auto">
            <?= $this->pagination->create_links(); ?>
        </div>
        <!-- <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i data-feather="chevron-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i data-feather="chevron-right"></i></a></li>
            </ul>
        </nav> -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.like-button').on('click', function() {
            var button = $(this);
            var articleId = button.data('article-id');

            $.ajax({
                url: '<?= base_url() ?>member/article/like/',
                data: {
                    article_id: articleId
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
                        alert('Failed to like article: ' + response.message);
                    }
                }
            });
        });
    });
</script>