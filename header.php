<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Firetoss_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <?php $code1 = get_field('analytics_code_head', 'option');
    $phone = get_field('phone', 'option');
    $phone_no_punctuation = get_field('phone_no_punctuation', 'option');
    $sign_in = get_field('sign_in', 'option');
    $sign_in_link = get_field('sign_in_link', 'option');
    echo $code1 ? "$code1" : ""; ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php $code2 = get_field('analytics_code_body', 'option');
echo $code2 ? "$code2" : ""; ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'firetoss_seed'); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="banner-wrapper">
            <div class="container">
                <div class="banner">
                    <div class="banner-left">
                    <?php dynamic_sidebar("region") ?>
                    </div>
                    <div class="banner-right">
                        <i class="fa fa-phone"></i>
                        <span id="phone"><a href="tel:<?= $phone_no_punctuation ? $phone_no_punctuation : ""; ?>">
                        <?= $phone ? $phone : ""; ?>
                    </a></span>
                        <span id="sign-in"><a href="><?= $sign_in_link ? $sign_in_link : ""; ?>">
                        <?= $sign_in ? $sign_in : ""; ?>
                    </a></span>
                        <span class="dots"><i class="fa fa-th" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="/wp-content/uploads/2017/02/Zyto_Logo-e1487719800646.png"
                         alt="<?php bloginfo('name'); ?>">
                </a>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'walker' => new Custom_Walker_Nav_Menu())); ?>
                <!--                --><?php //wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')) ?>
                <div class="search-trigger" ><i class="fa fa-search" aria-hidden="true"></i><?php get_search_form(); ?></div>
                <?php wp_nav_menu(array('theme_location' => 'dashboard', 'menu_id' => 'dashboard')) ?>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->


    <?php /* if (is_tribe_calendar()) { ?>   
        <div id="hero-header">
            <?php get_template_part('template-parts/hero', 'header'); ?>
        </div>
    <?php } */ ?>

    <?php if (is_home()) { ?>
        <div class="container">
            <div class="blog-top">
                <p>Stay connected to the ZYTO community with the latest biocommunication insights and stories...</p>
            </div>
        </div>
    <?php } ?>
    <div id="content" class="site-content">