<?php
	/*
	Template Name: Page - Manufacturers
	*/

	header('content-type: application/json; charset=utf-8');

	$post_id 	= $post->ID;

	$page_information = array (
		'id'	 => $post->ID,
		'slug' => $post->post_name,
    'template' => $GLOBALS['current_theme_template']
	);

	$taxonomy = 'manufacturers';
	$terms = get_terms( $taxonomy);

	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		foreach ( $terms as $term ) {
			$term_content = array (
				'name' => $term->name,
				'slug' => $term->slug
			);
			$manufacturer_list[] = $term_content;
		}
 	}

	$page_content = array (
		'title' 	=> $post->post_title,
		'content' => $post->post_content,
		'manufacturers' => $manufacturer_list,
	);

	// JSON Data that displays when viewing the Page
	$json_data = array(
		'page_information' => $page_information,
		'page_content' 		 => $page_content,
	);

	// JSON Callback Information
	if($_GET['callback'] != '') {
			// If there is a JSON Callback in the URL
			echo "typeof ".$_GET['callback']." === 'function' && ".$_GET['callback']."(".json_encode($json_data).");";
	} else {
			// If there is No JSON Callback in the URL
			echo $_GET['callback'].json_encode($json_data);
	};
?>
