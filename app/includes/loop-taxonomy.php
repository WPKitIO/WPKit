<?php

// Get Post Terms
$terms = wp_get_post_terms( $post_id, $taxonomy );

// Loop through each Term
foreach( $terms as $term ) {
  $term_content = array (
    'name' => $term->name,
    'slug' => $term->slug
  );

  $taxonomy_term_list = array (
		'name' => $taxonomy,
    'terms'    => $term_content,
  );
}

?>
