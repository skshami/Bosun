<?php
/**
 * Bosun  shortcode functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bosun
 */

 

 function bosun_searchform( $form ) {

    $form = get_search_form();

    return $form;
}

add_shortcode( 'bosun_search_form', 'bosun_searchform' );