<?php 

// Post Types
function selffit_post_types(){
  // Reviews 
  register_post_type('reviews', array(
    
    'capability_type' => 'Customer Reviews',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'featured'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Reviews',
      'add_new_item' => 'Add New Review',
      'edit_item' => 'Edit Review',
      'all_items' => 'All Reviews',
      'singular_name' => 'Review',
    ),
    'menu_icon' => 'dashicons-star-empty'
  ));
  
  
  // FAQ Posts 
  register_post_type('faq', array(
    'capability_type' => 'faq',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array(
      'slug' => 'faq'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'FAQ',
      'add_new_item' => 'Add New FAQ Item',
      'edit_item' => 'Edit FAQ Item',
      'all_items' => 'All FAQ Items',
      'singular_name' => 'FAQ',
    ),
    'menu_icon' => 'dashicons-media-text'
  ));
  
  // Contact Posts 
  register_post_type('contact', array(
    'capability_type' => 'contact',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'custom-fields', 'post-formats', 'thumbnail'),
    'exclude_from_search' => true,
    'rewrite' => array(
      'slug' => 'contact'
    ),
    'public' => true,
    'has_archive' => false,
    'labels' => array(
      'name' => 'Contacts',
      'add_new_item' => 'Add New Contact',
      'edit_item' => 'Edit Contact',
      'all_items' => 'All Contact',
      'singular_name' => 'Contact',
    ),
    'menu_icon' => 'dashicons-smartphone'
  ));
}

add_action('init', 'selffit_post_types');