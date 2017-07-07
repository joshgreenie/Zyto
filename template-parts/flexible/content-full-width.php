<?php //Full Width Background Image

$header = get_sub_field('full_width_header');
$header_color = get_sub_field('header_color');
$sub_header = get_sub_field('full_width_sub_header');
$wysiwyg = get_sub_field('full_width_wysiwyg');
$content_position = get_sub_field('full_width_content_position');
$bullets = get_sub_field('bullets');
$bullet_text = get_sub_field('bullet_text');
$bullet_link = get_sub_field('bullet_link');
$image = get_sub_field('image');
$cta = get_sub_field('cta');
$cta_link = get_sub_field('cta_link');
$cta_link_text = get_sub_field('cta_link_text');
$cta_link_text_small = get_sub_field('cta_link_text_small');
$large_cta_link = get_sub_field('large_cta_link');
$large_cta_link_text = get_sub_field('large_cta_link_text');
$background_color = get_sub_field('background_color');
$header_underline = get_sub_field('header_underline');


?>


    <div
        class="full-width-wrapper <?= $content_position ?>" <?= $background_color ? "style='background-color: #e7e8ea'" : "" ?>>
        <div class="container">
            <div
                class="full-width-content content-position-<?= $content_position ?>" <?= $image ? "" : "style='width:100%'"; ?>>
                <h2 class="full-width-header <?= $header_underline ? "underline" : ""; ?><?= $header_color ?>"><?= $header ?></h2>
                <?= $sub_header ? "<h4 class='full-width-subheader'>$sub_header</h4>" : "" ?>
                <?= $wysiwyg ? '<div class="full-width-wysiwyg">' . $wysiwyg . '</div>' : ""; ?>
                <?php if ($bullets): ?>
                    <div class="bullets-wrapper">
                        <ul id="bullets">
                            <?php if (have_rows('bullets_repeater')):
                                // loop through the rows of data
                                while (have_rows('bullets_repeater')) : the_row();
                                    $bullet_text = get_sub_field('bullet_text'); ?>
                                    <li><a href="<?= $bullet_link ?>"><?= $bullet_text ?></a></li>

                                    <?php
                                endwhile;
                            endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="cta-wrapper">
                    <?php if ($cta) { ?>
                        <div class="large-cta">
                            <a href="<?= $large_cta_link ?>">
                                <?= $large_cta_link_text ? "<h5>$large_cta_link_text</h5><span class='blue-arrow'><img src='/wp-content/uploads/2017/03/blue-arrow-lg.png'></span>" : "" ?>
                            </a>
                        </div>
                        <div class="small-cta">
                            <?= $cta_link ? "<a href='$cta_link'>" : "" ?>
                            <?= $cta_link_text ? "<h4>$cta_link_text</h4>" : "" ?>
                            <?= $cta_link_text_small ? "<span class='small-cta-small'><h5>$cta_link_text_small</h5></span>" : "" ?>
                            <?= $cta_link ? "</a>" : "" ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div
                class="content-opposite-<?= $content_position ?> fw-opposite" <?php echo $image ? "style='background-image:url($image);'" : ""; ?>>
            </div>
        </div>
    </div>

