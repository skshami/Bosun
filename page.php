<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bosun
 */

get_header();
?>

<!-- slider Area Start-->
        <?php get_template_part( 'template-parts/content', 'breadcumb' );?>
         <!-- slider Area End-->

<section class="custom-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4><?php the_title();?></h4>
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
