<div class="page-content">

	<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
		<div>
			<h4 class="mb-3 mb-md-0"><?= $title ?></h4>
		</div>
		<div class="d-flex align-items-center flex-wrap text-nowrap">
		</div>
	</div>

	<div class="row">
		<div class="card">
			<div class="card-body">
				<div class="text-center mb-3">
					<button class="btn btn-primary mx-2 active" id="toggleA">Sort By Scientific Name</button>
					<button class="btn btn-primary mx-2" id="toggleB">Sort By General Name</button>
				</div>

				<div class="row">
					<div class="col">
						<div class="collapse multi-collapse show" id="multiCollapseExample1">
							<div class="text-center m-3">
								<?php
								foreach (range('A', 'Z') as $letter) {
									echo "<a class='mx-2 fs-2' href='#$letter' onclick='scrollToLetter(\"$letter\"); return false;'>$letter</a>";
								}
								?>
							</div>

							<?php
							$current_alphabet = '';
							foreach ($fish_list as $fish) {
								$latin_name = $fish['scientific_name'];
								$first_letter = strtoupper(substr($latin_name, 0, 1));

								if ($first_letter !== $current_alphabet) {
									if ($current_alphabet !== '') {
										echo "</div>";
									}
									echo "<div><a href='#$first_letter'>$first_letter</a></div>";
									echo "<div id='$first_letter'>";
									$current_alphabet = $first_letter;
								}

								echo '<a href="' . base_url("member/fish/detail/$fish[id]") . '" class="text-muted">' . $latin_name . "</a><br>";
							}

							if ($current_alphabet !== '') {
								echo "</div>";
							}
							?>
						</div>
						<div class="collapse multi-collapse" id="multiCollapseExample2">
							<div class="text-center m-3">
								<?php
								foreach (range('A', 'Z') as $letter) {
									echo "<a class='mx-2 fs-2' href='#$letter-2' onclick='scrollToLetter(\"$letter-2\"); return false;'>$letter</a>";
								}
								?>
							</div>

							<?php
							$current_alphabet = '';
							foreach ($fish_list2 as $fish) {
								$general_name = $fish['general_name'];
								$first_letter = strtoupper(substr($general_name, 0, 1));

								if ($first_letter !== $current_alphabet) {
									if ($current_alphabet !== '') {
										echo "</div>";
									}
									echo "<div><a href='#$first_letter-2'>$first_letter</a></div>";
									echo "<div id='$first_letter-2'>";
									$current_alphabet = $first_letter;
								}

								echo '<a href="' . base_url("member/fish/detail/$fish[id]") . '" class="text-muted">' . $general_name . "</a><br>";
							}

							if ($current_alphabet !== '') {
								echo "</div>";
							}
							?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script>
		function scrollToLetter(letter) {
			var target = $('#' + letter);
			$('html, body').animate({
				scrollTop: target.offset().top - 85 // Adjust the value to control the distance
			}, 0); // Animation speed in milliseconds
		}
	</script>

	<script>
		$(document).ready(function() {
			$("#toggleA").click(function() {
				$("#multiCollapseExample1").collapse("toggle");
				$("#multiCollapseExample2").collapse("hide");
				$(this).toggleClass("active");
				$("#toggleB").removeClass("active");
			});

			$("#toggleB").click(function() {
				$("#multiCollapseExample2").collapse("toggle");
				$("#multiCollapseExample1").collapse("hide");
				$(this).toggleClass("active");
				$("#toggleA").removeClass("active");
			});
		});
	</script>

</div>
