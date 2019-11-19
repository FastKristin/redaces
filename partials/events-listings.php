
<div class="container pt-3">

	<div id="social-dance">
		<h2 class="text-center"> Upcoming Events </h2>
		<div class="container">
			<div class="row justify-content-center">

		<?php // The Query

		$dance_events = new WP_Query( array ( 'post_type' => 'post','meta_key'	=> 'event_date', 'orderby'=> 'meta_value','order'	=> 'ASC') );

			// The Loop
			if ( $dance_events->have_posts() ) {
				while ( $dance_events->have_posts() ) {
					$dance_events->the_post();

          $cat = get_the_category(); ?>

         	<?php   if($cat[0]->cat_ID === 5) {

					$sd_name = get_field('dance_name');
					$sd_location = get_field('social_dance_location');
					$dance_date = get_field('event_date');
					$dance_cost = get_field('dance_cost');
					$sd_descr = get_field('social_dance_descr'); ?>

							<div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="card mb-2">
									<?php $ft_img = get_the_post_thumbnail_url();
									 if($ft_img) { ?>
										<img class="card-img-top" src="<?php echo $ft_img; ?>" alt="<?php echo the_title() . " Image"; ?>"/>
									<?php  } ?>
									<div class="card-body">
										<h3 class="card-title"><?php echo "$sd_name"; ?></h3>

										<h5 class="card-subtitle"><?php echo "$dance_date" . " | " . "$sd_location"; ?></h5>
										<p><?php echo "$sd_descr"; ?></p>
										<h4><?php echo "$dance_cost"; ?></h4>
									</div>
								</div>
							</div>


				<?php
			} elseif($cat[0]->cat_ID === 3) {


					$lm_event = get_field('live_music_event');
					$lm_location = get_field('live_music_location');
					$lm_date = get_field('event_date');
					$lm_descr = get_field('live_music_descr'); ?>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<div class="card mb-2">
							<?php $ft_img = get_the_post_thumbnail_url();
							 if($ft_img) { ?>
								<img class="card-img-top" src="<?php echo $ft_img; ?>" alt="<?php echo the_title() . " Image"; ?>"/>
							<?php  } ?>
							<div class="card-body">
								<h3 class="card-title"><?php echo "$lm_event"; ?></h3>

								<h5 class="card-subtitle"><?php echo "$lm_date" . " | " . "$lm_location"; ?></h5>
								<p><?php echo "$lm_descr"; ?></p>
								<h4><?php echo "$dance_cost"; ?></h4>
							</div>
						</div>
					</div>

				<?php

				    }
				}

				//endwhile;

				/* Restore original Post Data */
				wp_reset_postdata();
			} else { ?>
				<p>We don't have any live music events we're planning to attend at the moment.</p>
		<?php	}

			//endif;
			?>

	</div>



	<!-- <div id="oot-events" class="four columns">
		<h3> Out of Town Events</h3>

		<?php // The Query




		$oot_events = new WP_Query( array ('cat' => 7) );

			// The Loop
			if ( $oot_events->have_posts() ) {
				while ( $oot_events->have_posts() ) {
					$oot_events->the_post();

					$oot_event_name = get_field('oot_event_name');
					$oot_location = get_field('oot_location');
					$oot_dates = get_field('event_date');
					$oot_link = get_field('oot_event_link');

				?>

				<h2><?php echo "$oot_event_name"; ?></h2>
				<h5><?php echo "$oot_location"; ?></h5>
				<h5><?php echo "$oot_dates"; ?></h5>
				<p><?php echo "$oot_link"; ?></p>

				<?php

				}

			//	endwhile;

				/* Restore original Post Data */
				wp_reset_postdata();
			}

		//	endif;
			?>

	</div>
 -->
</div>
