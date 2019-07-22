<?php
$masthead = wp_get_post_by_slug('killarney-lodge', 'page');
$blocks = wp_get_page_and_children('killarney-lodge');
?>
<?php get_header() ?>
    <!-- -->
    <!-- -->
    <!-- -->
    <div class="container">
        <div class="kl-masthead">
            <?php echo $masthead->post_content; ?>
        </div>
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