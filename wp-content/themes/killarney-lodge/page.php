<?php
$collection = wp_get_page_and_children('killarney-lodge');
?>
<?php get_header() ?>
    <!-- -->
    <!-- -->
    <!-- -->
    <div class="container">
        Masthead
    </div>
    <div class="container">
        <?php foreach ($collection as $child) { ?>
            <div data-post-title="<?php echo $child->post_title; ?>"
                 class="<?php echo ( get_metadata('post', $child->ID, 'className', true) ); ?>">
                <?php echo $child->post_content; ?>
            </div>
        <?php } ?>
    </div>
    <!-- -->
    <!-- -->
    <!-- -->
<?php get_footer() ?>