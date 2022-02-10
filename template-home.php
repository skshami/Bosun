<?php
    /**
     * Template Name: Home Page
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

	<main id="primary" class="site-main">


            <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">

                  <?php
                      $args = array(
                          'post_type'      => 'slider',
                          'posts_per_page' => -1,
                      );
                      $query = new WP_Query( $args );

                      while ( $query->have_posts() ) {
                          $query->the_post();

                          $slider_subtitle = get_field( "slider_subtitle" );
                          $slider_button_text = get_field( "slider_button_text" );
                          $slider_button_url = get_field( "slider_button_url" );
                      ?>

                    <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url()?>;')">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 mx-auto">
                                    <div class="hero__caption">
                                        <?php

                                            if ( $slider_subtitle ) {?>
                                        <p><?php echo $slider_subtitle; ?></p>
                                         <?php }
                                             ?>

                                        <h1><?php the_title();?></h1>
                                        <!-- Hero-btn -->
                                        <?php
                                        if ( $slider_button_text ) {?>
                                        <div class="hero__btn">
                                            <a href="<?php echo $slider_button_url; ?>" class="btn hero-btn"><?php echo $slider_button_text; ?></a>
                                        </div>
                                         <?php }
                                             ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    }

                    wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part( 'template-parts/content', 'trusted' );?>
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <?php get_template_part( 'template-parts/content', 'service' );?>
        <!-- services Area End-->

        <!-- Request Back Start -->
        <?php
            $contact_info_title = get_field( 'contact_info_title', 'option' );
            $contact_info_description = get_field( 'contact_info_description', 'option' );
            $contact_info_button_text = get_field( 'contact_info_button_text', 'option' );
            $contact_info_button_url = get_field( 'contact_info_button_url', 'option' );

            if($contact_info_title){
        ?>
        <div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="request-content">
                            <h3><?php echo esc_html( $contact_info_title ); ?></h3>
                            <p><?php echo esc_html( $contact_info_description ); ?></p>
                            <a href="<?php echo esc_url( $contact_info_button_url ); ?>" class="btn trusted-btn"><?php echo esc_html( $contact_info_button_text ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Request Back End -->

        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <!-- slider Heading -->
                    <?php
                        $cases_info_title = get_field( 'cases_info_title', 'option' );
                        $cases_info_description = get_field( 'cases_info_description', 'option' );
                        $cases_info_button_text = get_field( 'cases_info_button_text', 'option' );
                        $cases_info_button_url = get_field( 'cases_info_button_url', 'option' );

                        if($cases_info_title){
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3><?php echo esc_html( $cases_info_title ); ?></h3>
                            <p><?php echo esc_html( $cases_info_description ); ?></p>
                            <a href="<?php echo esc_url( $cases_info_button_url ); ?>" class="border-btn border-btn2"><?php echo esc_html( $cases_info_button_text ); ?></a>
                        </div>
                    </div>
                    <?php } ?>

                    <!-- OwL -->
                    
                        <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                            <div class=" completed-active owl-carousel">
                                <?php
                                    $args = array(
                                        'post_type'      => 'case',
                                        'posts_per_page' => -1,
                                    );
                                    $query = new WP_Query( $args );

                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                ?>
                                    
                                        <div class="single-cases-img">
                                            <?php the_post_thumbnail('case-slider');?>
                                            <!-- img hover caption -->
                                            <div class="single-cases-cap">
                                                    <h4><a href="<?php the_permalink( );?>"><?php the_title();?></a></h4>
                                                    <?php the_content();?> 
                                                    <span><?php the_field( 'case_subject' );?></span>
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
        <!-- Completed Cases end -->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2><?php _e( 'Teams', 'bosun' );?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                      $args = array(
                          'post_type'      => 'team',
                          'posts_per_page' => -1,
                      );
                      $query = new WP_Query( $args );

                      while ( $query->have_posts() ) {
                          $query->the_post();
                      ?>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                   <?php the_post_thumbnail('team-member-photo');?>
                                </div>
                                <div class="profile-caption">
                                    <h4><?php the_title();?> <span><?php the_field( 'add_team_member_position' ); ?></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    wp_reset_postdata();
                     ?>
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- Testimonial Start -->
        <?php get_template_part( 'template-parts/content', 'testimonial' );?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part( 'template-parts/content', 'blog' );?>
        <!-- Recent Area End-->

	</main><!-- #main -->

<?php
    get_footer();
?>

