<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bosun
 */

get_header();
?>

	<!-- slider Area Start-->
	<div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/breadcumb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php the_archive_title( );?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!-- slider Area End-->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php 
                        if(have_posts()):
                            while(have_posts()):
                                the_post();
                                get_template_part( 'template-parts/content' );
                            endwhile;
                        endif;  
                        ?>
                        <?php get_template_part( 'template-parts/pagination' );?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <?php get_sidebar( );?> 
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
