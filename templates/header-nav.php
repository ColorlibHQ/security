<header id="header">
<div class="container header-top">
    <div class="row">
        <?php 
        // Social Media
        $offset = ' offset-md-6';
        if( security_opt( 'security-headersocial-toggle-settings' ) ) {
            $offset = '';

            echo '<div class="col-6 top-head-left">';
                if( has_nav_menu('social-menu') ) {
                    $args = array(
                        'theme_location' => 'social-menu',
                        'container'      => '',
                        'menu_class'     => '',
                        'depth'          => 1,
                        'fallback_cb'    => 'security_social_navwalker::fallback',
                        'walker'         => new security_social_navwalker(),
                    );  
                    wp_nav_menu( $args );
                }
            echo '</div>';
        }

        ?>
        <div class="col-6<?php echo esc_attr( $offset ); ?> top-head-right">
            <ul>
                <?php
                // Phone number
                if( security_opt( 'security_headtop_number' ) ) {

                    $number = security_opt( 'security_headtop_number' );

                    $telNumber = str_replace(' ', '', $number );

                    echo '<li><a href="tel:' . esc_attr( $telNumber ) . '"><span>' . esc_html( $number ) . '</span></a></li>';
                }
                // Button #1
                if( security_opt( 'security_headtop_btn1_text' ) && security_opt( 'security_headtop_btn1_url' ) ) {
                    echo '<li><a href="'.esc_url( security_opt('security_headtop_btn1_url') ).'">'.esc_html( security_opt('security_headtop_btn1_text') ).'</a></li>';
                }
                // Button #2
                if( security_opt( 'security_headtop_btn2_text' ) && security_opt( 'security_headtop_btn2_url' ) ) {
                    echo '<li><a href="'.esc_url( security_opt( 'security_headtop_btn2_url' ) ).'">'.esc_html( security_opt( 'security_headtop_btn2_text' ) ).'</a></li>';
                }
                ?>
            </ul>
        </div>                 
    </div>
</div>
<hr>
<div class="container">
    <div class="row align-items-center justify-content-between d-flex">
        <?php 
        // Header Logo
        echo security_theme_logo();
        ?>
        <nav id="nav-menu-container">
        <?php 
        //
        if( has_nav_menu( 'primary-menu' ) ) {
            $args = array(
                'theme_location' => 'primary-menu',
                'container'      => '',
                'depth'          => 2,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => 'security_bootstrap_navwalker::fallback',
                'walker'         => new security_bootstrap_navwalker(),
            );  
            wp_nav_menu( $args );
        }
        ?>
        </nav><!-- #nav-menu-container -->                    
    </div>
</div>

</header><!-- #header -->