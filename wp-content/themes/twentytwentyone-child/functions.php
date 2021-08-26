<?php

add_action( 'init', 'create_custom_post_type' );
 
function create_custom_post_type() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
 $labels = array(
'name' => _x('accordions', 'plural'),
'singular_name' => _x('accordion', 'singular'),
'menu_name' => _x('accordions', 'admin menu'),
'name_admin_bar' => _x('accordions', 'admin bar'),


'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New accordions'),
'new_item' => __('New accordions'),
'edit_item' => __('Edit accordions'),
'view_item' => __('View accordions'),
'all_items' => __('All accordions'),
'search_items' => __('Search accordions'),
'not_found' => __('No accordions found.'),
);
 
 
$args = array(
  'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our News and specific data',
'public' => true,
'taxonomies' => array( 'category', 'post_tag' ),
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'can_export' => true,
'capability_type' => 'post',
 'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'accordions'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 6,
'menu_icon' => 'dashicons-megaphone',
);
 
register_post_type( 'accordion',$args);
}

add_action( 'init', 'create_custom_post_type1' );
 
function create_custom_post_type1() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
 $labels = array(
'name' => _x('Tabs', 'plural'),
'singular_name' => _x('tabs', 'singular'),
'menu_name' => _x('tabs', 'admin menu'),
'name_admin_bar' => _x('tabs', 'admin bar'),


'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New tabs'),
'new_item' => __('New tabs'),
'edit_item' => __('Edit tabs'),
'view_item' => __('View tabs'),
'all_items' => __('All tabs'),
'search_items' => __('Search tabs'),
'not_found' => __('No tabs found.'),
);
 
 
$args = array(
  'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our News and specific data',
'public' => true,
'taxonomies' => array( 'category', 'post_tag' ),
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'can_export' => true,
'capability_type' => 'post',
 'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'tabs'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 6,
'menu_icon' => 'dashicons-megaphone',
);
 
register_post_type( 'tabs',$args);
}
add_action( 'init', 'create_custom_post_type2' );
 
function create_custom_post_type2() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
 $labels = array(
'name' => _x('Testimonials', 'plural'),
'singular_name' => _x('testimonials', 'singular'),
'menu_name' => _x('testimonials', 'admin menu'),
'name_admin_bar' => _x('testimonials', 'admin bar'),


'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New testimonials'),
'new_item' => __('New testimonials'),
'edit_item' => __('Edit testimonials'),
'view_item' => __('View testimonials'),
'all_items' => __('All testimonials'),
'search_items' => __('Search testimonials'),
'not_found' => __('No testimonials found.'),
);
 
 
$args = array(
  'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our News and specific data',
'public' => true,
'taxonomies' => array( 'category', 'post_tag' ),
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'can_export' => true,
'capability_type' => 'post',
 'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'testimonials'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 6,
'menu_icon' => 'dashicons-megaphone',
);
 
register_post_type( 'testimonials',$args);
}

