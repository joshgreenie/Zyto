<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 2/23/2017
 * Time: 3:03 PM
 */

$left_background_image = get_sub_field('left_background_image');
$left_header = get_sub_field('left_header');
$left_subheader = get_sub_field('left_subheader');
$left_link = get_sub_field('left_link');
$left_link_text = get_sub_field('left_link_text');

$right_background_image = get_sub_field('right_background_image');
$right_header = get_sub_field('right_header');
$right_subheader = get_sub_field('right_subheader');
$right_link = get_sub_field('right_link');
$right_link_text = get_sub_field('right_link_text'); ?>


<div class="split-shelf-wrapper">
    <div class="arrow-down"></div>
    <div
        class="left-bg" <?php echo $left_background_image ? "style='background-image:url($left_background_image);'" : ""; ?>>

    </div>
    <div
        class="right-bg" <?php echo $right_background_image ? "style='background-image:url($right_background_image);'" : ""; ?>>
    </div>
    <div class="container">
        <div class="split-shelf-content">
            <div class="left-content-wrapper">
                <div class="left-content">
            <span class="ss-header">
                <?= $left_header ? '<h2>' . $left_header . '</h2>' : ""; ?>
            </span>
                    <span class="ss-subheader">
                <?= $left_subheader ? $left_subheader : ""; ?>
            </span>
                    <span
                        class="ss-link"><?= $left_link_text ? "<h4><a href='$left_link'>" . $left_link_text . "<img src='/wp-content/uploads/2017/02/blue-tri-right.png'></a></h4>" : ""; ?></span>
                </div>
            </div>
            <div class="right-content-wrapper">
                <div class="right-content">
            <span class="ss-header">
                <?= $right_header ? '<h2>' . $right_header . '</h2>' : ""; ?>
            </span>
                    <span class="ss-subheader">
                <?= $right_subheader ? $right_subheader : ""; ?>
            </span>
                    <span
                        class="ss-link"><?= $right_link_text ? "<h4><a href='$right_link'>" . $right_link_text . "<img src='/wp-content/uploads/2017/02/blue-tri-right.png'></a></h4>" : ""; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

