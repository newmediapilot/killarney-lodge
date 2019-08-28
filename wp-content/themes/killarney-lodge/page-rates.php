<?php
$blocks = wp_get_page_and_children('rates');
?>
<?php get_header() ?>
    <!-- -->
    <!-- -->
    <!-- -->
    <div class="kl-masthead" tabindex="-1">
        <div class="kl-cabins">
            <div class="kl-cabins--images">
                <img class="kl-cabins--image--show"
                     src="/wp-content/themes/killarney-lodge/res/cabin-map/1-Shoreline.jpg"/>
                <img src="/wp-content/themes/killarney-lodge/res/cabin-map/2-MainLake.jpg"/>
                <img src="/wp-content/themes/killarney-lodge/res/cabin-map/3-PrimeLake.jpg"/>
                <img src="/wp-content/themes/killarney-lodge/res/cabin-map/4-Duplex.jpg"/>
                <img src="/wp-content/themes/killarney-lodge/res/cabin-map/5-TwoBedroom.jpg"/>
                <img src="/wp-content/themes/killarney-lodge/res/cabin-map/6-Crowe.jpg"/>
            </div>
            <div class="kl-cabins--selectors">
                <img onmouseover="document.setCabinImage(0)" onmousedown="document.setCabinImage(0)"
                     src="/wp-content/themes/killarney-lodge/res/cabin-map/image1-shoreline.jpg"/>
                <img onmouseover="document.setCabinImage(1)" onmousedown="document.setCabinImage(1)"
                     src="/wp-content/themes/killarney-lodge/res/cabin-map/image2-mainlake.jpg"/>
                <img onmouseover="document.setCabinImage(2)" onmousedown="document.setCabinImage(2)"
                     src="/wp-content/themes/killarney-lodge/res/cabin-map/image3-prime-lake.jpg"/>
                <img onmouseover="document.setCabinImage(3)" onmousedown="document.setCabinImage(3)"
                     src="/wp-content/themes/killarney-lodge/res/cabin-map/image4-duplex.jpg"/>
                <img onmouseover="document.setCabinImage(4)" onmousedown="document.setCabinImage(4)"
                     src="/wp-content/themes/killarney-lodge/res/cabin-map/image5-two-bedroom.jpg"/>
                <img onmouseover="document.setCabinImage(5)" onmousedown="document.setCabinImage(5)"
                     src="/wp-content/themes/killarney-lodge/res/cabin-map/image6-crowe-cottage.jpg"/>
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