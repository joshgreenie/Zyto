<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Firetoss_Theme
 * Template Name: Sidebar Page
 */

get_header(); ?>

<?php get_template_part('template-parts/hero', 'header'); ?>


    <div id="flex" class="content-area with-sidebar">
        <div class="container">
            <div class="sidebar-page-wrapper">

                <!-- put the grid containers in your individual flex containers -->
                <?php
                while (have_posts()) : the_post();

                    //https://generatewp.com/wp_query/

                    get_template_part('template-parts/content', 'flex');

                endwhile; // End of the loop.
                ?>

            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>


<?php

get_footer();
