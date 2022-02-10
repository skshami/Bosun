  <?php
/**
 * Template Name: Contact
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
  <!-- slider Area Start-->
        <?php get_template_part( 'template-parts/content', 'breadcumb' );?>
         <!-- slider Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    
                    <?php 
                    if(is_active_sidebar( 'sidebar-7' )){
                        dynamic_sidebar( 'sidebar-7' );
                    }
                    ?>
    
                </div>
    
    
                <div class="row">
                    <!-- <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div> -->
                    <div class="col-lg-8">
                        <?php

                            if ( is_active_sidebar( 'sidebar-8' ) ) {
                                dynamic_sidebar( 'sidebar-8' );
                            }

                        ?>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <!-- <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div> -->
                        <?php
                            if ( is_active_sidebar( 'sidebar-9' ) ) {
                                dynamic_sidebar( 'sidebar-9' );
                            }
                        ?>

                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
    <!-- Request Back Start -->
    <div class="request-back-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                            <?php
                                $contact_info_titles = get_field( 'contact_info_titles', 'option' );
                                $contact_info_descriptions = get_field( 'contact_info_descriptions', 'option' );
                                $contact_info_form_button_text = get_field( 'contact_info_form_button_text', 'option' );
                                $service_name = get_field( 'service_name', 'option' );
                            ?>
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="request-content">
                        <h3><?php echo esc_html( $contact_info_titles ); ?></h3>
                        <p><?php echo esc_html( $contact_info_descriptions ); ?></p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <!-- Contact form Start -->
                    <div class="form-wrapper">
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box  mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box mb-30">
                                        <input type="text" name="email" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 mb-30">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value=""> Service</option>
                                            <option value="">Service 1</option>
                                            <option value="">Service 2</option>
                                            <option value="">Service 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <button type="submit" class="send-btn"><?php echo esc_html( $contact_info_form_button_text ); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>     <!-- Contact form End -->
            </div>
        </div>
    </div>
    <!-- Request Back End -->
    <?php
    get_footer( );
    ?>