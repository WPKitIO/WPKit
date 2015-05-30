<?php

// Register Custom Manufacturer
// -- Manufacturers

function tax_manufacturers() {

	$labels = array(
		'name'                       => _x( 'Manufacturer', 'Manufacturer General Name', 'text_domain' ),
		'singular_name'              => _x( 'Manufacturer', 'Manufacturer Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Manufacturers', 'text_domain' ),
		'all_items'                  => __( 'All Manufacturers', 'text_domain' ),
		'parent_item'                => __( 'Parent Manufacturer', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Manufacturer:', 'text_domain' ),
		'new_item_name'              => __( 'New Manufacturer Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Manufacturer', 'text_domain' ),
		'edit_item'                  => __( 'Edit Manufacturer', 'text_domain' ),
		'update_item'                => __( 'Update Manufacturer', 'text_domain' ),
		'view_item'                  => __( 'View Manufacturer', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Manufacturers', 'text_domain' ),
		'search_items'               => __( 'Search Manufacturers', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
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
	register_taxonomy( 'manufacturers', array( 'cars' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tax_manufacturers', 0 );
