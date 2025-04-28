<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>

        <div class="container">

            <div class="header-inner">
                <div class="header-logo">
                <?php
                            if (function_exists('the_custom_logo') && has_custom_logo()) {
                                the_custom_logo();
                            } else {
                                echo '<a href="' . home_url('/') . '">' . get_bloginfo('name') . '</a>';
                            }
                        ?>
                </div>
                <div class="header-navbar">
                    <div class="navbar-list">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'desktop-menu',
                        'menu_id'        => 'desktop-menu',
                        'menu_class'     => 'menu',
                        'container'      => 'nav',
                        'container_class' => 'dropdown-menu-container',
                    ) );
                    ?>
                        <!-- <a href="">Home</a>
                        <a href="">Courses <img src="./assets/images/down-arrow.svg" class="down-arrow" alt=""
                                srcset=""></a>
                        <a href="">About Us</a>
                        <a href="">Contact Us</a> -->
                    </div>
                    <div class="register-btn">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu-icon.svg" class="menu-icon" alt="">
                        <a class="login-btn" href="/dashboard">Log In</a>
                        <div class="hamburger-menu">
                            <div class="inner-menu-bar">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-menu.svg" class="mobile-logo-menu" alt="">
                                <div class="lower-menu-bar">
                                    <ul>
                                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'mobile-menu',
                        'menu_id'        => 'mobile-menu',
                        'menu_class'     => 'menu',
                        'container'      => 'nav',
                        'container_class' => 'dropdown-menu-container',
                    ) );
                    ?>
                                    </ul>
                                    <div class="log-btn">
                                        <a class="login-menu-btn" href="">Log In</a>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>