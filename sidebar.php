<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bosun
 */

 //SEARCH
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="single_sidebar_widget search_widget">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside> 

<?php
//Category
if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="secondary" class="single_sidebar_widget post_category_widget">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside> 


<?php
//Recent Post
if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<aside id="secondary" class="single_sidebar_widget popular_post_widget">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</aside> 

<?php
//Tag Clouds
if ( ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
}
?>

<aside id="secondary" class="single_sidebar_widget tag_cloud_widget">
	<?php dynamic_sidebar( 'sidebar-4' ); ?>
</aside> 


<?php
//Instagram Feeds
if ( ! is_active_sidebar( 'sidebar-5' ) ) {
	return;
}
?>

<aside id="secondary" class="single_sidebar_widget instagram_feeds">
	<?php dynamic_sidebar( 'sidebar-5' ); ?>
</aside> 


<?php
//Newsletter
if ( ! is_active_sidebar( 'sidebar-6' ) ) {
	return;
}
?>

<aside id="secondary" class="single_sidebar_widget newsletter_widget">
	<?php dynamic_sidebar( 'sidebar-6' ); ?>
</aside> 

