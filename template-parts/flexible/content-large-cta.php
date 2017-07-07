<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 3/21/2017
 * Time: 11:43 AM
 */

$cta_wysiwyg = get_sub_field('cta_wysiwyg');
$background_image = get_sub_field('background_image');
$cta_link = get_sub_field('cta_link'); ?>


<div class="large-cta-wrapper">
    <div class="container">
        <div class="cta-content">
            <div
                class="cta-background" <?= $background_image ? "style='background-image:url($background_image);'" : ""; ?>>
                <div class="cta-wysiwyg">
                    <?= $cta_link ? "<a href='$cta_link'>" : "" ?>
                        <?= $cta_wysiwyg ? $cta_wysiwyg : "" ?>
                    <?= $cta_link ? "</a>" : "" ?>
                </div>
            </div>
        </div>
    </div>
</div>
