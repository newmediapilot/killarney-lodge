<?php
global $post;
$post_slug = 'killarney-lodge-newsletter';
$master = wp_get_post_by_slug($post_slug, 'page');
$blocks = wp_get_page_and_children($post_slug);
?>
<?php get_header() ?>
    <!-- begin page-killarney-lodge-newsletter.php -->
    <!-- begin page-killarney-lodge-newsletter.php -->
    <!-- begin page-killarney-lodge-newsletter.php -->
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
                        <h6 class="newsletter-title">Lodge News</h6>
                    </div>
                    <div class="col-12">
                        <ul class="newsletter-listing">
                            <?php
                            /*
                             * get posts that are category 'killarney-lodge-newsletter'
                             */
                            $newsletter_args = array(
                                'category_name' => 'newsletter',
                                'order' => 'DESC',
                                'numberposts' => 9999
                            );
                            $newsletter_posts = get_posts($newsletter_args);
                            foreach ($newsletter_posts as $newsletter) : setup_postdata($newsletter);
                                echo "<li>";
                                echo $newsletter->post_content;
                                echo "</li>";
                            endforeach;
                            ?>
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
    <!-- end page-killarney-lodge-newsletter.php -->
    <!-- end page-killarney-lodge-newsletter.php -->
    <!-- end page-killarney-lodge-newsletter.php -->
<?php get_footer() ?>