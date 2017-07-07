<?
$clone_slider = get_sub_field('content_slider');
$ne_header = get_sub_field('ne_header');
$slides = $clone_slider['slides']; ?>


<div class="slider-wrapper">
    <div class="container">
        <div class="news-events-wrapper">
            <div class="ne-content-wrapper">
                <div class="owl-carousel news-events">
                    <?php
                    // query
                    $the_query = new WP_Query(array(
                        'category_name' => 'news',
                        'posts_per_page' => 3,
                        'order' => 'DESC'
                    ));

                    ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()) :
                            $the_query->the_post(); ?>

                            <div class="item">
                                <div class="ne-content">
                                    <span class="ne-header"><h2><?= $ne_header ?></h2></span>
                                    <span id="ne-title"><h3><a
                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></span>
                                    <div class="post-content">
                                        <h4><?= get_the_content(); ?></h4>
                                        <span class="learn"><a href="<?php the_permalink(); ?>"><h3>LEARN
                                                MORE</h3><img
                                                src='/wp-content/uploads/2017/03/blue-arrow-lg.png'></a></h4></a></span>
                                    </div>
                                </div>
                                <div class="post-image-wrapper"
                                     style="background-image:url('<?= the_post_thumbnail_url() ?>')">
                                    <a
                                        href="<?php the_permalink(); ?>">
                                        <h3><?= the_title(); ?></h3>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
                </div>
            </div>
        </div>
    </div>
</div>






