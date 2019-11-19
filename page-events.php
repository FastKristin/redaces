<?php
/**
 * Template Name: Events Page
 *
 * @package waves + Aces
 */

get_header();
?>

	<div id="content" class="">
			<?php echo get_template_part('partials/banner'); ?>
		<div class="container">
      <div class="row justify-content-center">
        <div class="col-xs-12 col-md-10 col-xl-8 text-center">

    			<?php while ( have_posts() ) : the_post(); ?>

    				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    				<div class="entry-content">

    						<?php the_content(); ?>
    						<?php
    								wp_link_pages( array(
    								'before' => '<div class="page-links">' . __( 'Pages:', 'waves' 	),
    								'after'  => '</div>',
    								) );
    									?>

    				</div><!-- .entry-content -->

    				</article><!-- #post-## -->


    			<?php endwhile; // end of the loop. ?>

        </div>
			</div>
		</div>
				<?php get_template_part('partials/events' , 'listings'); ?>
	</div>

<?php get_footer('front'); ?>
