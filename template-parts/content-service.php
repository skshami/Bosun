 <?php
/**
 * Template part for displaying results in Service Area
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bosun
 */

?>
 <!-- services Area Start-->
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                         <h2><?php _e( 'Our Services', 'bosun' );?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                      $args = array(
                          'post_type'      => 'service',
                          'posts_per_page' => -1,
                      );
                      $query = new WP_Query( $args );

                      while ( $query->have_posts() ) {
                          $query->the_post();
                      ?>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                 
                                <?php the_post_thumbnail( 'service-thumb');?>
                                
                            </div>
                            <div class="services-caption">
                                <h4><?php the_title();?></h4>
                                <?php the_excerpt();?>
                                
                            </div>
                        </div>
                    </div>
                    <?php
                        }

                        wp_reset_postdata();
                     ?>

                </div>
            </div>
        </div>
        <!-- services Area End-->