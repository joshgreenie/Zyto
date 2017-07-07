<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 3/21/2017
 * Time: 2:43 PM
 */

?>

<div class="accordion-outer-wrapper">
    <div class="container">

        <?php if (have_rows('accordion_repeater')) :
            while (have_rows('accordion_repeater')) : the_row();

                $accordion_title = get_sub_field('accordion_title');
?>
                <span class="accordion-title"><?= $accordion_title ? "<h2>$accordion_title</h2>" : "" ?></span>
                <div class="accordion">

                    <?php if (have_rows('section_repeater')) :
                        while (have_rows('section_repeater')) : the_row();


                            $section_title      = get_sub_field('section_title');
                            $section_image      = get_sub_field('section_image');
                            $section_content    = get_sub_field('section_content');

                            ?>

                        <?= $section_title ? "<h3 class='section-title'>$section_title</h3>" : "" ?>
                        <div class="section-content">

                            <?= $section_image ? $section_image : "" ?>
                            <?= $section_content ? $section_content : "" ?>
                        </div>



                        <?php endwhile; //End Section Repeater ?>
                <?php endif; ?>

                </div>


            <?php endwhile; //End Accordion Repeater  ?>
        <?php endif; ?>

    </div>
</div>
