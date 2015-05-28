<?php
	// This sets the page to display JSON data
	header('content-type: application/json; charset=utf-8');

	$post_id 	= $post->ID;
	$taxonomy = 'category'; // This can be dynamically set via a custom meta field

	$page_information = array (
		'id'	 		 => $post->ID,
		'slug' 		 => $post->post_name,
	);

	$page_content = array (
		'title' 	=> $post->post_title,
		'content' => $post->post_content,
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
