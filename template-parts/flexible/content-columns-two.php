<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 5/23/2017
 * Time: 1:55 PM
 */

 while (have_rows('columns_columns')) : the_row();
$header = get_sub_field('header');
$subheader = get_sub_field('subheader');
$link = get_sub_field('link');
$link_text = get_sub_field('link_text');
$background_image = get_sub_field('background_image');
?>

<div class="column">
    <div class="column-content">
        <?= $header ? "<a href='$link'><span id='column-header'><h2>$header</h2></span></a>" : ""; ?>
        <div
            class="column-image" <?= $background_image ? "style=background-image:url($background_image)" : "" ?> ></div>
        <div class="column-inner-content">
                            <?= $subheader ? "<span id='column-subheader'>$subheader</span>" : "" ?>
            <?php if ($link_text) { ?>
                <span id='column-cta'><a href='<?= $link ?>'><h3><?= $link_text ?></h3></a></span>
            <?php } ?>
        </div>
    </div>
</div>
<?php endwhile ?>

