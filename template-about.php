<?php
    /**
     * Template Name: About
     *
     * This is the most generic template file in a WordPress theme
     * and one of the two required files for a theme (the other being style.css).
     * It is used to display a page when nothing more specific matches a query.
     * E.g., it puts together the home page when no home.php file exists.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Bosun
     */

    get_header();
?>

 <main>

        <!-- slider Area Start-->
        <?php get_template_part( 'template-parts/content', 'breadcumb' );?>
         <!-- slider Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part( 'template-parts/content', 'trusted' );?>
        <!-- We Trusted End-->

        <!-- Testimonial Start -->
        <?php get_template_part( 'template-parts/content', 'testimonial' );?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part( 'template-parts/content', 'blog' );?>
        <!-- Recent Area End-->

    </main>

<?php
get_footer();