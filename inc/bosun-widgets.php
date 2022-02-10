<?php
/**
 * Custom template widgets for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * 
 * @package Bosun
 */

 // Register widget area.
  
function bosun_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'SEARCH', 'bosun' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'bosun' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Category', 'bosun' ),
            'id'            => 'sidebar-2',
            'description'   => esc_html__( 'Add widgets here.', 'bosun' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Recent Post', 'bosun' ),
            'id'            => 'sidebar-3',
            'description'   => esc_html__( 'Add widgets here.', 'bosun' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Tag Clouds', 'bosun' ),
            'id'            => 'sidebar-4',
            'description'   => esc_html__( 'Add widgets here.', 'bosun' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Instagram Feeds', 'bosun' ),
            'id'            => 'sidebar-5',
            'description'   => esc_html__( 'Add widgets here.', 'bosun' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Newsletter', 'bosun' ),
            'id'            => 'sidebar-6',
            'description'   => esc_html__( 'Add widgets here.', 'bosun' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Contact Page Maps', 'bosun' ),
            'id'            => 'sidebar-7',
            'description'   => esc_html__( 'Add widgets here.', 'bosun' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__( 'Contact Form', 'bosun' ),
            'id'            => 'sidebar-8',
            'description'   => esc_html__( 'Add widgets here.', 'bosun' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h2 class="contact-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Contact page info', 'bosun' ),
            'id'            => 'sidebar-9',
            'description'   => esc_html__( 'Add widgets here.', 'bosun' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'bosun_widgets_init' );