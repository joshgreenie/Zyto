<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 5/23/2017
 * Time: 2:25 PM
 */


$header_left = get_sub_field('header_left');
$image_left = get_sub_field('image_left');
$content_left = get_sub_field('content_left');

$header_right = get_sub_field('header_right');
$image_right = get_sub_field('image_right');
$content_right = get_sub_field('content_right');

$sub_content = get_sub_field('sub_content');
$grey_background = get_sub_field('grey_background');
?>

<div class="double-section-wrapper" <?= $grey_background ? "style='background-color: #e7e8ea'" : "" ?>>
    <div class="container">
        <div class="ds-images-wrapper">
            <div class="left-section ds-half" <?= $grey_background ? "" : "style='background-color: #e7e8ea'" ?>>
                <?= $header_left ? "<h2>$header_left</h2>" : "" ?>
                <?= $image_left ? "<div class='left-section-image ds-image' style=background-image:url($image_left)></div>" : "" ?>
                <?= $content_left ? $content_left : "" ?>
            </div>
            <div class="right-section ds-half" <?= $grey_background ? "" : "style='background-color: #e7e8ea'" ?>>
                <?= $header_right ? "<h2>$header_right</h2>" : "" ?>
                <?= $image_right ? "<div class='left-section-image ds-image' style=background-image:url($image_right)></div>" : "" ?>
                <?= $content_right ? $content_right : "" ?>
            </div>
        </div>
        <?= $sub_content ? "<div class='ds-subcontent'>$sub_content</div>" : "" ?>
    </div>
</div>
