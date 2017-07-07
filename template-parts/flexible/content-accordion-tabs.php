<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 6/2/2017
 * Time: 10:49 AM
 */


$i = 1;
$j = 1;
?>

<div class="acc-tabs-wrapper">
    <div class="container">
        <div id="acc-tabs">

            <?php if (have_rows('tabs')) : ?>
                <ul class="acc-tabs-controller">
                    <?php while (have_rows('tabs')) : the_row();
                        $title = get_sub_field('title'); ?>
                        <li><a href="#acc-tabs-<?= $i ?>"><?= $title ?></a></li>
                        <?php $i++; ?>
                    <?php endwhile; //End Tabs Repeater For Tabs Controller
                    ?>
                </ul>
            <?php endif; ?>


            <?php if (have_rows('tabs')) : ?>
                <?php while (have_rows('tabs')) : the_row();


                    ?>
                    <div class="accordion" id="acc-tabs-<?= $j ?>">

                        <?php
                        if (have_rows('section_repeater')) :
                            while (have_rows('section_repeater')) : the_row();


                                $section_title = get_sub_field('section_title');
                                $section_image = get_sub_field('section_image');
                                $section_content = get_sub_field('section_content');

                                ?>

                                <?= $section_title ? "<h3 class='section-title'>$section_title</h3>" : "" ?>
                                <div class="section-content">

                                    <?= $section_image ? $section_image : "" ?>
                                    <?= $section_content ? $section_content : "" ?>
                                </div>


                            <?php endwhile; //End Section Repeater
                            ?>
                        <?php endif; ?>

                    </div>


                    <?php $j++ ?>
                <?php endwhile; //End Tabs Repeater
                ?>
            <?php endif; ?>
        </div>
    </div>
</div>