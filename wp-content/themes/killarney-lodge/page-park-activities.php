<?php
$masthead = wp_get_post_by_slug('park-activities', 'page');
$blocks = wp_get_page_and_children('park-activities');
?>
<?php get_header() ?>
    <!-- -->
    <!-- -->
    <!-- -->
    <div class="kl-masthead" tabindex="-1">
        <?php echo do_shortcode('[wonderplugin_slider id=2]'); ?>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($blocks as $child) { ?>
                <div data-post-title="<?php echo $child->post_title; ?>"
                     class="<?php echo(get_metadata('post', $child->ID, 'className', true)); ?>">
                    <?php echo $child->post_content; ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- -->
    <!-- -->
    <!-- -->
<?php get_footer() ?>