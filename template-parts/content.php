<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Firetoss_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="blog-post-outer">

        <div class="blog-meta-wrapper"> <?php //Wraps Blog datetime and categories ?>
            <header class="entry-header">
                <?php


                if ('post' === get_post_type()) : ?>
                    <div class="entry-meta">
                        <?php firetoss_seed_posted_on(); ?>
                    </div><!-- .entry-meta -->
                    <?php
                endif; ?>
            </header><!-- .entry-header -->

            <footer class="entry-footer">
                <?php firetoss_seed_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>

        <div class="entry-content">
            <?php
            //			the_content( sprintf(
            //				/* translators: %s: Name of current post. */
            //				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'firetoss_seed' ), array( 'span' => array( 'class' => array() ) ) ),
            //				the_title( '<span class="screen-reader-text">"', '"</span>', false )
            //			) );
            ?>

            <div class="blog-post-wrapper">

            <?php if (is_single()) :
                the_title('<h3 class="entry-title">', '</h3>');
                posted_by();

                endif;
                $thumb = get_the_post_thumbnail_url();
                if($thumb):?>
                <span id="blog-post-image">
                     <img src="<?php the_post_thumbnail_url(); ?>">
                </span>
<?php
                endif;?>
            <div class="blog-post-content-wrapper">

                    <?php
                    if (! is_single()) :
                        the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
                    posted_by();
                    endif ?>

                    <span id="blog-post-content">

                        <?php if (is_single()) {
                            the_content();
                        } else {
                            the_excerpt();
                        }
                        ?>

		</span>
                </div>
            </div>


            <?php

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'firetoss_seed'),
                'after' => '</div>',
            ));
            ?>

        </div><!-- .entry-content -->
    </div>
</article><!-- #post-## -->
