<?php
global $post;
$post_slug = $post->post_name;
$master = wp_get_post_by_slug($post_slug, 'page');
$blocks = wp_get_page_and_children($post_slug);
$block_counter = 1;
?>
<?php get_header() ?>
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
            <?php foreach ($blocks as $child) { ?>
                <div data-post-title="<?php echo $child->post_title; ?>"
                     class="<?php echo(get_metadata('post', $child->ID, 'className', true)); ?>">
                    <?php echo $child->post_content; ?>
                    <?php if ($block_counter === 6) { ?>
                        <?php echo do_shortcode('[ninja_form id=2]'); ?>
                    <?php } ?>
                </div>
                <?php $block_counter += 1 ?>
            <?php } ?>
        </div>
    </div>
<?php get_footer() ?>