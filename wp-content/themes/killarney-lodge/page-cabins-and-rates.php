<?php
$blocks = wp_get_page_and_children('cabins-and-rates');
?>
<?php get_header() ?>
    <!-- -->
    <!-- -->
    <!-- -->
    <div class="kl-masthead">
        cabins and rates selector
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