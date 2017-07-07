<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 5/23/2017
 * Time: 1:55 PM
 */


if (have_rows('columns_repeater')): ?>
    <div class="columns">
        <div class="container">
            <div class="column-wrapper count-five">
                <?php while (have_rows('columns_repeater')) : the_row();


                    $background_image = NULL;
                    $icon = NULL;
                    $header = get_sub_field('header');
                    $imageicon = get_sub_field('imageicon');
                    $subheader = get_sub_field('subheader');
                    $link = get_sub_field('link');
                    $link_text = get_sub_field('link_text');

                    if($imageicon === 'image') {
                        $background_image = get_sub_field('background_image');
                    } elseif($imageicon === 'icon') {
                        $icon = get_sub_field('icon');
                    }
                    ?>

                    <div class="column">
                        <div class="column-content">
                            <?= $header ? "<a href='$link'><span id='column-header'><h1>$header</h1></span></a>" : ""; ?>
                            <?= $background_image ? "<div class='column-image' style=background-image:url($background_image)></div>" : "" ?>
                            <?= $icon ? "<div class='column-icon'><img src='$icon'></div>" : "" ?>
        <?php if ($link || $subheader ) { ?>
                            <div class="column-inner-content">
                                <?= $subheader ? "<span id='column-subheader'>$subheader</span>" : "" ?>
                                <?php if ($link_text) { ?>
                                    <span id='column-cta'><a href='<?= $link ?>'><h3><?= $link_text ?></h3></a></span>
                                <?php } ?>
                            </div>
                                <?php } ?>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </div>
<?php endif; ?>
