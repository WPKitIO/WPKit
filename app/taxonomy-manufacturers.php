<?php

	header('content-type: application/json; charset=utf-8');

	$queried_object = get_queried_object();
	// var_dump( $queried_object );

	$description 	= $queried_object->description;
	$id 					= $queried_object->term_id;
	$name 				= $queried_object->name;
	$taxonomy 		= $queried_object->taxonomy;
	$slug 				= $queried_object->slug;

	$page_information = array (
		'id'	 => $id,
		'slug' => $slug,
    'template' => $GLOBALS['current_theme_template']
	);

	$posts = get_posts(array(
		'posts_per_page'	=> -1,
		'post_type'				=> 'cars',
		'tax_query' => array(
			array(
				'taxonomy' => $taxonomy,
				'field' => 'name',
				'terms' => $name
			)
		)
	));

	if( $posts ): foreach( $posts as $post ): setup_postdata( $post );
		$car = array (
			'brand'	=> $slug,
			'image' => get_field('featured_image', $post_id),
			'name'  => $post->post_title,
			'slug'  => $post->post_name
		);
		$car_list[] = $car;
		endforeach; wp_reset_postdata();
	endif;

	$page_content = array (
		'title' 	=> $name,
		'content' => $description,
		'cars' 		=> $car_list,
	);


	// JSON Data that displays when viewing the Page
	$json_data = array(
		'page_information' => $page_information,
		'page_content'		 => $page_content
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
