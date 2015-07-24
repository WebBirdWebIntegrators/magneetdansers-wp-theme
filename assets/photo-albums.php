<?php

if ( ! function_exists('wb_photo_albums') ) {

// Register Custom Post Type
function wb_photo_albums() {

	$labels = array(
		'name'                => _x( 'Foto albums', 'Post Type General Name', 'wb-photo-album' ),
		'singular_name'       => _x( 'Foto album', 'Post Type Singular Name', 'wb-photo-album' ),
		'menu_name'           => __( 'Foto albums', 'wb-photo-album' ),
		'name_admin_bar'      => __( 'Foto album', 'wb-photo-album' ),
		'parent_item_colon'   => __( 'Hoofd foto album:', 'wb-photo-album' ),
		'all_items'           => __( 'Alle foto albums', 'wb-photo-album' ),
		'add_new_item'        => __( 'Nieuw foto album toevoegen', 'wb-photo-album' ),
		'add_new'             => __( 'Voeg toe', 'wb-photo-album' ),
		'new_item'            => __( 'Nieuw foto album', 'wb-photo-album' ),
		'edit_item'           => __( 'Editeer foto album', 'wb-photo-album' ),
		'update_item'         => __( 'Update foto album', 'wb-photo-album' ),
		'view_item'           => __( 'Bekijk foto album', 'wb-photo-album' ),
		'search_items'        => __( 'Zoek foto album', 'wb-photo-album' ),
		'not_found'           => __( 'Niet gevonden', 'wb-photo-album' ),
		'not_found_in_trash'  => __( 'Niet gevonden in prullenmand', 'wb-photo-album' ),
	);
	$rewrite = array(
		'slug'                => 'fotos',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'photo_album', 'wb-photo-album' ),
		'description'         => __( 'Foto albums', 'wb-photo-album' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
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
	register_post_type( 'photo_album', $args );

}

// Hook into the 'init' action
add_action( 'init', 'wb_photo_albums', 0 );

}

?>