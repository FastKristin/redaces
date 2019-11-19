<?php


function register_custom_nav_menus() {
	register_nav_menus( array(
		'primary' => 'Primary',
	) );
}

add_action( 'after_setup_theme', 'register_custom_nav_menus' );

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/all.min.css', array(), $the_theme->get( 'Version' ), 'all' );

    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );

    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js', array(), $the_theme->get( 'Version' ), true );
}

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Dance Types', 'Dance Types', 'text_domain' ),
		'singular_name'         => _x( 'Dance Type', 'Dance Types', 'text_domain' ),
		'menu_name'             => __( 'Dance Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Dance Type', 'text_domain' ),
		'archives'              => __( 'Dance Type Archives', 'text_domain' ),
		'attributes'            => __( 'Dance Type Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Dance Type:', 'text_domain' ),
		'all_items'             => __( 'All Dance Types', 'text_domain' ),
		'add_new_item'          => __( 'Add New Dance Type', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Dance Type', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Dance type', 'text_domain' ),
		'view_items'            => __( 'View Dance types', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Dance types list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Dance Type', 'text_domain' ),
		'description'           => __( 'Dance Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'						 => array( 'title', 'author', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
    'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'dance_type', $args );

  //Events

  $labels = array(
		'name'                  => _x( 'Lesson series', 'Lesson series', 'text_domain' ),
		'singular_name'         => _x( 'Lesson series', 'Lesson series', 'text_domain' ),
		'menu_name'             => __( 'Lesson series', 'text_domain' ),
		'name_admin_bar'        => __( 'Lesson series', 'text_domain' ),
		'archives'              => __( 'Lesson series Archives', 'text_domain' ),
		'attributes'            => __( 'Lesson series Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Lesson series:', 'text_domain' ),
		'all_items'             => __( 'All Lesson series', 'text_domain' ),
		'add_new_item'          => __( 'Add New Lesson seriese', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Lesson series', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Lesson series', 'text_domain' ),
		'view_items'            => __( 'View Lesson series', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Lesson series list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Lesson series', 'text_domain' ),
		'description'           => __( 'Lesson series Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'						 => array( 'title', 'author', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
    'menu_icon'             => 'dashicons-calendar',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'lesson_series', $args );

}
add_action( 'init', 'custom_post_type', 0 );

// Move Yoast to bottom
function wpcover_move_yoast() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'wpcover_move_yoast');
