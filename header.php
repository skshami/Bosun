<?php
    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package Bosun
     */

?>
<!doctype html>
<html class="no-js"                    <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="manifest" href="site.webmanifest">



	<?php wp_head();?>
</head>

<body      <?php body_class();?>>
<?php wp_body_open();?>

   <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo get_template_directory_uri( );?> /assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

<div id="page" class="site">
	<header id="masthead" class="site-header">

        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
										<?php
									        $header_address = get_field('header_address','option');
									        $header_email = get_field('header_email','option');
										?>
										
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo esc_html($header_address);?></li>
                                        <li><a href="mailto:<?php echo $header_email;?>"><i class="fas fa-envelope"></i><?php echo esc_html( $header_email ); ?></a></li>
										 
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">

                                        <?php
                                            $header_socials = get_field('header_socials', 'option');
                                            foreach($header_socials as $header_social) {
                                        ?>

                                        <li><a href="<?php echo $header_social['social_url'];?>"><i class="<?php echo $header_social['social_icon']['value'];?>"></i></a></li>
                                        
                                        <?php
                                            }
                                        ?> 
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
									<!-- <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> -->
										<?php
                                            the_custom_logo();

                                            if ( is_front_page() && is_home() ):
                                        ?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' );?></a></h1>
											<?php
                                                else:
                                            ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' );?></a></p>
											<?php
                                                endif;
                                                $bosun_description = get_bloginfo( 'description', 'display' );

                                                if ( $bosun_description || is_customize_preview() ):
                                            ?>
											<p class="site-description"><?php echo $bosun_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped    ?></p>
										<?php endif;?>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
								<?php get_template_part( "template-parts/nav" );?>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
