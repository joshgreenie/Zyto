<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 6/1/2017
 * Time: 3:59 PM
 * Template Name: Shopify Products
 */


get_header();
?>
    <div class="product-wrapper">
        <div class="container">
            <div class="product-content">
                <div class="product-list">

                    <?php
                    if (have_posts()) : ?>

                    <?php
                    /* Start the Loop */
                    while (have_posts()) :
                    the_post();


                    $button_text = get_field('button_text');
                    $button_link = get_field('button_link'); ?>
                    <div class="product">
                        <a href="<?= the_permalink() ?>">
                            <h1><?= the_title() ?></h1>
                        </a>
                        <img src="<?php the_post_thumbnail_url() ?>">
                    </div>


                </div>
                <?php
                endwhile;

                wp_pagenavi();

                else :

                    get_template_part('template-parts/content', 'none');

                endif;


                ?>
            </div>
        </div>
    </div>
    </div>

<?php
get_footer();
