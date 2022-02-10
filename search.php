<?php
    /**
     * Search template  for this theme
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

   <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/breadcumb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                           <h2 class="title"><?php printf( __( 'Search Results for: %s', 'Bosun'), get_search_query()); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php

                            if ( have_posts() ):

                                while ( have_posts() ):
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
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
<?php get_footer();?>