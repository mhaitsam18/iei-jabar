 <div class="page-content">


     <div class="row">
         <div class="col-12 col-xl-12 stretch-card">
             <div class="card">
                 <div class="card-body">
                     <div class="d-flex justify-content-center align-items-center flex-wrap grid-margin">
                         <div class="text-center">
                             <h2 class="mb-3 mb-md-0"><?= $title ?></h2>
                             <div>By <?= $article['name'] ?>, <?= date('j F Y', strtotime($article['created_at'])) ?></div>
                             <img src="<?= base_url('assets/img/'.$article['thumbnail']) ?>" class="img-fluid" alt="...">
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div> <!-- row -->
 </div>