<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 4/21/2017
 * Time: 10:49 AM
 */


get_header();




?>
    <div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="site-main" role="main">


                <?php
                if ( have_posts() ) :


                    if ( is_home() && ! is_front_page() ) : ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>
                        <?php

                    endif;

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();



                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;

                    wp_pagenavi();
                 
                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

            </main><!-- #main -->

            <?php 	get_sidebar();  ?>
        </div>
    </div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
