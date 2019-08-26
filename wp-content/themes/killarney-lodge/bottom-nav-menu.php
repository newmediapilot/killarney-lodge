<!-- begin bottom-nav-menu -->

<?php $social_menu = wp_get_nav_menu_items('Social Menu'); ?>
<?php $footer_menu = wp_get_nav_menu_items('Default Top Menu'); ?>

<?php
$footer_menu_parents = array_filter($footer_menu, function ($footer_item) {
    return $footer_item->menu_item_parent == "0";
});
foreach ($footer_menu_parents as $menu_item_parent) {
    $menu_item_parent->menu_item_children = array_filter($footer_menu, function ($footer_item) use ($menu_item_parent) {
        return $footer_item->menu_item_parent == $menu_item_parent->ID;
    });
}
//var_dump($footer_menu_parents);
?>

<footer class="container kl-footer">
    <div class="row">
        <!-- social items -->
        <div class="kl-footer--social col-12 col-lg-3">
            <div class="row m-0">
                <div class="col-2 col-md-2 col-lg-6">
                    <a rel="noreferrer nofollow"
                       href="<?php echo $social_menu[0]->url ?>"
                       target="_blank"
                       title="<?php echo $social_menu[0]->title ?>">
                        <img alt="<?php echo $social_menu[0]->title ?>"
                             src="/wp-content/themes/killarney-lodge/res/tripAdvisor.jpg">
                    </a>
                </div>
                <div class="col-2 col-md-2 col-lg-6">
                    <a rel="noreferrer nofollow"
                       href="<?php echo $social_menu[1]->url ?>"
                       target="_blank"
                       title="<?php echo $social_menu[1]->title ?>">
                        <img alt="<?php echo $social_menu[1]->title ?>"
                             src="/wp-content/themes/killarney-lodge/res/facebook.jpg">
                    </a>
                </div>
                <div class="col-2 col-md-2 col-lg-6">
                    <a rel="noreferrer nofollow"
                       href="<?php echo $social_menu[2]->url ?>"
                       target="_blank"
                       title="<?php echo $social_menu[2]->title ?>">
                        <img alt="<?php echo $social_menu[2]->title ?>"
                             src="/wp-content/themes/killarney-lodge/res/instagram.jpg">
                    </a>
                </div>
                <div class="col-2 col-md-2 col-lg-6">
                    <a rel="noreferrer nofollow"
                       href="<?php echo $social_menu[3]->url ?>"
                       target="_blank"
                       title="<?php echo $social_menu[3]->title ?>">
                        <img alt="<?php echo $social_menu[3]->title ?>"
                             src="/wp-content/themes/killarney-lodge/res/youtube.jpg">
                    </a>
                </div>
                <div class="col-2 col-md-2 col-lg-12">
                    <a rel="noreferrer nofollow"
                       href="<?php echo $social_menu[4]->url ?>"
                       target="_blank"
                       title="<?php echo $social_menu[4]->title ?>">
                        <img alt="<?php echo $social_menu[4]->title ?>"
                             src="/wp-content/themes/killarney-lodge/res/weather.jpg">
                    </a>
                </div>
            </div>
        </div>
        <!-- end social items -->
        <!-- nav items -->
        <div class="col-12 col-md-12 col-lg-9">
            <div class="row">
                <?php foreach ($footer_menu_parents as $footer_menu_parent) { ?>
                    <div class="kl-footer--list col-6 col-md-2 col-lg-2 col-xl-auto">
                        <ul>
                            <li>
                                <a href="<?php echo $footer_menu_parent->url ?>"
                                   title="<?php echo $footer_menu_parent->title ?>"><?php echo $footer_menu_parent->title ?></a>
                            </li>
                            <?php foreach ($footer_menu_parent->menu_item_children as $menu_child) { ?>
                                <li>
                                    <a href="<?php echo $menu_child->url ?>"
                                       title="<?php echo $menu_child->title ?>"><?php echo $menu_child->title ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- end nav items -->
    </div>
</footer>

<!-- end bottom-nav-menu -->