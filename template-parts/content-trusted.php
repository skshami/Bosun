<?php
    /**
     * Template part for displaying results in We Trusted Area
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Bosun
     */

?>
        
        <!-- We Trusted Start-->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <?php
                    $about_info_title = get_field( 'about_info_title', 'option' );
                    $about_info_description = get_field( 'about_info_description', 'option' );
                    $about_info_thumbnail = get_field( 'about_info_thumbnail', 'option' );
                    $about_info_button_text = get_field( 'about_info_button_text', 'option' );
                    $about_info_button_url = get_field( 'about_info_button_url', 'option' );

                    if($about_info_thumbnail) { 
                ?>
                    <div class="row d-flex align-items-end">
                        <div class="col-xl-7 col-lg-7">
                            <div class="trusted-img"> 
                                    <img src="<?php echo esc_url( $about_info_thumbnail);?>" alt=""> 
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="trusted-caption">
                                <?php if ( $about_info_title ) { ?>
                                    <h2><?php echo esc_html( $about_info_title ); ?></h2>
                                    <p><?php echo esc_html( $about_info_description ); ?></p>
                                    <a href="<?php echo esc_url( $about_info_button_url ); ?>" class="btn trusted-btn"><?php echo esc_html( $about_info_button_text ); ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?> 
            </div>

        </div>
        <!-- We Trusted End-->