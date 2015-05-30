<?php

// Register Custom Post Type
// -- Cars
function cpt_cars() {

	$labels = array(
		'name'                => _x( 'Cars', 'Car General Name', 'text_domain' ),
		'singular_name'       => _x( 'Car', 'Car Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Cars', 'text_domain' ),
		'name_admin_bar'      => __( 'Car', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Car:', 'text_domain' ),
		'all_items'           => __( 'All Cars', 'text_domain' ),
		'add_new_item'        => __( 'Add New Car', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Car', 'text_domain' ),
		'edit_item'           => __( 'Edit Car', 'text_domain' ),
		'update_item'         => __( 'Update Car', 'text_domain' ),
		'view_item'           => __( 'View Car', 'text_domain' ),
		'search_items'        => __( 'Search Car', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'cars', 'text_domain' ),
		'description'         => __( 'Car Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array('manufacturers'),
		'hierarchical'        => true,
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
	register_post_type( 'cars', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_cars', 0 );
