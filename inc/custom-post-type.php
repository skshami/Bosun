<?php
/**
 * Bosun Custom Post Type functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bosun
 */

 //Custom Post Type
function bosun_cpt() {

    //Slider
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'bosun' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'bosun' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'bosun' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'bosun' ),
        'add_new'               => __( 'Add New Slider', 'bosun' ),
        'add_new_item'          => __( 'Add New Slider', 'bosun' ),
        'new_item'              => __( 'New Slider', 'bosun' ),
        'edit_item'             => __( 'Edit Slider', 'bosun' ),
        'view_item'             => __( 'View Slider', 'bosun' ),
        'all_items'             => __( 'All Sliders', 'bosun' ),
        'search_items'          => __( 'Search Sliders', 'bosun' ),
        'parent_item_colon'     => __( 'Parent Sliders:', 'bosun' ),
        'not_found'             => __( 'No sliders found.', 'bosun' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'bosun' ),
        'featured_image'        => _x( 'Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'bosun' ),
        'set_featured_image'    => _x( 'Set Slider cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'remove_featured_image' => _x( 'Remove Slider cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'archives'              => _x( 'Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'bosun' ),
        'insert_into_item'      => _x( 'Insert into Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'bosun' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'bosun' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'bosun' ),
        'items_list_navigation' => _x( 'Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'bosun' ),
        'items_list'            => _x( 'Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'bosun' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-slides',
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'slider', $args );

    //Service
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'bosun' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'bosun' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'bosun' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'bosun' ),
        'add_new'               => __( 'Add New Service', 'bosun' ),
        'add_new_item'          => __( 'Add New Service', 'bosun' ),
        'new_item'              => __( 'New Service', 'bosun' ),
        'edit_item'             => __( 'Edit Service', 'bosun' ),
        'view_item'             => __( 'View Service', 'bosun' ),
        'all_items'             => __( 'All Services', 'bosun' ),
        'search_items'          => __( 'Search Services', 'bosun' ),
        'parent_item_colon'     => __( 'Parent Services:', 'bosun' ),
        'not_found'             => __( 'No Services found.', 'bosun' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'bosun' ),
        'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'bosun' ),
        'set_featured_image'    => _x( 'Set Service cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'remove_featured_image' => _x( 'Remove Service cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'bosun' ),
        'insert_into_item'      => _x( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'bosun' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'bosun' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'bosun' ),
        'items_list_navigation' => _x( 'Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'bosun' ),
        'items_list'            => _x( 'Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'bosun' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-cart',
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'service', $args );

    //Team
    $labels = array(
        'name'                  => _x( 'Teams', 'Post type general name', 'bosun' ),
        'singular_name'         => _x( 'Team', 'Post type singular name', 'bosun' ),
        'menu_name'             => _x( 'Teams', 'Admin Menu text', 'bosun' ),
        'name_admin_bar'        => _x( 'Team', 'Add New on Toolbar', 'bosun' ),
        'add_new'               => __( 'Add New Member', 'bosun' ),
        'add_new_item'          => __( 'Add Team Member', 'bosun' ),
        'new_item'              => __( 'New Team Member', 'bosun' ),
        'edit_item'             => __( 'Edit Team Member', 'bosun' ),
        'view_item'             => __( 'View Team Member', 'bosun' ),
        'all_items'             => __( 'All Team Members', 'bosun' ),
        'search_items'          => __( 'Search Teams', 'bosun' ),
        'parent_item_colon'     => __( 'Parent Teams:', 'bosun' ),
        'not_found'             => __( 'No found Team Members.', 'bosun' ),
        'not_found_in_trash'    => __( 'No Teams found in Trash.', 'bosun' ),
        'featured_image'        => _x( 'Add Team Member Photo', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'bosun' ),
        'set_featured_image'    => _x( 'Set Team Member Photo', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'remove_featured_image' => _x( 'Remove Team Member Photo', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'use_featured_image'    => _x( 'Use as Team Member Photo', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'archives'              => _x( 'Team archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'bosun' ),
        'insert_into_item'      => _x( 'Insert into Team', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'bosun' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Team', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'bosun' ),
        'filter_items_list'     => _x( 'Filter Teams list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'bosun' ),
        'items_list_navigation' => _x( 'Teams list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'bosun' ),
        'items_list'            => _x( 'Teams list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'bosun' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-groups',
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail' ),

    );

    register_post_type( 'team', $args );

    //Case
    $labels = array(
        'name'                  => _x( 'Cases', 'Post type general name', 'bosun' ),
        'singular_name'         => _x( 'Case', 'Post type singular name', 'bosun' ),
        'menu_name'             => _x( 'Cases', 'Admin Menu text', 'bosun' ),
        'name_admin_bar'        => _x( 'Case', 'Add New on Toolbar', 'bosun' ),
        'add_new'               => __( 'Add New Case', 'bosun' ),
        'add_new_item'          => __( 'Add Case', 'bosun' ),
        'new_item'              => __( 'New Case', 'bosun' ),
        'edit_item'             => __( 'Edit Case', 'bosun' ),
        'view_item'             => __( 'View Case', 'bosun' ),
        'all_items'             => __( 'All Cases', 'bosun' ),
        'search_items'          => __( 'Search Cases', 'bosun' ),
        'parent_item_colon'     => __( 'Parent Cases:', 'bosun' ),
        'not_found'             => __( 'No found Cases.', 'bosun' ),
        'not_found_in_trash'    => __( 'No Cases found in Trash.', 'bosun' ),
        'featured_image'        => _x( 'Add Case Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'bosun' ),
        'set_featured_image'    => _x( 'Set Case Cover Image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'remove_featured_image' => _x( 'Remove Case Cover Image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'use_featured_image'    => _x( 'Use as Case Cover Image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'archives'              => _x( 'Case archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'bosun' ),
        'insert_into_item'      => _x( 'Insert into Case', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'bosun' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Case', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'bosun' ),
        'filter_items_list'     => _x( 'Filter Cases list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'bosun' ),
        'items_list_navigation' => _x( 'Cases list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'bosun' ),
        'items_list'            => _x( 'Cases list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'bosun' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'case' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-screenoptions',
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),

    );

    register_post_type( 'case', $args );
 
    //testimonial
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'bosun' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'bosun' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'bosun' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'bosun' ),
        'add_new'               => __( 'Add New Testimonial', 'bosun' ),
        'add_new_item'          => __( 'Add Testimonial', 'bosun' ),
        'new_item'              => __( 'New Testimonial', 'bosun' ),
        'edit_item'             => __( 'Edit Testimonial', 'bosun' ),
        'view_item'             => __( 'View Testimonial', 'bosun' ),
        'all_items'             => __( 'All Testimonials', 'bosun' ),
        'search_items'          => __( 'Search Testimonials', 'bosun' ),
        'parent_item_colon'     => __( 'Parent Testimonials:', 'bosun' ),
        'not_found'             => __( 'No found Testimonials.', 'bosun' ),
        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'bosun' ),
        'featured_image'        => _x( 'Add Company/Client Logo', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'bosun' ),
        'set_featured_image'    => _x( 'Set Company/Client Logo', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'remove_featured_image' => _x( 'Remove Company/Client Logo', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'use_featured_image'    => _x( 'Use as Company/Client Logo', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'bosun' ),
        'archives'              => _x( 'Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'bosun' ),
        'insert_into_item'      => _x( 'Insert into Testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'bosun' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'bosun' ),
        'filter_items_list'     => _x( 'Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'bosun' ),
        'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'bosun' ),
        'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'bosun' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-testimonial',
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),

    );

    register_post_type( 'testimonial', $args );
}

add_action( 'init', 'bosun_cpt' );