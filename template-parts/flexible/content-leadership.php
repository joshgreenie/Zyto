<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 4/20/2017
 * Time: 11:00 AM
 */

$header = get_sub_field('header');

if (have_rows('leadership_repeater')): ?>
    <div class="leadership-outer-wrapper">
        <div class="container">
            <?= $header ? "<div class='leadership-header'><h2>$header</h2></div>" : ""; ?>
            <div class="leadership-wrapper">
                <?php while (have_rows('leadership_repeater')) : the_row();

                    $cta_link = get_sub_field('cta_link');
                    $cta_link_text = get_sub_field('cta_link_text');
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                    $title = get_sub_field('title');


                    ?>
                    <div class="exec-wrapper">
                        <div
                            class="exec-image"> <?= $image ? "<img src='$image' alt='missing'>" : "" ?></div>
                        <div class="exec-content">
                            <span class="exec-name"><?= $name ? "<h2>$name</h2>" : ""; ?></span>
                            <span class="exec-title"><?= $title ? "<h4>$title</h4>" : ""; ?></span>
                            <div class="exec-cta"><a href="<?= $cta_link ?>"><h3><?= $cta_link_text ?></h3></a> <span
                                    class="blue-arrow">
                            <img src="/wp-content/uploads/2017/03/blue-arrow-lg.png">
                                </span></div>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </div>
<?php endif; ?>