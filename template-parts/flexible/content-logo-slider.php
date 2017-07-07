<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 5/24/2017
 * Time: 2:54 PM
 */

$title  = get_sub_field('title');


if( have_rows('slider') ):?>

    <div class="logo-slider-wrapper">
        <div class="container">
            <?= $title ? "<h2 class='logo-header'>$title</h2>" : "" ?>
            <div class="logo-slider">
                <?php   // loop through the rows of data
                while ( have_rows('slider') ) : the_row();
                    $image  = get_sub_field('image');
                    $name  = get_sub_field('name');
                    ?>
                    <div class="item">
                        <img src="<?=$image?>">
                        <?= $name ? "<h5>$name</h5>" : "" ?>
                    </div>
                <?php    endwhile;?>
            </div>
        </div>
    </div>
<?php else :
    // no rows found
endif;?>