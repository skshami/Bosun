<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package Bosun
     */

?>

	<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?php echo get_template_directory_uri() ?>. '/assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php the_field("title_info", "option");?></p>
                               </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <?php $footer = get_field("social_links", "option"); ?>
                                <?php foreach( $footer as $foo):?>
                                <a href="<?php echo $foo['social_link'] ?>"><i class="<?php echo $foo['social_icon']?>"></i></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4><?php _e( "Quick access", "bosun" );?></h4>
                               <?php
                                     wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer-menu',
                                        'menu_id'        => 'navigation',
                                        'container'      => 'false',
                                    )
                                );
                               ?>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4><?php _e( 'Services', 'bosun' );?></h4>

                               <ul>
                                   <?php
                                        $args = array(
                                            'post_type'      => 'service',
                                            'posts_per_page' => 5,
                                        );
                                        $query = new WP_Query( $args );

                                        while ( $query->have_posts() ) {
                                            $query->the_post();
                                    ?>
                                   <li><a href="<?php the_permalink( );?>"><?php the_title();?></a></li>
                                   <?php
                                        }

                                        wp_reset_postdata();
                                    ?>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4> <?php _e("Get in Touch", "bosun");?> </h4>
                               <ul>
                                        <?php
                                        $phone_number = get_field("phone_number","option");
                                        $gmail = get_field("gmail","option");
                                        $office_adress = get_field("office_adress","option");
                                        ?>

                                <li><a href=""><?php echo $phone_number ;?></a></li>
                                <li><a href="mailto:<?php echo $gmail;?>"><?php echo $gmail; ?></a></li>
                                <li><a href=""><?php echo $office_adress; ?></a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <?php 
                                $copyright_text = get_field("copyright_text", "option" );
                                echo $copyright_text; ?>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
</div><!-- #page -->

    <?php wp_footer();?>
</body>
</html>
