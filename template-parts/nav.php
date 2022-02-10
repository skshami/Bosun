<!-- Main-menu -->
<div class="main-menu f-right d-none d-lg-block">
    <nav id="site-navigation" class="main-navigation">

        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'navigation',
                    'container'      => 'false',
                )
            );
        ?>
    </nav><!-- #site-navigation -->
</div>