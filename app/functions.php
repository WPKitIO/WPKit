<?php

// Get the Template File Name
function define_current_theme_file( $template ) {
    $GLOBALS['current_theme_template'] = basename($template);
    return $template;
}
add_action('template_include', 'define_current_theme_file', 1000);

// Custom Post Types
// -- Cars
include('settings/custom_post_types/cpt-cars.php');

// Custom Taxonomies
// -- Manufacturers
include('settings/custom_taxonomies/tax-manufacturers.php');
