<?php
$blocks = wp_get_page_and_children('rates');
?>
<?php get_header() ?>
    <!-- -->
    <!-- -->
    <!-- -->
    <div class="kl-masthead" tabindex="-1">
        <div class="kl-cabins">
            <div class="kl-cabins--image">
                <!-- populated by JS -->
            </div>
            <div class="kl-cabins--selectors">
                <!-- populated by JS -->
            </div>
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