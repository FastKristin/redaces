<?php
/**
 * Template Name: Lessons Page
 *
 */

get_header();
?>

	<div id="content" class="site-content mt-10">
			<?php echo get_template_part('partials/banner'); ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xs-12 col-md-10 col-xl-8">

					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


						<div class="entry-content">

								<?php the_content(); ?>

						</div><!-- .entry-content -->

						</article><!-- #post-## -->

					</div>


			<?php endwhile; // end of the loop. ?>

			</div>
		</div>

		<div class="container pb-2">
			<?php get_template_part('partials/lessons','upcoming'); ?>
		</div>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xs-12 col-md-10 col-xl-8">
					<?php
					$args = array ( 'post_type' => 'dance_type', 'posts_per_page' => -1);
					$dance_types = new WP_Query ($args);
					if ( $dance_types->have_posts() ) { ?>
						<h2 class="text-center pt-2">Dance Types</h2>
					<?php	while ( $dance_types->have_posts() ) {
							$dance_types->the_post();
							$type = get_field('dance_type');
							$descr = get_field('dance_descr');
					 ?>


					 <div>
						 <h3 class="pb-1"><?php echo $type; ?></h3>
						 <?php echo $descr; ?>
					 </div>
				 <?php } } wp_reset_postdata(); ?>
				</div>
			</div>
		</div>

	</div>

<?php get_footer('front'); ?>
