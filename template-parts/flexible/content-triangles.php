<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 2/23/2017
 * Time: 10:13 AM
 */

$background_image = get_sub_field('background_image');
$link = get_sub_field('link');
$link_text = get_sub_field('link_text');


if (have_rows('content')): ?>

    <div
        class="triangles-bg-wrapper" <?php echo $background_image ? "style='background-image:url($background_image);'" : ""; ?>>
        <div class="container">
            <div class="triangles-wrapper">

                <?php while (have_rows('content')) : the_row();

                    $triangle_image = get_sub_field('triangle_image');
                    $header = get_sub_field('header');
                    $subheader = get_sub_field('subheader');
                    $icon = get_sub_field('icon'); ?>

                    <div
                        class="triangle" <?php echo $triangle_image ? "style='background-image:url($triangle_image);'" : ""; ?>>
                        <div class="triangle-content">
                            <span id="tri-header"><?= $header ? '<h3>' . $header . '</h3>' : ""; ?></span>
                            <span id="tri-subheader"><?= $subheader ? $subheader : ""; ?></span>
                        </div>
                        <span id="icon"><?= $icon ? '<img src="' . $icon . '">' : ""; ?></span>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="tri-link-wrapper">
                <span id="tri-link"><a href="<?= $link ?>"><?= $link_text ? "$link_text" : ""; ?><img src="/wp-content/uploads/2017/02/white-tri-right.png"></a></span>
            </div>
        </div>
    </div>
<?php endif; ?>