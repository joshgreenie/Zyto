<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 3/21/2017
 * Time: 10:41 AM
 */


?>

<div class="testimonials-wrapper">
    <div class="container">
        <div class="testimonials-slider">
            <?php if (have_rows('testimonials_repeater')) :
                while (have_rows('testimonials_repeater')) : the_row();
                    $header = get_sub_field('header');
                    $content = get_sub_field('content');
                    ?>
                    <div class="testimonials-content-wrapper">
                        <h2 class="testimonials-header"><?= $header ? $header : "" ?></h2>
                        <div class="testimonials-content"><?= $content ? $content : "" ?></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>
