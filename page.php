<?php
/**
 * * The template for displaying all pages.
  *
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site will use a
  * different template.
 *
 */
get_header();
?>

<div id="content" class="site-content">
	<?php echo get_template_part('partials/banner'); ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col col-md-10 col-xl-8">

				   <div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

						<?php while ( have_posts() ) : the_post(); ?>

							<div class="entry-content">
								<?php the_content(); ?>
							</div>

						<?php endwhile; ?>

						</main><!-- #main -->
					</div><!-- #primary -->

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
