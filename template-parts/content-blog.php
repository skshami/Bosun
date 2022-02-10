<?php
    /**
     * Template part for displaying results in Blog Recent Area
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Bosun
     */

?>
        <!-- Recent Area Start -->
        <div class="recent-area section-paddingt">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2><?php _e( 'Our Recent News', 'bosun' );?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                      $args = array(
                          'post_type'      => 'post',
                          'posts_per_page' => 3,
                      );
                      $query = new WP_Query( $args );

                      while ( $query->have_posts() ) {
                          $query->the_post();
                      ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('recent-thumb'); ?></a>
                            </div>
                            <div class="recent-cap">
                                <span>
                                    <?php
                                        $categories = get_the_category();
                                        $separetor = ', ';
                                        $result = '';

                                        if ( $categories ):

                                            foreach ( $categories as $category ) {

                                                $result .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $separetor;
                                            }

                                            echo trim( $result, $separetor );
                                        endif;
                                        ?>
                                    </span>
                                <h4><a href="<?php the_permalink( );?>"><?php the_title( );?></a></h4>
                                <p><?php the_time( 'F j, Y' );?></p>
                            </div>
                        </div>
                    </div>
                    <?php }
                    wp_reset_postdata();
                     ?>
                </div>
            </div>
        </div>
        <!-- Recent Area End-->