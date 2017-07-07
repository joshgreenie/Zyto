<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Firetoss_Theme
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<?php if ((is_home()) || (is_page('jobs'))) { ?>
    <aside id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar('sidebar-1');
        ?>
    </aside> <!-- #secondary -->

<?php } ?>

<?php $page_array = array('balance', 'select', 'elite', 'evox', 'compass', 'remote', 'lifestyle-biosurvey', 'digestion-biosurvey') ?>

<?php if (is_page($page_array)) { ?>

    <?php $title = get_field('title');
    $product_image = get_field('product_image');
    $phone_int = get_field('phone_int', false, false);
    $phone_dom = get_field('phone_dom', false, false);
    $price = get_field('price', false, false);
    $monthly = get_field('monthly', false, false);
    $contact_text = get_field('contact_text');
    $cta_link = get_field('cta_link', false, false);
    $cta_link_text = get_field('cta_link_text');
    $cta_link_text_small = get_field('cta_link_text_small');
    $sub_menu_title = get_field('sub_menu_title');
    $disc = get_field('disc', false, false);

    //<i class='fa-dollar fa'></i>
    ?>

    <aside id="secondary" class="widget-area product-sidebar" role="complementary">
        <div class="product-sidebar-wrapper">
            <div class="product-header"><?= $title ? "<h3>$title</h3>" : "" ?></div>
            <div class="img-phone">
                <div class="product-image"><?= $product_image ? "<img src='$product_image'>" : "" ?></div>
                <div class="product-contact">
                    <?= $contact_text ? "<h4>$contact_text</h4>" : "" ?>
                    <h4><? echo do_shortcode($phone_int)  ?></h4>
                    <h4><? echo do_shortcode($phone_dom)  ?></h4>
                </div>
            </div>
            <div class="pricing">
                <span class='prod-price'><h2 class='price'><? echo do_shortcode($price) ?></h2></span>
                <h4 class='monthly'><? echo do_shortcode($monthly) ?></h4>
            </div>
            <div class="small-cta">
                <a href="<? echo do_shortcode($cta_link) ?>">
                <?= $cta_link_text ? "<h4>$cta_link_text</h4>" : "" ?>
                <?= $cta_link_text_small ? "<span class='small-cta-small'><h5>$cta_link_text_small</h5></span>" : "" ?>
                </a>
            </div>
    <?php if($disc):?><span class="disclaimer"><? echo do_shortcode($disc) ?></span><?php endif;?>


        </div>


        <?php if (have_rows('links_repeater')) : ?>
            <div class="sidebar-list-wrapper">
                <div class="sidebar-title">
                    <?= $sub_menu_title ? "<h2>$sub_menu_title</h2>" : "" ?>
                </div>
                <ul class="no-bullets">
                    <?php while (have_rows('links_repeater')) : the_row(); ?>
                        <?php $link_text = get_sub_field('link_text');
                        $link_url = get_sub_field('link_url'); ?>

                        <?= $link_text ? "<li><a href='$link_url'>$link_text</a></li>" : "Something's Wrong" ?>

                    <?php endwhile ?>
                </ul>
            </div>
        <?php endif ?>

    </aside> <!-- #secondary -->


<?php } ?>




