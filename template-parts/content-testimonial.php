    <?php
    /**
     * Template part for displaying results in Testimonial
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Bosun
     */

?>
    <!-- Testimonial Start -->
        <div class="testimonial-area fix">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">                           
                            <!-- Single Testimonial -->
                            <?php
                                $args = array(
                                    'post_type'      => 'testimonial',
                                    'posts_per_page' => -1,
                                );
                                $query = new WP_Query( $args );

                                while ( $query->have_posts() ) {
                                    $query->the_post();
                            ?>
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <?php the_post_thumbnail( 'testimonial-logo',array('class' => 'ani-btn') );?>
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <?php the_excerpt( );?> 
                                    <!-- Rattion -->
                                    <?php
                                     $five_star = get_field( 'five_star' );
                                     $four_star = get_field( 'four_star' );
                                     $three_star = get_field( 'three_star' );
                                     $two_star = get_field( 'two_star' );
                                    
                                     if($five_star){
                                    ?>
                                     <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <?php
                                     }
                                   
                                     if($four_star){
                                    ?>
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class='fas fa-star' style='color:#e4e7e5'></i>
                                    </div>
                                    <?php
                                     }
                                     
                                     if($three_star){
                                    ?>
                                     <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class='fas fa-star' style='color:#e4e7e5'></i>
                                        <i class='fas fa-star' style='color:#e4e7e5'></i>
                                    </div>
                                    <?php
                                     }
                                   
                                     if($two_star){
                                    ?>
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class='fas fa-star' style='color:#e4e7e5'></i>
                                        <i class='fas fa-star' style='color:#e4e7e5'></i>
                                        <i class='fas fa-star' style='color:#e4e7e5'></i>
                                    </div>
                                    <?php
                                     }
                                    ?>
                                   
                                    <div class="rattiong-caption">
                                        <span><?php the_title( );?><span> - <?php the_field( 'company_name' );?></span> </span>
                                    </div>
                                </div>
                            </div>
                             <?php }
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->