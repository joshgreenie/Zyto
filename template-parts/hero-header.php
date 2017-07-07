<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 4/19/2017
 * Time: 12:37 PM
 */

/***********************************************************
 * USE content-hero-header.php for hero header
 * Use this file for Blog and other posts page hero headers
 ***********************************************************/


$page_id = false;


if (is_page(181)) {
    $page_id = 181;
}
//elseif (is_tribe_calendar()) {
//    $page_id = 'option';
//}
//Add else if for more post pages


$background_image = get_field('background_image', $page_id);
$title = get_field('title', $page_id);
$subtitle = get_field('subtitle', $page_id);
$second_title = get_field('second_title', $page_id);
$second_title_2 = get_field('second_title_2', $page_id);
$second_subtitle = get_field('second_subtitle', $page_id);
$image = get_field('image', $page_id);
$hero_overlay_image = get_field('hero_overlay_image', $page_id);

?>
<div class="hero-header <?= $subtitle ? "" : "small" ?>">
    <div id="imageTitle" <?php echo $background_image ? "style='background-image:url($background_image);'" : ""; ?>>
        <div class="container">
            <div id="postTitle" style="background-image:url('/wp-content/uploads/2017/02/Asset-1.png')">
                <div id="postTitlewrap">
                    <?= $title ? "<h2>$title</h2>" : ""; ?>
                    <span id="hh-sub1">
                    <?= $subtitle ? "<span id='hh-sub1'>$subtitle</span>" : ""; ?>
                    </span>
                </div>
            </div>
            <?= $hero_overlay_image ?
                "<div class='hero-overlay'>
                    <div class='overlay-image-wrapper'>  
                <img src='$hero_overlay_image' alt='missing'>
                </div>
            </div>" : "" ?>
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
            <?php if ($page_id === 181) { ?>
                <div class="vid-image"><a href="#"><span class="fa fa-play-circle-o fa-4x"></span></a></div>
       <?php   } ?>
            <?php if ($image) { ?>
                <div class="scanner" style="background-image:url('<?= $image ?>')"></div>
            <?php } ?>
            <div class="hero-bottom-content" <?= $image ? "" : "style='width:65%; min-height: 50px;'" ?>>

                <?= $second_subtitle ? "<span id='hh-sub2'>$second_subtitle</span>" : ""; ?>
            </div>
        </div>
    </div>
</div>
