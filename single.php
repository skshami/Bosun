<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bosun
 */

get_header();
?>

	<!-- slider Area Start-->
	<?php get_template_part( 'template-parts/content', 'breadcumb' );?>
	<!-- slider Area End-->
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php the_post_thumbnail_url( 'post-thumbnails' );?>" alt="<?php the_title();?>">
                  </div>
                  <div class="blog_details">
                     <h2><?php the_title( );?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="fa fa-user" style="color: #999999" ></i>
				
								<?php
									$categories = get_the_category();
									$separetor = ', ';
									$result = '';
								
									if($categories):
										foreach ( $categories as $category ) {

											$result .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separetor;
										}
										echo trim($result, $separetor);
									endif;
								?>
						</li>
						<li>
							<?php

								$comments = get_comments_number( );
									if($comments):
							?>
										<a href="<?php echo get_comments_link( );?>"><i class="fa fa-comments"></i> <?php echo $comments;?> <?php _e( 'Comments', 'bosun' );?> </a>
							<?php endif; ?>
						</li>
                     </ul>
                     <?php the_content();?>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <?php 
                              $buson_prev_post = get_previous_post( );

                              if($buson_prev_post):
                           ?> 
                           <div class="thumb">
                              <a href="<?php echo get_permalink( $buson_prev_post );?>">
                                 <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($buson_prev_post, 'prev-next-post-thumbnails')?>" alt="<?php echo get_the_title( $buson_prev_post )?>">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="<?php echo get_permalink( $buson_prev_post ); ?>">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p><?php _e('Prev Post','bosun');?></p>
                              <a href="<?php echo get_permalink( $buson_prev_post ); ?>">
                                 <h4><?php echo get_the_title( $buson_prev_post )?></h4>
                              </a>
                           </div>
                           <?php endif; ?>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <?php 
                              $buson_next_post = get_next_post( );

                              if($buson_next_post):
                           ?> 
                           <div class="detials">
                              <p><?php _e('Next Post','bosun');?></p>
                              <a href="<?php echo get_permalink( $buson_next_post );?>">
                                 <h4><?php echo get_the_title( $buson_next_post );?></h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="<?php echo get_permalink( $buson_next_post ); ?>">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="<?php echo get_permalink( $buson_next_post ); ?>">
                                 <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url( $buson_next_post, 'prev-next-post-thumbnails' )?>" alt="<?php echo get_the_title( $buson_next_post ); ?>">
                              </a>
                           </div>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <?php
                     global $post;
                     $author_id = $post->post_author;
                  ?>
                  <div class="media align-items-center">
                     <?php echo get_avatar( get_the_author_meta( 'ID' ) );?>
                     <div class="media-body">


                        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                          <h4><?php echo get_the_author_meta( 'display_name', $author_id ); ?></h4>
                        </a>
                        <p><?php the_author_meta( "description", $author_id);?></p>
                     </div>
                  </div>
               </div>
               <?php
                  if(!post_password_required( )){
                     comments_template();
                  }
               ?>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <?php get_sidebar();?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
<?php
get_footer();
