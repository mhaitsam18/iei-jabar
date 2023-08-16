<div class="page-content">
	<div class="row">
		<div class="col-12 col-xl-12 stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>" data-objek="Data User"></div>
					<?= $this->session->flashdata('message'); ?>
					<div class="d-flex justify-content-center align-items-center flex-wrap grid-margin">
						<div class="text-center">
							<h2 class="mb-3 mb-md-0"><?= $title ?></h2>
							<div>By <?= $article['name'] ?>, <?= date('j F Y', strtotime($article['created_at'])) ?></div>
							<img src="<?= base_url('assets/img/' . $article['thumbnail']) ?>" class="img-fluid" style="width: 100%;">
						</div>
					</div>
					<div class="d-flex justify-content-center align-items-center flex-wrap grid-margin">
						<div class="text-justify">
							<style>
								/* Gaya untuk konten Markdown */
								#markdown-preview {
									font-family: "Helvetica Neue", Arial, sans-serif;
									font-size: 16px;
									line-height: 1.5;
								}

								#markdown-preview img {
									max-width: 100%;
									height: auto;
									margin: 10px 0;
									display: block;
									/* Agar gambar rata tengah */
								}

								#markdown-preview p {
									margin: 10px 0;
								}
							</style>
							<?php
							// Sertakan Parsedown
							require APPPATH . 'libraries/parsedown-master/Parsedown.php';
							$parsedown = new Parsedown();

							// Menguraikan konten Markdown menjadi HTML
							$htmlContent = $parsedown->text($article['content']);

							// Ganti tautan gambar dengan elemen HTML <img>
							$htmlContent = preg_replace(
								'/<img src="(.*?)" alt="(.*?)" \/>/',
								'<img src="$1" alt="$2">',
								$htmlContent
							);
							?>

							<div class="justify-text" id="markdown-preview">
								<?= $htmlContent ?>
							</div>
						</div>
					</div>
					<div class="d-flex post-actions">
						<style>
							.heart-icon {
								fill: #dc3545;
								/* Mengubah warna isi hati menjadi merah */
								stroke: #dc3545;
								/* Jika ikon memiliki garis pinggir, mengubah warna garis pinggir menjadi merah */
							}
						</style>

						<?php if ($user) : ?>
							<a href="javascript:;" class="d-flex align-items-center like-button <?= articletombollike($article['id'], $user['id']) ?> me-4" data-article-id="<?= $article['id'] ?>">
								<i class="icon-md <?= hearticon($article['id'], $user['id']) ?>" data-feather="heart" id="love"></i>
								<p class="d-none d-md-block ms-2">Like</p>
							</a>
						<?php endif; ?>
						<?php if ($user) : ?>
							<a href="javascript:;" class="d-flex align-items-center text-muted me-4 comment-button">
								<i class="icon-md" data-feather="message-square"></i>
								<p class="d-none d-md-block ms-2">Comment</p>
							</a>
						<?php else: ?>
							<a href="<?= base_url('auth') ?>" class="d-flex align-items-center text-muted me-4">
								<i class="icon-md" data-feather="message-square"></i>
								<p class="d-none d-md-block ms-2">Comment</p>
							</a>
						<?php endif; ?>
						<!-- <a href="javascript:;" class="d-flex align-items-center text-muted">
                            <i class="icon-md" data-feather="share"></i>
                            <p class="d-none d-md-block ms-2">Share</p>
                        </a> -->
					</div>
					<div class="comment m-3">
						<h4 class="mb-3">Comments</h4>
						<?php if ($user) : ?>
							<div class="d-flex align-items-start comment-text d-none">
								<img src="<?= base_url('assets/img/' . $user['image']) ?>" class="align-self-start wd-25 wd-sm-50 me-3" alt="...">
								<div class="row w-100">
									<form action="<?= base_url('member/article/comment') ?>" method="post" id="commentForm">
										<input type="hidden" name="user_id" value="<?= $user['id'] ?>">
										<input type="hidden" name="article_id" value="<?= $article['id'] ?>">
										<h5 class="mb-2"><?= $user['name'] ?></h5>
										<div class="mb-3">
											<textarea class="form-control" name="comment" id="comment" required oninput="validateComment()"></textarea>
										</div>
										<button type="submit" class="btn btn-sm btn-primary float-end" id="sendButton" disabled>Send</button>
									</form>
								</div>
							</div>
						<?php endif; ?>
						<?php foreach ($comments as $comment) : ?>
							<div class="d-flex align-items-start mb-3">
								<img src="<?= base_url('assets/img/' . $comment['image']) ?>" class="align-self-start wd-25 wd-sm-50 me-3" alt="...">
								<div>
									<h5 class="mb-2"><?= $comment['name'] ?></h5>
									<p><?= $comment['comment'] ?></p>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="card-footer">
					</div>
				</div>
			</div>
		</div>
	</div> <!-- row -->
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
	function validateComment() {
		const commentTextarea = document.getElementById('comment');
		const sendButton = document.getElementById('sendButton');

		if (commentTextarea.value.trim() === '') {
			sendButton.disabled = true;
			sendButton.style.cursor = 'not-allowed';
		} else {
			sendButton.disabled = false;
			sendButton.style.cursor = 'pointer';
		}
	}
</script>
<style>
	/* Tambahkan gaya kursor not-allowed jika diperlukan */
	#sendButton[disabled] {
		cursor: not-allowed;
	}
</style>

<script>
	$(document).ready(function() {
		// Menggunakan event click untuk tombol comment-button
		$(".comment-button").click(function() {
			// Menggunakan toggleClass untuk menambah atau menghapus kelas d-none pada comment-text
			$(".comment-text").toggleClass("d-none");
		});
	});

	$(document).ready(function() {
		$('.like-button').on('click', function() {
			var button = $(this);
			var love = $('#love');
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
						if (button.hasClass('text-muted')) {
							// Tombol like sebelumnya belum ditekan, ubah menjadi tombol unlike
							button.removeClass('text-muted').addClass('text-danger');
							love.addClass('heart-icon');
							var like = 'Like in successfully';
						} else {
							// Tombol like sebelumnya telah ditekan, ubah menjadi tombol like
							button.removeClass('text-danger').addClass('text-muted');
							love.removeClass('heart-icon');
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
