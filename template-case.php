<?php
/**
 * Template Name: Cases
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

        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <?php
                      $args = array(
                          'post_type'      => 'case',
                          'posts_per_page' => -1,
                      );
                      $query = new WP_Query( $args );

                      while ( $query->have_posts() ) {
                          $query->the_post();
                      ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-cases-img  size mb-30">
                            <?php the_post_thumbnail('case-thumb');?>
                            <!-- img hover caption -->
                           <div class="single-cases-cap single-cases-cap2">
                               <h4><a href="<?php the_permalink( );?>"><?php the_title();?></a></h4>
                                <?php the_excerpt(  );?> 
                           </div>
                        </div>
                    </div>
                        <?php }
                        wp_reset_postdata();
                        ?> 
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

    </main>
<?php
get_footer();
?>
