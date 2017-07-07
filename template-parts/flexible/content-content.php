<?php
/**
 * Basic content block - alter to fit
 */

// vars

$content = get_sub_field('content');
$header = get_sub_field('header');
$u_header = get_sub_field('underline_header');
$no_padding = get_sub_field('padding');

// ternary operator
//  echo $content ? "$content" : "" ;

if ($content) { ?>

    <div class="content-flex <?= $no_padding ? "no-pad" : "" ?>">
        <div class="container">
        <span id="content-header" <?= $u_header ? "class='underline'" : "" ?>>
            <?= $header ? "<h2>$header</h2>" : "" ?>
         </span>

            <div class="content-wrapper">
                <?= $content ?>
            </div>
        </div>
    </div>

<? } ?>
