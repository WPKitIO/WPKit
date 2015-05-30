<?php
	// This sets the page to display JSON data
	header('content-type: application/json; charset=utf-8');

	$post_id 	= $post->ID;

	$page_information = array (
		'id'	 => $post->ID,
		'slug' => $post->post_name,
    'template' => $GLOBALS['current_theme_template']
	);

	// This is the 'Manufacturer' Taxonomy
	$manufacturer = get_field('manufacturer', $post_id);

	$manufacturer = array (
		'name' => $manufacturer->name,
		'slug' => $manufacturer->slug
	);

	$car = array (
		'manufacturer' => $manufacturer,
		'name' 	  		 => $post->post_title,
		'description'  => get_field('description', $post_id),
		'models'			 => get_field('models', $post_id)
	);

	// JSON Data that displays when viewing the Page
	$json_data = array(
		'page_information' => $page_information,
		'car' 		 				 => $car
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
