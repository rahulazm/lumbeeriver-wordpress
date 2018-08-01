<?php
register_post_type('slider', array(
    'labels' => array(
        'name' => __('Slider'),
        'singular_name' => __('slider'),
        'add_new' => __('Add Slide'),
        'all_items' => __('All Slide'),
        'add_new_item' => __('Add New slide'),
        'edit_item' => __('Edit slide'),
        'new_item' => __('New slide'),
        'view_item' => __('View slide'),
        'search_items' => __('Search slide'),
        'not_found' => __('No slide found'),
        'not_found_in_trash' => __('No slide found in Trash')
    ),
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-format-gallery',
    'rewrite' => array('slug' => 'slider'),
    'supports' => array('title'),
)
);
include 'slider_metabox.php';
include 'slider_columns.php';
?>