<div id="lesson-series" class="ten columns offset-by-two">
	<div class="container">
		<div class="row justify-content-center py-3">
			<div class="col col-md-10 col-xl-8">
				<h2 class="text-center"> Current & Upcoming Lesson Series </h2>
			</div>
		</div>
		<div class="row justify-content-center">

		<?php // The Query


		$args = array ( 'post_type' => 'lesson_series', 'posts_per_page' => -1, 'meta_key'	=> 'lesson_series_start_date', 'orderby' => 'meta_value', 'order'	=> 'ASC');
		$lesson_series = new WP_Query ($args);

			// The Loop
				while ( $lesson_series->have_posts() ) {
					$lesson_series->the_post();

					$s_name = get_field('series_name');
					$l_descr = get_field('lesson_descr');
					$ls_cost = get_field('lesson_series_cost');
					$ls_start_date = get_field('lesson_series_start_date');
					$ls_end_date = get_field('lesson_series_end_date');
					$ls_loc = get_field('lesson_location');
					$ls_addy = get_field('lesson_location_addy');

					?>

					<div class="col-xs-12 col-sm-6 col-lg-5">
						<div class="card mb-4">
							<!-- <img class="card-img-top" src="..." alt="Card image cap"/> -->
							<div class="card-body">
								<h3 class="card-title"><?php echo "$s_name"; ?></h3>

								<h5 class="card-subtitle"><?php echo "$ls_start_date" . " - " . "$ls_end_date" . " | " . "$ls_loc"; ?></h5>
								<p><?php echo "$l_descr"; ?></p>
								<h4><?php echo "$ls_cost"; ?></h4>
							</div>
						</div>
					</div>

				<!-- <h2><?php echo "$s_name"; ?></h2>
				<h5><?php echo "$ls_start_date" . " - " . "$ls_end_date"; ?></h5>
				<h5><?php echo "$ls_cost"; ?></h5>
				<h5><?php echo "$ls_loc"; ?></h5>
				<p><?php echo "$ls_addy"; ?></p>
				<p><?php echo "$l_descr"; ?></p> -->

				<?php

				}

				/* Restore original Post Data */
				wp_reset_postdata();

			?>
		</div>
	</div>

</div>
