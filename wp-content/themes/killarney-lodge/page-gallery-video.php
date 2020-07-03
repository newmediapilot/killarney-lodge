<?php
global $post;
$post_slug = $post->post_name;
$master = wp_get_post_by_slug($post_slug, 'page');
$blocks = wp_get_page_and_children($post_slug);
$blocks_fea = [];
$blocks_top = [];
$blocks_bot = [];
/**
 * sort these based by name top/bot
 */
foreach ($blocks as $item) {
    if (strpos($item->post_title, '-feature-') !== false) {
        array_push($blocks_fea, $item);
    }
    if (strpos($item->post_title, '-top-') !== false) {
        array_push($blocks_top, $item);
    }
    if (strpos($item->post_title, '-bot-') !== false) {
        array_push($blocks_bot, $item);
    }
}
?>

<?php get_header() ?>

<div class="gallery-video">
    <div class="gallery-slogan">
        <img title="Relax Explore Enjoy"
             aria-hidden="true"
             src="/wp-content/themes/killarney-lodge/res/relaxExploreEnjoy.png">
    </div><!-- /end gallery-slogan -->
    <div class="gallery-feature">
        <div class="container">
            <div class="row">
                <?php foreach ($blocks_fea as $child) { ?>
                    <div data-toggle="modal" data-target="#modalFeaView"
                         data-post-title="<?php echo $child->post_title; ?>"
                         data-video="<?php echo(get_metadata('post', $child->ID, 'video', true)); ?>"
                         class="<?php echo(get_metadata('post', $child->ID, 'className', true)); ?>">
                        <?php echo $child->post_content; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div><!-- /end gallery-feature -->
    <div class="gallery-youtube">
        <div class="container">
            <div class="row">
                <?php foreach ($blocks_top as $child) { ?>
                    <div data-toggle="modal" data-target="#modalTopView"
                         data-post-title="<?php echo $child->post_title; ?>"
                         data-video="<?php echo(get_metadata('post', $child->ID, 'video', true)); ?>"
                         class="<?php echo(get_metadata('post', $child->ID, 'className', true)); ?>">
                        <?php echo $child->post_content; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div><!-- /end gallery-youtube -->
    <div class="gallery-tagline">
        <img title="Peaceful Moments at Killarney Lodge Imagine... Be There"
             aria-hidden="true"
             src="/wp-content/uploads/2020/05/peaceful_moments.png">
    </div><!-- /end gallery-slogan -->
    <div class="gallery-mp4">
        <div class="container">
            <div class="row">
                <?php foreach ($blocks_bot as $child) { ?>
                    <div data-toggle="modal" data-target="#modalBotView"
                         data-post-title="<?php echo $child->post_title; ?>"
                         data-video="<?php echo(get_metadata('post', $child->ID, 'video', true)); ?>"
                         class="<?php echo(get_metadata('post', $child->ID, 'className', true)); ?>">
                        <?php echo $child->post_content; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div><!-- /end gallery-mp4 -->

    <!-- /begin Modal for Feature -->
    <div class="modal fade" id="modalFeaView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-rect" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <video id="gallery-video-fea-id"
                           width="100%" height="100%" controls autoplay="autoplay">
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /end Modal for Feature-->

    <!-- /begin Modal for YouTube-->
    <div class="modal fade" id="modalTopView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-rect" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="video-youtube-container">
                        <iframe id="gallery-video-youtube-id"
                                width="560" height="315" src="" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /end Modal for YouTube-->

    <!-- /begin Modal for MP4-->
    <div class="modal fade" id="modalBotView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-square" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <video id="gallery-video-mp4-id"
                           width="100%" height="100%" controls autoplay="autoplay">
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /end Modal for MP4-->

</div><!-- /end gallery-video -->


<?php get_footer() ?>
