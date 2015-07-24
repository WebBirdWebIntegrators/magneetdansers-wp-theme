<?php

if ( ! function_exists('wb_dance_library') ) {

// Register Custom Post Type
function wb_dance_library() {

	$labels = array(
		'name'                => _x( 'Dansen', 'Post Type General Name', 'wb-dance-library' ),
		'singular_name'       => _x( 'Dans', 'Post Type Singular Name', 'wb-dance-library' ),
		'menu_name'           => __( 'Dansbibliotheek', 'wb-dance-library' ),
		'name_admin_bar'      => __( 'Dans', 'wb-dance-library' ),
		'parent_item_colon'   => __( 'Dans Item:', 'wb-dance-library' ),
		'all_items'           => __( 'Alle dansen', 'wb-dance-library' ),
		'add_new_item'        => __( 'Nieuwe dans toevoegen', 'wb-dance-library' ),
		'add_new'             => __( 'Toevoegen', 'wb-dance-library' ),
		'new_item'            => __( 'Nieuwe dans', 'wb-dance-library' ),
		'edit_item'           => __( 'Dans bewerken', 'wb-dance-library' ),
		'update_item'         => __( 'Update dans', 'wb-dance-library' ),
		'view_item'           => __( 'Bekijk dans', 'wb-dance-library' ),
		'search_items'        => __( 'Zoek dans', 'wb-dance-library' ),
		'not_found'           => __( 'Niet gevonden', 'wb-dance-library' ),
		'not_found_in_trash'  => __( 'Niet gevonden in prullenmand', 'wb-dance-library' ),
	);
	$rewrite = array(
		'slug'                => 'dans',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'wb_dance_library', 'wb-dance-library' ),
		'description'         => __( 'Dansbibliotheek', 'wb-dance-library' ),
		'labels'              => $labels,
		'supports'            => array( 'editor', 'title', 'author', ),
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
	register_post_type( 'wb_dance_library', $args );

}

// Hook into the 'init' action
add_action( 'init', 'wb_dance_library', 0 );

}

if ( ! function_exists( 'dance_library_categories' ) ) {

// Register Custom Taxonomy
function dance_library_categories() {

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
		'slug'                       => 'dansen',
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
	register_taxonomy( 'dance_library_categories', array( 'wb_dance_library' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'dance_library_categories', 0 );

}

?>
