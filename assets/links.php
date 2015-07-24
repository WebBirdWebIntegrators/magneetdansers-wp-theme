<?php

if ( ! function_exists('wb_links') ) {

// Register Custom Post Type
function wb_links() {

	$labels = array(
		'name'                => _x( 'Links', 'Post Type General Name', 'wb-links' ),
		'singular_name'       => _x( 'Link', 'Post Type Singular Name', 'wb-links' ),
		'menu_name'           => __( 'Links', 'wb-links' ),
		'name_admin_bar'      => __( 'Link', 'wb-links' ),
		'parent_item_colon'   => __( 'Parent Link:', 'wb-links' ),
		'all_items'           => __( 'All Links', 'wb-links' ),
		'add_new_item'        => __( 'Add New Link', 'wb-links' ),
		'add_new'             => __( 'Add New', 'wb-links' ),
		'new_item'            => __( 'New Link', 'wb-links' ),
		'edit_item'           => __( 'Edit Link', 'wb-links' ),
		'update_item'         => __( 'Update Link', 'wb-links' ),
		'view_item'           => __( 'View Link', 'wb-links' ),
		'search_items'        => __( 'Search Item', 'wb-links' ),
		'not_found'           => __( 'Not found', 'wb-links' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'wb-links' ),
	);
	$args = array(
		'label'               => __( 'links', 'wb-links' ),
		'description'         => __( 'Links', 'wb-links' ),
		'labels'              => $labels,
		'supports'            => array( 'title', ),
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
		'capability_type'     => 'page',
	);
	register_post_type( 'links', $args );

}

// Hook into the 'init' action
add_action( 'init', 'wb_links', 0 );

}


if ( ! function_exists( 'wb_link_categories' ) ) {

// Register Custom Taxonomy
function wb_link_categories() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'wb-links' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'wb-links' ),
		'menu_name'                  => __( 'Categories', 'wb-links' ),
		'all_items'                  => __( 'All Categories', 'wb-links' ),
		'parent_item'                => __( 'Parent Category', 'wb-links' ),
		'parent_item_colon'          => __( 'Parent Category:', 'wb-links' ),
		'new_item_name'              => __( 'New Category Name', 'wb-links' ),
		'add_new_item'               => __( 'Add New Category', 'wb-links' ),
		'edit_item'                  => __( 'Edit Category', 'wb-links' ),
		'update_item'                => __( 'Update Category', 'wb-links' ),
		'view_item'                  => __( 'View Category', 'wb-links' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'wb-links' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'wb-links' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wb-links' ),
		'popular_items'              => __( 'Popular Categories', 'wb-links' ),
		'search_items'               => __( 'Search Categories', 'wb-links' ),
		'not_found'                  => __( 'Not Found', 'wb-links' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'link_categories', array( 'links' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'wb_link_categories', 0 );

}

?>