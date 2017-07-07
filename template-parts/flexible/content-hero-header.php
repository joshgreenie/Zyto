<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 8/8/2016
 * Time: 11:29 AM
 */


if (is_home()) {
    $page_id = 396;

//Add else if for more post pages

    $background_image = get_sub_field('background_image', $page_id);
    $title = get_sub_field('title', $page_id);
    $subtitle = get_sub_field('subtitle', $page_id);
    $second_title = get_sub_field('second_title', $page_id);
    $second_title_2 = get_sub_field('second_title_2', $page_id);
    $second_subtitle = get_sub_field('second_subtitle', $page_id);
    $scanner = get_sub_field('scanner', $page_id);
    $hero_overlay_image = get_sub_field('hero_overlay_image', $page_id);

}

$background_image = get_sub_field('background_image');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$second_title = get_sub_field('second_title');
$second_title_2 = get_sub_field('second_title_2');
$second_subtitle = get_sub_field('second_subtitle');
$image = get_sub_field('image');

?>
<div class="hero-header <?= $subtitle ? "" : "small" ?>">
    <div id="imageTitle" <?php echo $background_image ? "style='background-image:url($background_image);'" : ""; ?>>
        <div class="container">
            <div id="postTitle" style="background-image:url('/wp-content/uploads/2017/02/Asset-1.png')">
                <div id="postTitlewrap">

                    <?= $title ? "<h2>$title</h2>" : ""; ?>
                    <span id='hh-sub1'>
                        <?= $subtitle ? $subtitle : ""; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="hero-title">
            <?= $second_title ? "<div class='bottom-title'>$second_title</div>" : ""; ?>
            <?= $second_title_2 ? "<div class='bottom-title-2nd'>$second_title_2</div>" : ""; ?>
        </h1>
    </div>
    <div class="hero-bottom-wrapper">
        <div class="container">
            <?php if ($image) { ?>
                <div class="scanner" style="background-image:url('<?= $image ?>')"></div>
            <?php } ?>
            <div class="hero-bottom-content" <?= $image ? "" : "style='width:65%; min-height: 50px;'" ?>>
                <?= $second_subtitle ? "<span id='hh-sub2'>$second_subtitle</span>" : ""; ?>
            </div>
        </div>
    </div>
</div>