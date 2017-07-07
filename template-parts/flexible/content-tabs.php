<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 4/18/2017
 * Time: 12:24 PM
 */

$i = 1;
$j = 1;
?>


<div class="tabs-wrapper">
    <div class="container">
        <div id="tabs">

            <?php if (have_rows('tabs_repeater')) : ?>
                <ul class="tabs-controller">
                    <?php while (have_rows('tabs_repeater')) : the_row();
                        $tab_title = get_sub_field('tab_title'); ?>
                        <li><a href="#tabs-<?= $i ?>"><?= $tab_title ?></a></li>
                        <?php $i++; ?>
                    <?php endwhile; //End Tabs Repeater For Tabs Controller
                    ?>
                </ul>
            <?php endif; ?>


            <?php if (have_rows('tabs_repeater')) : ?>
                <?php while (have_rows('tabs_repeater')) : the_row();

                    $tab_content_selection = get_sub_field('tab_content_selection');
                    $tab_content = get_sub_field('tab_content');

                    ?>
                    <div class="tab" id="tabs-<?= $j ?>">

                        <?php if ($tab_content_selection === 'wysiwyg') { ?>
                            <div class="tab-content-wrapper">
                                <div class="tab-content">
                                    <?= $tab_content ? $tab_content : "" ?>
                                </div>
                            </div>
                        <?php } elseif ($tab_content_selection === 'blocks') {

                            if (have_rows('tab_block_repeater')) : ?>
                                <div class="blocks-outer-wrapper">
                                    <?php while (have_rows('tab_block_repeater')) : the_row();

                                        $tab_block_header = get_sub_field('tab_block_header');
                                        $tab_block_content = get_sub_field('tab_block_content');
                                        $tab_block_cta_link = get_sub_field('tab_block_cta_link');
                                        $tab_block_cta_text = get_sub_field('tab_block_cta_text');
                                        ?>

                                        <div class="block-wrapper">
                                            <div class="block-content-wrapper">
                                                <?= $tab_block_header ? "<h3 class='block-header'>$tab_block_header</h3>" : "" ?>
                                                <div
                                                    class="block-content"><?= $tab_block_content ? $tab_block_content : "" ?>
                                                </div>
                                            </div>
                                            <?= $tab_block_cta_link ? "<div class='block-cta'><a href='$tab_block_cta_link'>$tab_block_cta_text</a></div>" : "" ?>

                                        </div>

                                    <?php endwhile; //End Tabs Block Repeater
                                    ?>
                                </div>
                            <?php endif; ?>

                        <?php } else {
                            echo "<h2>Please Select Either Blocks or WYSIWYG for the tab content</h2>";
                        } ?>

                    </div>
                    <?php $j++ ?>
                <?php endwhile; //End Tabs Repeater
                ?>
            <?php endif; ?>
        </div>
    </div>
</div>