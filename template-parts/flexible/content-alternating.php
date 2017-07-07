<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 3/14/2017
 * Time: 1:07 PM
 */

$header = get_sub_field('header');
$wysiwyg = get_sub_field('wysiwyg');
$content_position = get_sub_field('content_position');
$background_color = get_sub_field('background_color');
$header_underline = get_sub_field('header_underline');
$image            = get_sub_field('image');


?>


<div
    class="alternating-wrapper <?= $content_position ?>" <?= $background_color ? "style='background-color: #e7e8ea'" : "" ?>>
    <div class="container">
        <div class="alternating-content content-position-<?= $content_position ?>" <?= $image ? "" : "style='width:100%'"; ?>>
            <h2 class="alternating-header <?= $header_underline ? "underline" : ""; ?>"><?= $header ?></h2>
            <?= $wysiwyg ? '<div class="alternating-wysiwyg">' . $wysiwyg . '</div>' : ""; ?>
        </div>
        <div class="alternating-content-opposite-<?= $content_position ?> opposite" <?php echo $image ? "style='background-image:url($image);'" : "style='display:none'"; ?>>
        </div>
    </div>
</div>