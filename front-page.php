<?php
/**
 * Template Name: Front Page
 *
 * @package waves + Aces
 */

get_header();

?>

<div id="content" class="site-content">
<?php echo get_template_part('partials/banner'); ?>
		<div class="container">
			<div class="row justify-content-center">
        <div class="col col-md-10 col-xl-8">

    				<div class="entry-content">

								<div class="text-center pt-3">
    							<?php the_content(); ?>
								</div>
    						<?php
    								wp_link_pages( array(
    								'before' => '<div class="page-links">' . __( 'Pages:', 'waves' 	),
    								'after'  => '</div>',
    								) );
    									?>

    				</div><!-- .entry-content -->

        </div>
      </div>
		</div>
	</div>

<?php get_footer('front'); ?>
