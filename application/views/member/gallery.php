<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0"><?= $title ?></h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group wd-200 me-2 mb-2 mb-md-0">
                <span class="input-group-text input-group-addon bg-transparent border-primary"><i data-feather="tag" class=" text-primary"></i></span>
                <select class="form-select border-primary bg-transparent choose-type">
                    <option value="">Choose Fish Type</option>
                    <?php foreach ($fish_types as $fish_type) : ?>
                        <option value="<?= $fish_type['id'] ?>"><?= $fish_type['type'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="" style="min-height: 450px;">
            <div class="row" id="fishRecordsContainer">
                <?php foreach ($fishs as $fish) : ?>
                    <div class="col-sm-3 mb-3">
                        <div class="card">
                            <img src="<?= base_url('assets/img/' . $fish['image']) ?>" alt="" class="card-img-top h-25">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title text-center"><?= $fish['general_name'] ?></h5>
                                <p class="text-center mb-2">
                                <ul>
                                    <li>Spesies : <?= $fish['scientific_name'] ?></li>
                                </ul>
                                </p>
                                <div class="d-block my-2">
                                    <button type="button" class="btn <?= fishlike($fish['id'], $user['id']) ?> float-end like-button" data-fish-id="<?= $fish['id'] ?>"><i data-feather="thumbs-up"></i></button>
                                </div>
                                <div class="text-center d-grid">
                                    <a href="<?= base_url('member/fish/detail/' . $fish['id']) ?>" class="btn btn-primary btn-block">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
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
        $(document).ready(function() {
            // Function to update the fish records based on the selected fish type
            function updateFishRecords() {
                var selectedFishType = $('.choose-type').val(); // Get the selected fish type ID

                // Send an AJAX request to get the filtered fish records
                $.ajax({
                    url: '<?= base_url('member/fish/record') ?>', // Replace with your backend endpoint to fetch filtered fish records
                    type: 'POST', // Use 'POST' if needed, otherwise, adjust to your API requirements
                    data: {
                        fishType: selectedFishType
                    }, // Send the selected fish type ID as data
                    dataType: 'html', // Change to the appropriate data type if your endpoint returns something else
                    success: function(data) {
                        // Update the fish records container with the filtered data
                        $('#fishRecordsContainer').html(data);
                    },
                    error: function(xhr, status, error) {
                        // Handle error if needed
                    }
                });
            }

            // Bind the change event to the select element
            $('.choose-type').on('change', function() {
                updateFishRecords(); // Call the updateFishRecords function whenever the select value changes
            });
        });
    </script>

</div>