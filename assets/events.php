<?php

if ( ! function_exists('wb_events') ) {

// Register Custom Post Type
function wb_events() {

	$labels = array(
		'name'                => _x( 'Evenementen', 'Post Type General Name', 'wb-events' ),
		'singular_name'       => _x( 'Evenement', 'Post Type Singular Name', 'wb-events' ),
		'menu_name'           => __( 'Evenementen', 'wb-events' ),
		'name_admin_bar'      => __( 'Evenement', 'wb-events' ),
		'parent_item_colon'   => __( 'Hoofd evenement:', 'wb-events' ),
		'all_items'           => __( 'Alle evenementen', 'wb-events' ),
		'add_new_item'        => __( 'Nieuw evenement toevoegen', 'wb-events' ),
		'add_new'             => __( 'Toevoegen', 'wb-events' ),
		'new_item'            => __( 'Nieuw evenement', 'wb-events' ),
		'edit_item'           => __( 'Evenement bewerken', 'wb-events' ),
		'update_item'         => __( 'Update evenement', 'wb-events' ),
		'view_item'           => __( 'Bekijk evenement', 'wb-events' ),
		'search_items'        => __( 'Zoek evenement', 'wb-events' ),
		'not_found'           => __( 'Niet gevonden', 'wb-events' ),
		'not_found_in_trash'  => __( 'Niet gevonden in de prullenmand', 'wb-events' ),
	);
	$rewrite = array(
		'slug'                => 'evenementen',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'event', 'wb-events' ),
		'description'         => __( 'Evenementen', 'wb-events' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'event', $args );

}

// Hook into the 'init' action
add_action( 'init', 'wb_events', 0 );

}

if ( ! function_exists( 'event_categories' ) ) {

// Register Custom Taxonomy
function event_categories() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'magneetdansers' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'magneetdansers' ),
		'menu_name'                  => __( 'Categories', 'magneetdansers' ),
		'all_items'                  => __( 'All Items', 'magneetdansers' ),
		'parent_item'                => __( 'Parent Item', 'magneetdansers' ),
		'parent_item_colon'          => __( 'Parent Item:', 'magneetdansers' ),
		'new_item_name'              => __( 'New Item Name', 'magneetdansers' ),
		'add_new_item'               => __( 'Add New Item', 'magneetdansers' ),
		'edit_item'                  => __( 'Edit Item', 'magneetdansers' ),
		'update_item'                => __( 'Update Item', 'magneetdansers' ),
		'view_item'                  => __( 'View Item', 'magneetdansers' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'magneetdansers' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'magneetdansers' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'magneetdansers' ),
		'popular_items'              => __( 'Popular Items', 'magneetdansers' ),
		'search_items'               => __( 'Search Items', 'magneetdansers' ),
		'not_found'                  => __( 'Not Found', 'magneetdansers' ),
	);
	$rewrite = array(
		'slug'                       => 'event-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'event_category', array( 'event' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'event_categories', 0 );

}

?>