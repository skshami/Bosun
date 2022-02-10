 <?php
/**
 * The template for displaying all single cases posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bosun
 */

get_header();
?>
 
 
 <main>

    <!-- slider Area Start-->
	<?php get_template_part( 'template-parts/content', 'breadcumb' );?>
	<!-- slider Area End-->

        <!-- Services Details Start -->
        <div class="services-details section-padding2">

            <div class="container">
                <div class="row">
                    <div class="offset-xl-12">
                        <div class="s-detailsImg">
                            <img src="<?php the_post_thumbnail_url( 'post-thumbnails' );?>" alt="<?php the_title();?>">
                        </div>
                    </div>
                    <div class="offset-xl-12">
                        <div class="s-details-caption">
                            <h2><?php the_title();?></h2>
                            <?php the_content();?>
                            <!-- btn -->
                            <a href="<?php the_field('single_case_contact_button_link');?>" class="btn red-btn"><?php the_field( 'single_case_contact_button_text' ); ?><i class="ti-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Services Details End -->
    </main>

    <?php get_footer( );?>