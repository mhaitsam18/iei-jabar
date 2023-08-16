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
						<div class="text-justify">
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
					<!-- <div class="d-flex post-actions">
                        <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                            <i class="icon-md" data-feather="heart"></i>
                            <p class="d-none d-md-block ms-2">Like</p>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                            <i class="icon-md" data-feather="message-square"></i>
                            <p class="d-none d-md-block ms-2">Comment</p>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center text-muted">
                            <i class="icon-md" data-feather="share"></i>
                            <p class="d-none d-md-block ms-2">Share</p>
                        </a>
                    </div> -->
					<div class="comment m-3">
						<h4 class="mb-3">Komentar</h4>
						<!-- <div class="d-flex align-items-start comment-text d-none">
                            <img src="<?= base_url('assets/img/' . $user['image']) ?>" class="align-self-start wd-25 wd-sm-50 me-3" alt="...">
                            <div class="row w-100">
                                <form action="<?= base_url('member/article/comment') ?>" method="post">
                                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                    <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                                    <h5 class="mb-2"><?= $user['name'] ?></h5>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="comment" id="comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary float-end">Send</button>
                                </form>
                            </div>
                        </div> -->
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
