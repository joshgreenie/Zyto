<?php
/**
 * Flexible template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _scorch
 * 
 * 
 */
$contentOptions = array(
    //Layout name   => stub-{type}.php
    'content'              => 'content',
    'slider'               => 'slider',
    'hero_slider'          => 'hero-slider',
    'full_width'           => 'full-width',
    'hero_header'          => 'hero-header',
    'triangles'            => 'triangles',
    'split_shelf'          => 'split-shelf',
    'alternating'          => 'alternating',
    'learn_more'           => 'learn-more',
    'testimonial_slider'   => 'testimonial-slider',
    'large_cta'            => 'large-cta',
    'tabs'                 => 'tabs',
    'accordion'            => 'accordion',
    'leadership'           => 'leadership',
    'double_section'       => 'double-section',
    'columns_three'        => 'columns-three',
    'columns_four'         => 'columns-four',
    'columns_five'         => 'columns-five',
    'logo_slider'          => 'logo-slider',
    'product'              => 'product',
    'geo'                  => 'geo',
    'forms'                => 'forms',
    'accordion_tabs'       => 'accordion-tabs',
    'chat'                 => 'chat',

);
// check if the flexible content field has rows of data
if( have_rows('flexible_fields') ):
    // loop through the rows of data
    while ( have_rows('flexible_fields') ) : the_row();
        // Identify the selected layout
        $rowLayout = get_row_layout();
        // If a layout is selected
        if ($rowLayout) :
            foreach ($contentOptions as $key => $value) {
                if ($rowLayout == $key){
                    get_template_part('template-parts/flexible/content', $value);
                    break;
                }
            }
        else :
            // No layout selected
        endif;
    endwhile;
    the_content();
else :
    // no layouts found
endif;