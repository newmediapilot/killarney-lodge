<!-- begin top-nav-menu -->

<?php $home_menu = wp_get_nav_menu_items('Home Menu'); ?>
<?php $main_menu = wp_get_nav_menu_items('Default Top Menu'); ?>
<?php $phone_menu = wp_get_nav_menu_items('Phone Menu'); ?>
<?php $reservation_menu = wp_get_nav_menu_items('Reservation Menu'); ?>

<?php
$main_menu_parents = array_filter($main_menu, function ($footer_item) {
    return $footer_item->menu_item_parent == "0";
});
foreach ($main_menu_parents as $menu_item_parent) {
    $menu_item_parent->menu_item_children = array_filter($main_menu, function ($footer_item) use ($menu_item_parent) {
        return $footer_item->menu_item_parent == $menu_item_parent->ID;
    });
}
//var_dump($main_menu_parents);
?>

<nav class="kl-navbar--desktop">
    <!-- top-nav-desktop -->
    <div class="kl-navbar-wrapper">
        <div class="kl-navbar--holder">

            <div class="kl-navbar--menu">
                <a href="<?php echo $home_menu[0]->url ?>"
                   title="<?php echo $home_menu[0]->title ?>">
                    <img src="/wp-content/themes/killarney-lodge/res/LOGO.png"
                         alt="<?php echo $home_menu[0]->title ?>">
                </a>
            </div>

            <div class="kl-navbar--items">
                <nav class="kl-responsive-nav">
                    <!-- trigger -->
                    <label for="mobile-trigger" title="Open/Close Menu" class="nav-mobile-trigger">
                        <i class="fas fa-caret-square-down"></i>
                    </label>
                    <input name="mobile-trigger" id="mobile-trigger" type="checkbox">
                    <!-- end trigger -->
                    <div class="responsive-nav">
                        <?php foreach ($main_menu_parents as $main_menu_parent) { ?>
                            <ul class="menu-main-items">
                                <li class="menu-main-item">
                                    <a href="<?php echo $main_menu_parent->url ?>"
                                       target="<?php echo $main_menu_parent->target ?>"
                                       title="<?php echo $main_menu_parent->title ?>"
                                       class="menu-sub-item-link">
                                        <?php echo $main_menu_parent->title ?>
                                    </a>
                                    <?php if (!empty($main_menu_parent->menu_item_children)) { ?>
                                        <!-- trigger -->
                                        <label for="sub-item-trigger-<?php echo $main_menu_parent->ID ?>"
                                               title="Toggle Items (<?php echo $main_menu_parent->title ?>)"
                                               class="menu-sub-item-trigger">
                                            <i class="fas fa-caret-square-down"></i>
                                        </label>
                                        <input name="sub-item-trigger"
                                               id="sub-item-trigger-<?php echo $main_menu_parent->ID ?>" type="radio">
                                        <!-- end trigger -->
                                        <ul class="menu-sub-items">
                                            <?php foreach ($main_menu_parent->menu_item_children as $menu_child) { ?>
                                                <li class="menu-sub-item">
                                                    <a title="<?php echo $menu_child->title ?>"
                                                       href="<?php echo $menu_child->url ?>"
                                                       target="<?php echo $menu_child->target ?>">
                                                        <i class="fas fa-chevron-right"></i><?php echo $menu_child->title ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                    <!-- end dropdown menu type -->
                </nav>

            </div>
            <div class="kl-navbar--phone">
                <div>
                    <a href="<?php echo $phone_menu[0]->url ?>"
                       title="<?php echo $phone_menu[0]->title ?>"
                       class="kl-navbar--phone-number"><?php echo $phone_menu[0]->attr_title ?></a>
                    <a href="<?php echo $reservation_menu[0]->url ?>"
                       title="<?php echo $reservation_menu[0]->title ?>"
                       class="kl-navbar--phone-title"><?php echo $phone_menu[0]->title ?></a>
                </div>
            </div>
        </div>
    </div><!-- end top-nav-desktop -->
    <!-- book now -->
    <a href="<?php echo $reservation_menu[0]->url ?>"
       target="_blank"
       title="<?php echo $reservation_menu[0]->title ?>"
       class="kl-navbar--book-now">
        <span>
        B<br>
        O<br>
        O<br>
        K<br>
        &nbsp;<br>
        H<br>
        E<br>
        R<br>
        E</span>
    </a>
    <!-- end book now -->
</nav>

<!-- end top-nav-menu -->