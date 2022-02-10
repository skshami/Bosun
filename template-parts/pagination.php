<?php
/**
 * Template part for displaying posts pagination
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bosun
 */

?>

<?php if ('bosun_pagenav') {bosun_pagenav(); } else{ ?>
    <?php next_posts_link(); ?>
    <?php previous_posts_link(); ?>
<?php } ?>
           
 

