<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title><?php bloginfo('title'); ?></title>
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" /> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php wp_head();?>
        <style>html {margin-top : 0px !important;</style>
    </head>

    <body>

        <div id="mainContainer">

            <div id="header">

                <div id="topHeader">
                    <nav>
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'social_menu', 
                            ) ); 
                        ?>
                    </nav>

                </div>

                <div id="bottomHeader">
                    <div id="bottomUp">
                        <div id="logo">
                        <?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            ?>
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
                            <!-- <h1><a href="#"><?php bloginfo('name'); ?></a></h1>
                            <p><?php bloginfo('description'); ?></p> -->

                        </div>

                        <div id="mainBanner">
                        <?php

                            if ( is_active_sidebar( 'header-widget' ) ) : ?>
                                <div id="header-widget-area" class="hw-widget widget-area" role="complementary">
                                <?php dynamic_sidebar( 'header-widget' ); ?>
                                </div>
                                
                            <?php endif; ?>

                            <!-- <img src="img/banner728x90.jpg" alt=""> -->
                        </div>

                        <nav id="mainMenuMobile">
                                <div></div>
                                <div></div>
                                <div></div>                                
                        </nav>
                    </div>

                    <div id="bottomDown">
                        <nav id="mainMenu">
                        <?php wp_nav_menu(); ?>

                            <!-- <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="category.html">News</a></li>
                                <li><a href="category.html">Bussines</a></li>
                                <li><a href="category.html">Opinion</a></li>
                                <li><a href="category.html">Sport</a></li>
                                <li><a href="category.html">Showbizz</a></li>
                            </ul> -->
                        </nav>
                    </div>


                </div>

            </div>


