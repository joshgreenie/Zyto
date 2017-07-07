<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 3/14/2017
 * Time: 2:26 PM
 */

$header = get_sub_field('header');
$left_title = get_sub_field('left_title');
$left_icon = get_sub_field('left_icon');
$left_bg_image = get_sub_field('left_bg_image');
$center_title = get_sub_field('center_title');
$center_icon = get_sub_field('center_icon');
$center_bg_image = get_sub_field('center_bg_image');
$right_title = get_sub_field('right_title');
$right_icon = get_sub_field('right_icon');
$right_bg_image = get_sub_field('right_bg_image');
$font_awesome_left = get_sub_field('font_awesome_left');
$font_awesome_center = get_sub_field('font_awesome_center');
$font_awesome_right = get_sub_field('font_awesome_right');
$left_link = get_sub_field('left_link');
$center_link = get_sub_field('center_link');
$right_link = get_sub_field('right_link');

?>


<div
    class="learn-more-wrapper">
    <div class="container">
        <div class="lm-header">
            <h2><?= $header ? $header : "" ?></h2>
        </div>
        <div class="lm-content-wrapper">
            <div
                class="lm-left-content lm-content" <?= $left_bg_image ? "style='background-image:url($left_bg_image);'" : ""; ?>>
                <a href="<?= $left_link ?>">
                <span class="lm-icon"><h2
                        class="<?= $left_icon ? $left_icon : "No Icon" ?>"></h2></span>
                    <h2 class="lm-title"><?= $left_title ?></h2>
                </a>
            </div>
            <div
                class="lm-center-content lm-content" <?= $center_bg_image ? "style='background-image:url($center_bg_image);'" : ""; ?>>
                <a href="<?= $center_link ?>">
                <span class="lm-icon"><h2
                        class="<?= $center_icon ? $center_icon : "No Icon" ?>"></h2></span>
                    <h2 class="lm-title"><?= $center_title ?></h2>
                </a>
            </div>
            <div
                class="lm-right-content lm-content" <?= $right_bg_image ? "style='background-image:url($right_bg_image);'" : ""; ?>>
                <a href="<?= $right_link ?>">
                <span class="lm-icon"><h2
                        class="<?= $right_icon ? $right_icon : "No Icon" ?>"></h2></span>
                    <h2 class="lm-title"><?= $right_title ?></h2>
                </a>
            </div>
        </div>
    </div> 
</div>
