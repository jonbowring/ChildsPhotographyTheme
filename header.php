<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
        <script>
            jQuery(document).ready(function( $ ) {
                
                /*
                ===============================
                Listeners
                ===============================
                */

                $("nav h2").click(function() {
                    $('.menu-popout').toggle('slide','left');
                });
                
                /*
                ===============================
                Document ready
                ===============================
                */

            });
        </script>
    </head>
    <body>
    <div class="content">
        <header>
            <?php
                // Print out the site title
                echo '<h1 class="site-title">' . get_bloginfo( 'name' ) . '</h1>';
            ?>
            <div class="header-right">
                <span>Social</span>
                <span>Contact</span>
            </div>
            
        </header>
        <nav>
            <h2>Menu</h2>
            <div class="menu-popout">
                <?php wp_nav_menu(); ?>
            </div>
        </nav>