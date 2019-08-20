<?php
global $post;
$post_slug = 'newsletter';
$master = wp_get_post_by_slug($post_slug, 'page');
$blocks = wp_get_page_and_children($post_slug);
?>
<?php get_header() ?>
    <!-- -->
    <!-- -->
    <!-- -->
    <div class="kl-masthead" tabindex="-1">
        <?php
        $sliderId = get_metadata('post', $master->ID, 'sliderId', true);
        if (!$sliderId) {
            echo('<h1>no sliderId provided in post: ' . $master->ID . '</h1>');
        }
        echo do_shortcode('[wonderplugin_slider id=' . $sliderId . ']');
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div data-post-title="<?php echo $blocks[0]->post_title; ?>"
                     class="<?php echo(get_metadata('post', $blocks[0]->ID, 'className', true)); ?>">
                    <?php echo $blocks[0]->post_content; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="row newsletter-list">
                    <div class="col-12">
                        <h4>Lodge News</h4>
                    </div>
                    <div class="col-12">
                        <?php

                        /**
                         * get posts that are category 'newsletter'
                         */

                        ?>
                        <ul>
                            <li class="newsletter-item">2019</li>
                            <li class="newsletter-item">2018</li>
                            <li class="newsletter-item">2017</li>
                            <li class="newsletter-item">2016</li>
                            <li class="newsletter-item">2015</li>
                            <li class="newsletter-item">2014</li>
                            <li class="newsletter-item">2013</li>
                            <li class="newsletter-item">2012</li>
                            <li class="newsletter-item">2011</li>
                            <li class="newsletter-item">2010</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
                <div class="row">
                    <?php foreach (array_slice($blocks, 1) as $child) { ?>
                        <div data-post-title="<?php echo $child->post_title; ?>"
                             class="<?php echo(get_metadata('post', $child->ID, 'className', true)); ?>">
                            <?php echo $child->post_content; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- -->
    <!-- -->
    <!-- -->
<?php get_footer() ?>