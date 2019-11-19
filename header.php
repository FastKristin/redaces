<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content"> */

 $container = get_theme_mod( 'understrap_container_type' );
 ?>
 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>
 <head>
 	<meta charset="<?php bloginfo( 'charset' ); ?>">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<meta name="mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
 	<link rel="profile" href="http://gmpg.org/xfn/11">
 	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 	<?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>


<header id="masthead" class="site-header" role="banner">

	<div class="container-fluid">
      <div class="row justify-content-between">
        <div class="col-4">
          <a href="<?php echo get_site_url(); ?>">
    			     <img class="logo" src="<?php echo get_template_directory_uri();?>-child/images/red-aces-proper-logo.png"/>
          </a>
        </div>

        <div class="col-2 text-right">
  			     <span id="menu-open"><i class="fas fa-bars"></i></span>
        </div>
      </div>
  </div>

</header><!-- #masthead -->


<div id="event-overlay" class="bg-primary white text-center">
  <div class="container-fluid">
    <div class="row justify-content-end">
      <div class="col-2 text-right">
        <span id="menu-close"><i class="fas fa-times"></i>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
      	<?php wp_nav_menu( array( 'theme_location' => 'primary',) ); ?>
      </div>
    </div>
  </div>
</div>

<div id="menu-overlay">
  <?php
  $dance_events = new WP_Query( array ( 'post_type' => 'post','posts_per_page' => 1,'meta_key'	=> 'event_date', 'orderby'=> 'meta_value','order'	=> 'ASC') );
  if ( $dance_events->have_posts() ) {
    while ( $dance_events->have_posts() ) {
      $dance_events->the_post();
      $ft_img =  get_the_post_thumbnail_url();
      $sd_name = get_field('dance_name');
      $sd_location = get_field('social_dance_location');
      $dance_date = get_field('event_date');
      $dance_cost = get_field('dance_cost');
      $sd_descr = get_field('social_dance_descr');
  ?>
    <div class="dance-block">
      <h2 class="limelight">Our Next Event:</h2>
      <?php
       if($ft_img) { ?>
        <img src="<?php echo $ft_img; ?>" alt="<?php echo the_title() . " Image"; ?>"/>
      <?php  } ?>
        <h3 class="title"><?php echo "$sd_name"; ?></h3>
        <h5 class="subtitle"><?php echo "$dance_date" . " | " . "$sd_location"; ?></h5>
        <p><?php echo "$sd_descr"; ?></p>
        <h4><?php echo "$dance_cost"; ?></h4>
      </div>
    </div>
  <?php } } wp_reset_postdata(); ?>
</div>
